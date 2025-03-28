povzetek videa:
subnetMask - je številka, ki je podobna IP naslovu in prikaže koliko bitov v IP naslovu je uporabljenih za omrežje z zamaskiranjem dela IP naslova ki ga uporablja omrežni naslov,
IP address - naslov naprave povezane na omrežje
IPv4 - je 32 bitni števlka zapisana v 4 številkah ločenih z piko.
Octet - ena od številk v IP naslovu, ki so ločene z piko. številka octet je lahko v dosegu od 0-255.
Network address - je unikatni naslov, ki je številka ki je dodeljena omrežju.
Host address - je številka ki je dodeljena gostiteljem v tem omrežju kot so računalniki, serverji, tablice, ruterji,... vsak gostitel ima unikatni naslov.
Kako ugotoviti kateri del ip naslova je namenjen omrežju in kateri gostitelju:
IP naslov in subnetMask pretvorimo v binarno obliko:
IP: 192.168.1.0 ->--------------11000000.10101000.00000001.00000000
subnetMask: 255.255.255.0 ->----11111111.11111111.11111111.00000000
--------------------------------|-----Network address-----|-Host address
tisti del IP naslova ki ga subnetMask prekriva z enkami je dodeljen za omrežni naslov, del z 0 pa za naslov gostitelja.

primer 2:
IP: 172.16.1.0 ->---------------10101100.00010000.00000001.00000000
subnetMask: 255.255.224.0 ->----11111111.11111111.11100000.00000000
--------------------------------|--Network address---|-Host address
subnet - podomrežje, Network address podomrežja je dodeljen
network in host addresse se uporablja za bolši obvladljivost. Je namenjen da lahko veliko omrežje razbijemo na manjša omrežja subnets - podomrežja. ki so povezana na veliko omrežje in so do njih nato povezani gostitelji.
brodcast - ko naprava hoče komunicirati z drugo napravo v omrežju pošlje broadcast ki vpraša kdo je ip naslov 192.168.1.30 - broadcast zaznajo vsi računalniki v omrežju
subnet ustvarimo tako da si sposodimo en prost bit v IP addressu in mu nastavimo submask primer subnetMask 255.255.255.192 - z to masko lahko ustvarimo 4 podomrežja. v usakega od podomrežji se lahko poveže 62 naprav.
subnetMask uvrščamo v 5 razredov ampak se za komercianle namene uporablja te 3 razrede:
class A first octet address: 1-126 -> subnetmask: 255.0.0.0 Razred A subnet ima lahko do 16,000,000 gostiteljev primer: take subnete uporabljajo ponudniki internetnih storitev.
class B first octet address: 128-191 -> subnetmask: 255.255.0.0 Razred B subnet ima lahko do 65,000 gostiteljev primer: take subnete uporabljajo srednje in večje organizacije
class C first octet address 192-223 -> subnetmask: 255.255.255.0 Razred C subnet ima lahko do 254 gostiteljev primer: take subnete uporabljajo manjša podjetja in domovi, ki nimajo veliko gostiteljev.
subnetMaske so lahko izražene z drugo metodo, ki se imenuje CIDR.
CIDR - Classless Inter-Domain Routing (slash notation): je krajši zapis kako napisati subnetMask. to se naredi z dodatkom slasha in številke ki šteje enke v subnet maski
primer: 192.168.1.0/24 pomeni da je subnet maska dolga 24 enk: 11111111.11111111.11111111.00000000
primer2: 192.168.1.0/25 -> subnet mask: 11111111.11111111.11111111.10000000
primer3: 192.168.1.0/26 -> subnet mask: 11111111.11111111.11111111.11000000
primer4: 192.168.1.0/8 -> subnet mask: 11111111.00000000.00000000.00000000
odgovori na vprašanja:

1. Kaj je naslov IP? ip naslov je identifikacijski naslov naprave povezane na omrežje
2. zakaj potebujemo naslove IP? Vsaka naprava potrebuje IP naslov za komunikacijo z drugimi napravami v omrežju, ruterji, ki napravo povežejo v druga omrežja.
3. Katerim napravam se dodeli IP naslov? IP naslov se dodeli vsem napravam povezanim v omrežje.
4. Katera dva dela sestavljata naslov IP? IP naslov sestavljata Network in Host address.
5. Kako vemo kateri del je kateri? IP naslov se razdeli na Network address in Host address z uporabo subneta.
6. napiši 2 pravilna in 2 napačna IP naslova.: Pravilna - [192.168.1.0, 192.168.0.0], napačna - [300.300.1.0, 999999.999999.0.0]
