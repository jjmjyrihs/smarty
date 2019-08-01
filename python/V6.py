# 引用套件
import json
from urllib.request import urlretrieve #內建
from urllib.request import urlopen #內建
from bs4 import BeautifulSoup # 建議 python 3.2.5
# bs4下載 https://www.crummy.com/software/BeautifulSoup/bs4/download/4.0/

#-----------------------以下爬圖-----------------------#

# 檔案存放路徑
path = 'D:\\R18\\Beautiful\\EatMyStory\\'

# 目標網址
html = urlopen('https://mrcong.com/feilin-vol-192-42-anh/?fbclid=IwAR0xzrdOBxb-YuTgnN3W0kdDrn7c787pzVSO88LwEpl55jczrPTdABxz2IM')

# 抓取HTML

bsObj = BeautifulSoup(html)


# 取得圖片 指定img的class
images = bsObj.findAll('img', {'class': 'aligncenter'})

# 取得圖片的src url
srcs = {}
index = 0
for img in images:
    srcs[index] = img['src']
    index = index + 1



print(srcs)
"""
# 儲存至電腦
num = 1
for src in set(srcs):
    fileName = path + str(num) + '.jpg'
    urlretrieve(src, fileName)
    num = num+1
"""
