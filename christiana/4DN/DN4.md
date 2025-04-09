
# MariaDB naloga – povezava med public in private instanco
''' 
o	Dokončajte nalogo iz predavanja tako, da 
	nastavite privatno podomrežje »res« privatno (odstranite route 0.0.0.0 iz povezovalne tabele, ki je povezana z vašim privatnim omrežjem)
	iz EC2 instance javnega omrežja se povežite na podatkovni strežnik v privatnem omrežju
•	to naredite tako, da se povežite na EC2 v javnem strežniku (putty)
•	namestite  mariadb-client, ga zaženete in se z njim povežite na podatkovni strežnik
o	ustvarite PB z imenom mercator, 
o	v njo naredite tabelo artikel s podatki stevilka, naziv artikla, cena
o	v tabelo vstavite tri vrstice (artikle)
o	V novo mapo za domačo nalog dodajte zaslonske slike, kot dokaz o svojem delu
	Opiši postopek v md datoteki.
	Naredi »pull request«.
'''

## 1. Priprava okolja

- V AWS sem naredil VPC z dvema subnetoma – en javni in en privatni
- V javni subnet sem dal instanco z javnim IP-jem, da se lahko povežem nanjo
- V privatni subnet sem dal drugo instanco, ki nima dostopa do interneta
- Uporabil sem NAT Gateway, da ima privatna instanca dostop do interneta (apt update)
- Security group sem nastavil tako, da javna instanca lahko dostopa na privatno 

## 2. Namestitev MariaDB na Private EC2 Strežnik

Na private instanci sem nardil:

sudo apt update
sudo apt install mariadb-server -y
sudo systemctl start mariadb
sudo systemctl enable mariadb
sudo systemctl status mariadb

Povezal sem se v MariaDB:
sudo mysql -u root

Notri sem naredil uporabnika, da se bom lahko kasneje povezal:
CREATE USER 'admin'@'%' IDENTIFIED BY 'geslo';
GRANT ALL PRIVILEGES ON *.* TO 'admin'@'%';
FLUSH PRIVILEGES;
EXIT;

## 3. Namestitev MariaDB-Client na public EC2 Strežnik

Na public instanci sem najprej posodobil pakete in nato namestil mariadb:
sudo apt update
sudo apt install mariadb-client -y

## 4. Povezava iz public na private instanco

Ko je bilo vse pripravljeno, sem se iz public instance povezal na MariaDB strežnik v privatni instanci:
mysql -h 10.0.0.36 -u admin -p

Vpisal sem geslo in se povezal.

## 5. Kreacija baze in vstavljanje podatkov

V MariaDB konzoli sem vnesel:
CREATE DATABASE mercator;
USE mercator;

CREATE TABLE artikel (
    stevilka INT PRIMARY KEY,
    naziv_artikla VARCHAR(50),
    cena DECIMAL(10, 2)
);

INSERT INTO artikel (stevilka, naziv_artikla, cena)
VALUES (1, 'Mleko', 1.50),
       (2, 'Kruh', 0.99),
       (3, 'Jabolka', 2.30);

SELECT * FROM artikel;

## 6. Dokazno gradivo

V mapi `domaca_naloga` sem dodal slike:
- povezava na EC2 javno instanco,
- povezava na MariaDB strežnik v privatnem subnetu,
- SQL ukazi in izpis tabele `artikel`.
