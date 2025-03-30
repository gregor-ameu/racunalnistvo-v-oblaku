1.) Najprej sem kreiral VPC imenovan "ALMA-VPC-VAJA-NALOGA-4" z IPjem 
    10.0.0./16 (slika 1.png)
2.) Nato sem razdelil na dva podomrežja. Privatni in javni. Javnemu podomrežju
    sem dodelil IP 10.0.0.0/28, privatnemu pa 10.0.0.16/28. (slika 2.png)
3.) Naslednji korak je bilo določiti "Gatway", za kreirani VPC. (slika 3.png)
4.) Po zaključenem kreiranju "Gatewaya", sem nastavil "Routing table", in 
    določil, katera podomrežja spadajo pod izbrani "Routing table".
    (sliki 4.png in 5.png)
5.) V nasednji fazi sem določil "Secutiry group", v kateri sem določil, kateri
    promet lahko poteka na virtualni računalnik. Določil sem SSH, HTTP in SQL.
    (slika 6.png)
6.) Nato sem kreiral instanco "private", kateri sem dodal vse nastavitve,
    katere sem nastavil v predhodnih , na kateri bom namestil SQL podatkovno bazo.
    (sliak 7.png)
7.) Ko se je instanca zagnala, sem se prijavil, posodobil in namestil posodobitve.
    Šele ko sem posodobil virtualni računalnik sem namestil pakete za Marido DB
    podatkovno bazo. (sliki 9.png in 11.png)
8.) Nato sem preveril status podatkov baze z ukazom "sudo systemctl status mariadb".
    (slika 12.png)
9.) Naslednji korak je bil narediti varno povezavo. To sem storil z ukazom 
    "sudo mysql_secure_instalation" in nastavil geslo za root uporabnika, izbrisal
    anonimne uporabnike, onemogočil uporabnika root, da se poveže na odaljeno
    podatkovno bazo in ponovno naložil pravice na tabele. (slika 18.png)
10.)Po zaključku urejanja uporabnika in sem lahko z ukazom "sudo mariadb" ustopil v
    v podatkovno bazo. Po ustopu v podatkovno bazo, sem kreiral novega uporabnika
    in geslom. To sem naredil z naslednjim ukazom 
    "GRANT ALL ON *.* TO 'uporabniško_ime'@' IDENTIFIED BY 'usaj' WITH GRANT OPTION;"
    (slika 19.png)
11.)Naslednji korak sem v "Securuty group" omogočil "Inbound rule" za MYSQL/Aurora.
    (slika 20.png)
12.)Nato sem se postavil v datoteko 50-server.cnf, katera se nahaja v etc/mysql/mariadb
    in spremenil bin-address v 0.0.0.0, da se lahko vsi prijavijo v bazo (slika 21.png)
13.)Ko sem datoteko shranil, sem se prijavil v HeidiSQL v kateri bom kreiral tabelo.
    (slika 23.png)
14.)Nato sem se prijavil na drugo instanco, s katero se bom prijavil v podatkovno bazo,
    katera je nameščena na drgi instanci. Najprej sem namestil marijoDB client. (slika 27.png)
15.)Po zaključku nameščanja, sem se poizkusil prijaviti v bazo z ukazom:
    "mysql -u uporabniško_ime -p -h IPnaslov". Nato sem vnesel še geslo (slika 30.png)
16.)S ukazom "SHOW DATABASE;" sem prikazal vse tabele, katere so bile že kreirane (slika 32.png)
17.)Nato sem kreiral novo tabelo z ukazom "CREATE DATABASE mercator;". Z ukazom "USE mercator;"
    sem se premaknil v tabelo, v katero bom vnesel podatke. Nato sem z ukazom 
    "CREATE TABLE artikel(
     stevila INT AUTO_INCREMENT PRIMARY KEY, - glavni ključ, kateri se bo samostojno povečeval
     naziv_artikla VARCHAR (255), - besedilo maksimalne velikosti 255 znakov
     centa DECIMAL (10,2) - vnos števil, na decimalke.
     );"
     Sledilo je polnjenje tabele. To sem naredil z naslednjim ukazom:
     INSERT INTO artiker (naziv_artiklov, cena) VALUES
  	('Jabolka', 5.03),
	('Hruske', 6.01),
	('Pomarance', 4.98);
     S ukazom "SELECT * FROM artikel;" izpišemo vse podatke iz tabele "akrtike".
     Podatki so bili uspešno vneseni v podatkono bazo. (slika 33.png).