# Domača naloga: DN4

## 1. Konfiguracija AWS okolja

- V AWS sem ustvaril dve EC2 instanci:
  - Javna instanca (public) z dodeljenim Elastic IP: `3.65.30.246`
  - Privatna instanca (private) z internim IP: `10.0.0.24`

- Za privatno instanco sem:
  - Nastavil Route Table, ki nima route `0.0.0.0/0`, zato nima direktnega dostopa do interneta

## 2. SSH dostop preko Proxy Jump

- Uporabil sem PuTTY, da sem z lokalnega računalnika vzpostavil SSH povezavo do privatne EC2 instance, ki nima javnega IP-naslova. To sem dosegel z uporabo t.i. Proxy Jump povezave prek javne instance.

### Nastavitve v PuTTY:

- **Session**:
  - Host Name: `10.0.0.24` (privatni IP)
  - Port: `22`
  - Connection type: `SSH`

- **Connection > Proxy**:
  - Proxy type: SSH to proxy and use port forward
  - Proxy hostname: `3.65.30.246` (javni IP public instance)
  - Port: 22
  - Username: `admin`
  - Command: `plink -agent -ssh admin@3.65.30.246 -nc %host:%port`

- **SSH > Auth > Credentials**:
  - Določil sem pot do `.ppk` ključa, ki ga uporablja instanca

- **SSH > Auth**:
  - Omogočil sem "Allow agent forwarding", ker uporabljam Pageant z naloženim ključem

### Kaj počne ukaz `plink -agent -ssh admin@3.65.30.246 -nc %host:%port`:

Ta ukaz pove PuTTY-ju, naj uporabi "plink" kot posrednika za vzpostavitev SSH tunela:

- `-agent`: uporabi Pageant za preverjanje pristnosti
- `-ssh`: uporabi SSH protokol
- `admin@3.65.30.246`: prijavi se kot `admin` na javno instanco (proxy)
- `-nc %host:%port`: vzpostavi TCP povezavo iz proxy strežnika naprej do `%host` (privatna IP) na `%port` (22)

Tako javna instanca deluje kot tunel do privatne instance.

- Isto povezavo sem uporabil tudi v WinSCP, kjer sem pod Advanced > SSH > Tunnel nastavil povezavo prek IP `3.65.30.246` in pot do zasebnega ključa. Deluje po enakem principu, preko tunela.


## 3. MariaDB in podatkovna baza

- Na privatni instanci sem preveril, da je MariaDB aktivna:
  ```bash
  sudo systemctl status mariadb
  ```

- Ustvaril sem `.sql` datoteko `DatabaseSQL.sql`, ki vsebuje:
  - Ustvarjanje baze `mercator`
  - Ustvarjanje tabele `artikel`
  - Vstavljanje 10 artiklov

- Datoteko sem preko WinSCP prenesel v `/home/admin/`

- Nato sem jo uvozil z ukazom:
  ```bash
  sudo mysql < DatabaseSQL.sql
  ```

## 4. Preverjanje baze

- Vstopil sem v MariaDB:
  ```bash
  sudo mysql
  ```

- Preveril obstoječe baze:
  ```sql
  SHOW DATABASES;
  ```

- Aktiviral bazo `mercator`:
  ```sql
  USE mercator;
  ```

- Prikazal vsebino tabele `artikel`:
  ```sql
  SELECT * FROM artikel;
  ```

- Rezultat je bil uspešen prikaz vseh 10 vnešenih vrstic.

