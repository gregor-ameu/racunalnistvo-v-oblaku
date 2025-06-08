del domače naloge sem opravil med predavanji kjer mi je že uspelo se povezat na EC2 z mariadb-server preko EC2 z mariadb-client
dokončal sem nalogo tako, da sem se ponovno povezal preko mariadb-client z ukazom:
mariadb -h 10.0.0.212 -u uros -p
in vpisal pravilno geslo.
creairal sem novo databazo z imenom Merkator z ukazom: CREATE DATABSE Mercator,
z ukazom: USE Mercator sem se premaknil v to databazo,
tukaj sem uporabil ukaz: CREATE TABLE artikli (
stevilka INT PRIMARY KEY,
nazivArtikla VARCHAR(50),
cena DECIMAL(5,2)
);
nato sem uporabil ukaz: INSERT INTO artikli (stevilka, nazivArtikla, cena) VALUES
-> (1, 'mleko', 1.17),
-> (2, 'jogurt', 0.45),
-> (3, 'skuta', 1.30);
za preverit vnesene vsebine sem uporabil ukaz SELECT \* FROM artikli
