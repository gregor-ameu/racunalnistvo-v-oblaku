#DOMACA NALOGA 4



Povezali smo se na MySQL bazo podataka, ki se nahaja na privatni EC2 instanci, z uporabo javne EC2 instance. Povezavo smo vzpostavili s pomočjo mariadb-client in ukaza:

mysql -h 3.70.120.45 -u danis -p kjer je:

18.185.49.95 – IP naslov instance z MySQL strežnikom,

danis – uporabniško ime za dostop do baze.

Nato smo ustvarili novo podatkovno bazo mercator in v njej tabelo artikel

CREATE DATABASE mercator;  
USE mercator;  
CREATE TABLE artikel (  
    id INT AUTO_INCREMENT PRIMARY KEY,  
    naziv VARCHAR(255) UNIQUE NOT NULL,  
    cena DECIMAL(10,2) NOT NULL  
);  

na koncu smo v tabelo še vstavili 3 artikle, Argeta tuna, Polimark majonez, in Bonduelle koruza.