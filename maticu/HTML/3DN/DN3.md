	Kaj je naslov IP?
Je identifikacijska številka za računalnik ali napravo, katera
je povezana v omrežju.

	Zakaj potrebujemo naslove IP?
IPje potrebujemo zato, da lahko naprave komunicirajo med seboj.

	Katerim napravam se dodeli IP naslov?
IP naslove se dodeli napravam, kateri so povezani v omrežju. Računalniki, telefoni, tablice, ...

	Katera dva dela sestavljata naslov IP
Netword adress ali network ID je številka dodeljena določenimu 
omrežju.  
Host address ali Host ID je dodeljeno ostalim napravam v omrežju.

	Kako vemo kateri del je kateri?
Vemo po "subnet mask" je številka, katera je podobna IP naslovu
in nam pove koliko bitov v IPnaslovu se uporablja v "network ID" delu
IPja.

	Napiši dva pravilna IP naslova in dva napačna IP naslova.
	Pravilen IP:
	192.168.1.10 - primeren je zaradi območja 192.168.0.0 - 192.168.255.255 in je primeren za LAN
	10.0.0.25 - primere je zaradi območja 10.0.0.0 - 10.255.255.255 in je primeren za notranja omrežja.
	
	Nepravilen IP:
	192.300.1.10 - primer je napačen, zaradi tega, ker niso številke v vsakem oktetu v območju med 0 - 255
	256.168.1.10 - primer, ni pravilen, ker številka 256 presega razmerje 255.

IP naslovi imajo network id in host id zaradi tega, da se lahko razdeli
večje omrežje v manjša omrežja ali pod omrežja.

Računalnik pošilja podatke vsem računalnikom v omrežju, da lahko pridobi
in komunicira z določenim računalnikom. Računalnik bo poslal "broadcast" v omrežju
določenemu računalniku, da se lahko identificira in komunicira z njim.
Vendar vsi računalniki bojo pridobili klic in odgovorili, da oni niso pravilni,
razen iskani računalnik. Zato se omrežje razdeli na manjša podomrežja z pomočjo usmerjevalnikom.
Zato so IPji razdeljeni na network ID in Host ID.

Podomrežne maske pridejo v treh razredih.
			Prvi oktet		Privzeta maska podomrežja	Uporabljajo
- Razred A: 1-126				255.0.0.0				Večja podjetja
- Razred B: 128-191				255.255.0.0				Srednja-Velika podjetja
- Razred C: 192-233				255.255.255.0			Manjša podjetja in privatna uporaba

CIDR - Classes Inter-Domain Routing 192.168.1.0 /24 (24 enic ali bitov)


----------------------------------- Postavitev spletne strani ---------------
1) Najprej sem kreiral VPC, kateremu sem dodeli ip 10.0.0.0/24 (slika NAL-3.1)
2) Naslednji korak je bil, da sem kreiral subnet in mu določil ip 10.0.0.0/27(slika NAL-3.2)
3) Nato sem kreiral Internet gateway in ga povezal z mojim VPCjem (slika NAL-3.3)
4) Naslednji korak je bil kreiranje Ruting table in ga povezal z pravilnim subnetom. (slika NAL-3.4)
5) Pred kreiranjem instance, sem naredil še Sequrity group, kateremu sem mu odobril SSH in HTTP promet
	(slika NAL-3.5)
6) Nato sem kreiral instanco z vsemi nastavitvami (Sequrity group, subneti in generiral ključe) (slika NAL-3.6)
7) Ob prijavi sem namestil Apache2. Nato sem se postavil v mapo /var/www in 
	omogočil pravilne dostope do mape html. (sudo chmod 777 html). Nato sem testiral,
	če mi deluje Apache na računalniku. Ko sem opazil, da mi deluje sem izbisal datoteko
	index.html. (slika posnetek zaslona 1.png)
8) Nasednji korak, je bil, da sem SSH kključ pretvoril v pem datoteko. Ko je bilo uspešno kreirana,
	sem odstranil vse uporabnike, na ključu in odstranil vse pravice. Nato sem dodelil samega sebe in si na ključu
	dodelil samega sebe in vse pravice.
9) Nato sem s pomočjo PowerShela z pomočja ukaza scp -i ALMAMATER-DOMACA-NALOGA-3.pem index.html
	admin@18.153.208.195:/var/www/html/index.html premaknil vse datoteke in slike na Lynux virtualni
	računalnik. (slika posnetek zaslona 2.png)
10) Po zaključku sem testiral spletno stran, katera mi je uspešno delovala. (posnetek zaslona 3.png)	