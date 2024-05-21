from flask import Flask, render_template, request, jsonify
import cv2
import numpy as np
import pytesseract
import base64
import re

app = Flask(__name__)

# Fungsi untuk melakukan preprocessing gambar
def preprocess_image(image):
    # Grayscale
    gray_image = cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)
    
    # Thresholding
    _, thresh_image = cv2.threshold(gray_image, 0, 255, cv2.THRESH_BINARY + cv2.THRESH_OTSU)
    
    # Dilasi
    dilated_image = dilate(thresh_image)
    
    # Erosi
    eroded_image = erode(dilated_image)
    
    # Opening (erosion followed by dilation)
    opened_image = opening(eroded_image)
    
    # Noise removal
    denoised_image = remove_noise(opened_image)
    
    return denoised_image

# get grayscale image
def get_grayscale(image):
    return cv2.cvtColor(image, cv2.COLOR_BGR2GRAY)

#thresholding
def thresholding(image):
    return cv2.threshold(image, 0, 255, cv2.THRESH_BINARY + cv2.THRESH_OTSU)[1]

#dilation
def dilate(image):
    kernel = np.ones((5,5),np.uint8)
    return cv2.dilate(image, kernel, iterations = 1)
    
#erosion
def erode(image):
    kernel = np.ones((5,5),np.uint8)
    return cv2.erode(image, kernel, iterations = 1)

#opening - erosion followed by dilation
def opening(image):
    kernel = np.ones((5,5),np.uint8)
    return cv2.morphologyEx(image, cv2.MORPH_OPEN, kernel)

# noise removal
def remove_noise(image):
    return cv2.medianBlur(image,5)

@app.route('/')
def index():
    return render_template('index.html')

@app.route('/upload', methods=['POST'])
def upload():
    # Mengambil gambar dari data yang dikirimkan
    image_data = request.json.get('image')

    # Decode base64 image
    encoded_data = image_data.split(',')[1]
    nparr = np.frombuffer(base64.b64decode(encoded_data), np.uint8)
    image = cv2.imdecode(nparr, cv2.IMREAD_COLOR)

    # Preprocessing gambar
    preprocessed_image = preprocess_image(image)

    # Mengenali teks menggunakan Tesseract OCR
    pytesseract.pytesseract.tesseract_cmd = r"C:/Program Files/Tesseract-OCR/tesseract.exe"
    custom_config_text = r'--oem 3 --psm 7 -l ssd'
    text = pytesseract.image_to_string(preprocessed_image, config=custom_config_text)

    # Menghapus seluruh tanda baca dan spasi dari teks
    text_without_punctuation = re.sub(r'[^A-Za-z0-9]+','', text)

    # Menghapus angka terakhir
    if len(text_without_punctuation) == 4 and text_without_punctuation.isdigit():
        text_without_punctuation = text_without_punctuation[:-1]

    # Bagi hasil dengan 10
    if text_without_punctuation.isdigit():
        result = int(text_without_punctuation) / 10
        print("Hasil:", result)

    return jsonify({'text': result})

if __name__ == '__main__':
    app.run(host='0.0.0.0')
