import json
sj=open('E:\stage2020\Sample.json',"r",encoding="utf-8")
s=json.load(sj)
print(s)
sj.close()
coor=[]
for i in s['briefs']:
    if i['cnxState']=='DISC' and i['healthState']=='BACKHAUL_CNX_ERROR':
        coor.append([i['lat'],i['lon']])
print("coor :  ")
print(coor)