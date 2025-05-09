- kreiral bazo na baznem strežniku
	CREATE DATABASE alma_2025_test;
- dodal pravice na websrv /var/www/html
	sudo chmode 777 /var/www/html -R
- skopiral .php datoteko s povezavo na bazo in klicem podatkov iz baze na websrv
	scp -i C:\AME\Keys\AME-N3-EC2-ApacheWebSrv-PEM.pem C:\AME\html\prikaz_podatkov_easy.php ubuntu@3.71.89.164:/var/www/html/index.php
- prenesel php, libapache2-mod-php in php-mysql
	sudo apt update
	sudo apt install php libapache2-mod-php php-mysql
- restartal service apache2
	sudo systemctl restart apache2