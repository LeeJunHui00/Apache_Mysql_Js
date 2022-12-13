from bs4 import BeautifulSoup as bs
import requests

import csv
f = open('csv/deu_job_notice.csv', 'w', encoding='utf-8', newline='')
wr = csv.writer(f)

url = 'https://www.deu.ac.kr/www/board/96'

response = requests.get(url)

html_text = response.text

soup = bs(response.text, 'html.parser')

tr = soup.select("tbody>tr")

for i in tr:
    title = i.select_one("tr > td.text-left > a:nth-child(1)").get_text()
    href = i.select_one("tr > td.text-left > a:nth-child(1)").attrs['href']
    writer = i.select_one("tr > td:nth-child(3)").get_text()
    date = i.select_one("tr > td:nth-child(4)").get_text()
    
    data = [title]
    data.append('https://www.deu.ac.kr'+href)
    data.append(writer)
    data.append(date)
    wr.writerow(data)

f.close()