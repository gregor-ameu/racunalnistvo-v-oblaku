-- Ustvari podatkovno bazo
CREATE DATABASE IF NOT EXISTS mercator;
USE mercator;

-- Ustvari tabelo za artikle
CREATE TABLE IF NOT EXISTS artikel (
    stevilka INT PRIMARY KEY,
    naziv VARCHAR(100),
    cena DECIMAL(10,2)
);

-- Vstavi 10 artiklov
INSERT INTO artikel (stevilka, naziv, cena) VALUES
(1, 'Čokolada Milka', 1.49),
(2, 'Kruh polnozrnati', 2.29),
(3, 'Mineralna voda Radenska', 0.89),
(4, 'Jajca 10-pack', 3.19),
(5, 'Mleko 1L', 1.05),
(6, 'Sir Gauda 250g', 2.79),
(7, 'Jogurt navaden 180g', 0.65),
(8, 'Testenine špageti 500g', 1.19),
(9, 'Riž dolgozrnati 1kg', 2.49),
(10, 'Kava Barcaffe 200g', 3.99);
