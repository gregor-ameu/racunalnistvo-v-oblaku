# Intro spletna stran

kot smo pri tudi na srečanju, smo ustvarili instanco EC2 <br/>
Na ec2 instanco smo se povezali s uporabo putty programa <br/>
Nas isntanco smo naložili apache2<br/>
v mapi /var/www/html/ smo omogočili nalaganje s ukazom "sudo chmod 777 html"<br>
nato smo s ukazom scp -i naložili datoteke spletne strani <br>
Tukaj sem osebno nalagal datoteke eno po eno, obstajajo hitrejše/bolj optimalne metode.

# Vprašanja

Kaj je IP naslov? Je mesto, kjer najdemo napravo v omrežju. Podobno kot je naslov hiše, mesto kjer jo najdemo v svetu
<br/>
Zakaj potrebujemo naslove IP? Da lahko naprave komunicirajo med seboj.
<br/>
Katerim napravam se dodeli ip naslov? Vsem napravam ki se povežejo na kakeršno koli omrežje. 
<br/>
Katera dva dela sestavljata naslov IP? network & host
<br/>
Kako vemo kateri del je kateri? prvi 3 seti številk nakazujejo omrežje, 4. set hosta
<br/>
Napiši dva pravilna ip naslova in dva napačna IP naslova
Pravilna: <br>192.0. 2.146<br>172.16.254.1<br>
Napačna: <br><br>