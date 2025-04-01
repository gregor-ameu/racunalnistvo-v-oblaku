1. V VPC -> Route Tables sem odstranil 0.0.0.0/0 iz privatnega podomrežja.
2. Povezal sem se na EC2 z javnim IP-jom prek PuTTYa.
3. MariaDB Client je bil že nameščen, zato sem se prijavil z ukazom: mysql -h 10.0.0.41 -u marcel -p
4. Ustvaril sem bazo mercator in tabelo artikel:
  4.1. Bazo sem ustvaril z ukazom: CREATE DATABASE mercator;
  4.2. Preklopil sem na bazo z ukazom: USE mercator;
  4.3. Ustvaril sem tabelo artikel z naslednjim ukazom: 
CREATE TABLE artikel (
    stevilka INT PRIMARY KEY,
    naziv VARCHAR(255),
    cena DECIMAL(10,2)
);

  4.4. Vstavil sem podatke z ukazom:
INSERT INTO artikel (stevilka, naziv, cena) VALUES
(1, 'Mleko', 1.20),
(2, 'Kruh', 2.50),
(3, 'Jabolko', 0.80);

  4.5. Preveril sem podatke z ukazom:
SELECT * FROM artikel;
