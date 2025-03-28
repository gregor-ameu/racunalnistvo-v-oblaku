Subnet maska določa, kateri del IP naslova pripada omrežju in kateri del pripada napravam v omrežju. Omogoča razdelitev večjih omrežij na manjše podomrežja, kar izboljša upravljanje in varnost.

Ključni pojmi:
IP naslov – unikatni identifikator naprave v omrežju.
Subnet maska – določa mejo med omrežnim in gostiteljskim delom IP naslova.
Omrežni del – določa omrežje, kamor naprava pripada.
Gostiteljski del – določa napravo v omrežju.
CIDR zapis – način zapisa subnet maske (npr. /24 pomeni 255.255.255.0).

Odgovori na vprašanja:
Kaj je naslov IP?
Unikatna številka, ki identificira napravo v omrežju.

Zakaj potrebujemo naslove IP?
Da lahko naprave komunicirajo med seboj in prejemajo podatke.

Katerim napravam se dodeli IP naslov?
Vsem napravam, ki se povežejo v omrežje (računalniki, telefoni, usmerjevalniki itd.).

Katera dva dela sestavljata naslov IP?
Omrežni del (določa, v katerem omrežju je naprava).
Gostiteljski del (določa posamezno napravo v tem omrežju).

Kako vemo, kateri del je kateri?
To določi subnet maska. Če je npr. subnet maska 255.255.255.0, pomeni, da prvi trije deli (192.168.1) pripadajo omrežju, zadnji del (.X) pa napravi.

Primeri IP naslovov:
Pravilni:
192.168.1.1
10.0.0.254

Napačni:
256.100.50.25 (števila morajo biti med 0 in 255)
192.168.1.999 (999 ni veljavna vrednost)


Postopek izdelave spletne strani:
1. Ustvaril sem novo mapo, v katero sem shranjeval vse datoteke (HTML, CSS, slike).
2. Pripravil HTML datoteke (index.html, hobiji.html, delo.html) in CSS datoteko (barve, pisave, postavitev)
3. Dodal slike
4. Nato sem se lotil AWS: ustvaril nov VPC za 100 računalnikov z IP naslovi razreda A, kreiral dve podomrežji in javno omrežje povezal z internetom, nastavil EC2 instanco in nato na EC2 namestil spletni strežnik Apache.
5. Prenos HTML, CSS, slik na EC2 instanco.
6. Testiranje spletne strani preko javnega IP-ja EC2 instance.