import csv
from bs4 import BeautifulSoup as bs
import requests

f = open('csv/deu_lib_notice.csv', 'w', encoding='utf-8', newline='')
wr = csv.writer(f)

url = 'https://lib.deu.ac.kr/lib/SlimaPlus.csp'

response = requests.get(url)

html_text = response.text

soup = bs(response.text, 'html.parser')

lis = soup.select("#main_notice>ul>li")

for li in lis:
    title = li.select_one("a").get_text()
    href = "https://lib.deu.ac.kr/"+li.select_one("a").attrs['href']
    date = li.select_one("span").get_text()

    data = list()
    data.append(title)
    data.append(href)
    data.append(date)
    wr.writerow(data)

f.close()
