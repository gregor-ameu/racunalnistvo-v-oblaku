
# Projektna naloga: Dropbox migracija in osnovna AWS rešitev

## Opis projekta

Projekt bo predstavil zgodbo podjetja Dropbox, njihov prehod iz popolne uporabe AWS infrastrukture v hibridno rešitev z lastnimi podatkovnimi centri. V drugem delu projekta bo prikazana tudi osnovna implementacija infrastrukture v AWS z lastno aplikacijo, povezano s S3 storitvijo.

## Arhitektura

- EC2 Instances

- Web Server (javno dostopna EC2): preprosta spletna aplikacija 

- Database Server (zasebna EC2): rezerviran za prihodnje nadgradnje (placeholder)

- VPC in Podomrežja

- En javni subnet (za spletni strežnik)

- En zasebni subnet (za bazo)

- S3 Bucket

- Shramba za statične datoteke (npr. slike, varnostne kopije)

- GitHub

- Naložena aplikacijska koda v repozitorij preko Git sistema

## Funkcionalnosti

- Povezava do S3

- Aplikacija omogoča nalaganje datotek v S3 bucket.

- Osnovna avtomatizacija (po želji)

- Uporaba GitHub Actions za avtomatski deploy aplikacije (opcijsko za višjo oceno).

## Tehnologije

- AWS EC2, VPC, S3

- GitHub (opcijsko: GitHub Actions, AWS Lambda)

## Cilji

- Analizirati in predstaviti ključne razloge za Dropbox prehod iz AWS v hibridno infrastrukturo.

- Prikazati osnovno AWS rešitev z dvema instancama in povezavo na S3.

- Uporabiti osnovne AWS storitve za pripravo varne in razširljive arhitekture.