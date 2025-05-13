## 7. domača naloga AWS Lambda
AWS omogoča klicanje Lambda funkcij z ukazom "aws lambda invoke". Če kličemo funkcijo z vhodnimi parametri, te specificiramo s opcijo "payload"- <br>

Na srečanju smo ustvarili lambda funkcijo poslji-podatke.py, ki je na strežnik izvršila fiksni zahtevek. Za domačo nalogo, smo morali preoblikovati funkcijo, da lahko preko json formata podamo parametre klica. <br>

Primer na naši funkciji:<br>
```
aws lambda invoke \
    --function-name poslji-podatke-param \
    --payload '{"stevilo": "8", "kraj": "Celje"}' \
    response.json
```
