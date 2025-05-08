izdelava git repozitorija
priprava mape ignFolder in .gitignore datoteke za stvari, ki jih ne bom syncal z gitom
izdelava index.html, script.js in style.css za spletno stran
priprava funkcionalnosti, kreacija php datotek za povezavo z databazo, klici na php datoteke ob kliku tipk.
priprava novega VPC z dvema subnetoma, internet gatewayom, route table in security group.
inicializacija prvega EC2 - public page za spletno stran
v okolju EC2 sem instaliral apache2, git, mariadb client, php
skopiral sem vsebino repozitorija na EC2
pripravil nekaj popravkol, da sem uspostavil pravilno delovanje skript.
pripravil povezavo do s3Bucketa za backup databaz
za omejitev kolikokrat se bo updajtal file na s3 sem nastavil da se file na s3 updajta samo takrat ko dodamo nekaj v tabelo z add table data tipko
