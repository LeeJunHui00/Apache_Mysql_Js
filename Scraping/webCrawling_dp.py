from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.chrome.options import Options
import time
import requests
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

chrome_options = Options()
chrome_options.add_experimental_option("detach", True) #브라우저 꺼짐 방지
chrome_options.add_experimental_option("excludeSwitches", ["enable-logging"]) #불필요한 에러 메세지 없애기

url = 'https://dap.deu.ac.kr/sso/login.aspx'
login = webdriver.Chrome() # 현재파일과 동일한 경로일 경우 생략 가능
login.get(url)

login.find_element(By.ID, 'txt_id').send_keys('20183338')
login.find_element(By.ID, 'txt_password').send_keys('rlaeorb1!')
login.find_element(By.ID, 'BtnLogIn').click()

try:
    # 브라우저를 최대 10초까지 기다린다. (xpath의 값이 나올때까지)
    elem = WebDriverWait(login, 20).until(
    EC.presence_of_element_located((By.CLASS_NAME,"tab-content .box-cont"))
    )
    print(elem.text)
finally:
    login.quit()