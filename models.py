import os
import cv2
import pytesseract
import numpy as np
from glob import glob
from matplotlib import pyplot as plt

# Fungsi untuk melakukan preprocessing gambar
def preprocess_image(image_path):
    # Baca gambar
    image = cv2.imread(image_path)
    
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

# Path ke folder gambar input
folder_path = 'images'

# Ambil path gambar terbaru dalam folder
latest_image = max(glob(os.path.join(folder_path, '*.jpg')), key=os.path.getctime)

# Preprocessing gambar
preprocessed_image = preprocess_image(latest_image)

pytesseract.pytesseract.tesseract_cmd = r"C:/Program Files/Tesseract-OCR/tesseract.exe"

custom_config = r'--oem 3 --psm 13 -l seg -c tessedit_char_whitelist=0123456789'
print('TESSERACT OUTPUT')
print(pytesseract.image_to_string(preprocessed_image, config=custom_config))
