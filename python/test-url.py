import json
sj=open('E:\stage2020\Sample.json',"r",encoding="utf-8")
s=json.load(sj)
print(s)
sj.close()
href=[]
for i in s['briefs']:
    if i['cnxState']=='DISC' and i['healthState']=='BACKHAUL_CNX_ERROR':
        href.append(i['href'])
print("href :  ")
print(href)