import requests
from bs4 import BeautifulSoup as bs
from selenium import webdriver
from selenium.webdriver.common.by import By
from selenium.webdriver.common.keys import Keys
from selenium.webdriver.chrome.service import Service
from selenium.webdriver.chrome.options import Options
import time
from selenium.webdriver.support.ui import WebDriverWait
from selenium.webdriver.support import expected_conditions as EC

import csv


chrome_options = Options()
chrome_options.add_experimental_option("detach", True) #브라우저 꺼짐 방지
chrome_options.add_experimental_option("excludeSwitches", ["enable-logging"]) #불필요한 에러 메세지 없애기

url = 'https://dap.deu.ac.kr/sso/login.aspx'

login = webdriver.Chrome() # 현재파일과 동일한 경로일 경우 생략 가능
login.get(url)

#로그인
login.find_element(By.ID, 'txt_id').send_keys('20183338')
login.find_element(By.ID, 'txt_password').send_keys('rlaeorb1!')
login.find_element(By.ID, 'BtnLogIn').click()

try:
    elem = WebDriverWait(login, 20).until(
    EC.presence_of_element_located((By.CLASS_NAME,"tab-content .box-cont"))
    )
    print(elem)

    #bs4 페이지 html 가져오기
    now_url = login.page_source
    soup = bs(now_url, 'html.parser')

    #비교과프로그램 신청 가져오기
    f = open('csv/dap_notice.csv', 'w', encoding='utf-8', newline='')
    wr = csv.writer(f)

    box = soup.select_one("#mCSB_4_container > ul")
    title_list = box.select("li")

    for title in title_list:
        data=list()
        data.append(title.get_text()[:-3])
        wr.writerow(data)

    #학사 공지
    f = open('csv/dap_haksa_notice.csv', 'w', encoding='utf-8', newline='')
    wr = csv.writer(f)    
    box = soup.select_one("#Mprogram-cont2")
    title_list = box.select("li")

    for title in title_list:
        data=list()
        data.append(title.get_text()[:-10])
        data.append("https://dap.deu.ac.kr"+title.select_one("a").attrs['href'])
        data.append(title.get_text()[-10:])
        wr.writerow(data)

    #장학 공지
    f = open('csv/dap_scholarship_notice.csv', 'w', encoding='utf-8', newline='')
    wr = csv.writer(f)    
    box = soup.select_one("#Mprogram-cont3")
    title_list = box.select("li")
    

    for title in title_list:
        data=list()
        data.append(title.get_text()[:-10])
        data.append("https://dap.deu.ac.kr"+title.select_one("a").attrs['href'])
        data.append(title.get_text()[-10:])
        wr.writerow(data)

    #취업 공지
    f = open('csv/dap_job_notice.csv', 'w', encoding='utf-8', newline='')
    wr = csv.writer(f)    
    box = soup.select_one("#Mprogram-cont4")
    title_list = box.select("li")

    for title in title_list:
        data=list()
        data.append(title.get_text()[:-10])
        data.append("https://dap.deu.ac.kr"+title.select_one("a").attrs['href'])
        data.append(title.get_text()[-10:])
        wr.writerow(data)

    #교육/모집
    f = open('csv/dap_edu_notice.csv', 'w', encoding='utf-8', newline='')
    wr = csv.writer(f)    
    box = soup.select_one("#Mprogram-cont5")
    title_list = box.select("li")

    for title in title_list:
        data=list()
        data.append(title.get_text()[:-10])
        data.append("https://dap.deu.ac.kr"+title.select_one("a").attrs['href'])
        data.append(title.get_text()[-10:])
        wr.writerow(data)

    #기숙사 공지
    f = open('csv/dap_dorm_notice.csv', 'w', encoding='utf-8', newline='')
    wr = csv.writer(f)    
    box = soup.select_one("#Mprogram-cont6")
    title_list = box.select("li")

    for title in title_list:
        data=list()
        data.append(title.get_text()[:-10])
        data.append("https://dap.deu.ac.kr"+title.select_one("a").attrs['href'])
        data.append(title.get_text()[-10:])
        wr.writerow(data)

finally:
    login.quit()