import csv
from bs4 import BeautifulSoup as bs
import requests

f = open('csv/deu_exchange_notice.csv', 'w', encoding='utf-8', newline='')
wr = csv.writer(f)

url = 'https://exchange.deu.ac.kr/exchange/841/subview.do'

response = requests.get(url)

html_text = response.text

soup = bs(response.text, 'html.parser')

tr = soup.select("tbody>tr")

for i in tr:
    title = i.select_one("a.artclLinkView").get_text()
    href = i.select_one("a.artclLinkView").attrs['href']
    writer = "국제교류팀"
    date = i.select_one("td._artclTdRdate").get_text()
    
    data = [title]
    data.append("https://exchange.deu.ac.kr"+href)
    data.append(writer)
    data.append(date)
    wr.writerow(data)

f.close()