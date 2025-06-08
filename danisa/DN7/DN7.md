#7. domača naloga AWS Lambda

AWS CLI omogoča klicanje Lambda funkcij z ukazom aws lambda invoke. Za podajanje vhodnih parametrov uporabimo opcijo --payload.

Na srečanju smo ustvarili Lambda funkcijo poslji-podatke.py, ki je izvajala fiksni zahtevek. Za domačo nalogo smo funkcijo prilagodili, da sprejema parametre preko JSON formata.

##Primer na naši funkciji:

aws lambda invoke \
    --function-name poslji-podatke-param \
    --payload '{"stevilo": "8", "kraj": "Celje"}' \
    response.json