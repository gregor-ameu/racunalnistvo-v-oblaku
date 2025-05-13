Za zaključno nalogo bom izdeloval programsko rešitev WordPress blog, ki bo delovala v okolju AWS.


1. VPC omrežje razdeljeno na: javno podomrežje za spletni strežnik (Apache + WordPress), zasebno podomrežje za podatkovno bazo (MariaDB)
2. EC2 istanca (Debian) v javnem subnetu
3. Namestitev Apache, PHP, MariaDB ter WordPress
4. Ureditev varnosti z Security Groups in Route Tables
5. Povezava WordPress s S3 bucketom za shranjevanje slik
6. GitHub (push/pull)

Nadgradnja:
1. AWS Lambda za varnostne kopije
2. Omejitev dostopov v WordPress zaradi vdorov v sisteme.