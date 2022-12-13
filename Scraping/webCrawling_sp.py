import requests

url= "https://192.168.105.2"
response = requests.get(url,verify=False)
data = response.text
print(data)