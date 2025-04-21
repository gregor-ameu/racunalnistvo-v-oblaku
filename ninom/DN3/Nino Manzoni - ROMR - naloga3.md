Nino Manzoni, 13.04.2025
Naloga 3

YouToube - https://www.youtube.com/watch?v=s_Ntt6eTn94
Zapiski - Subnet mask
IPv4 - identifier
xxx.xxx.xxx.xxx (octets, 0-255)
Network address + Host address (unique)
Subnet mask is masking the network part (1 - bit)
8-bit octet | 128 | 64 | 32 | 16 | 8 | 4 | 2 | 1 |
Subnetting - dividnig network (less noise, faster, security)
255.255.255.0 (1 network, 255 Host - 2 bit for network address & brodcast)
11111111.11111111.11111111.11000000 = 4 subnets, 62 usable host each
IPv4 classes - A B C (D) (E)
CIDR - Classless Inter-Domain Routing (slash notation) 192. 168.1.0 /24

Vprašanje 1
Kaj je naslov IP?
IP naslov je naslov naprave, ki je povezana v omrežju, preko katerega se naprave identificirajo in najdejo.

Vprašanje 2
Zakaj potrebujemo naslove IP?
Naprave, ki so povezane v omrežju se morajo identificirati, da se lahko poiščejo.

Vprašanje 3
Katerim napravam se dodeli IP naslov?
IP naslov se dodeli napravam, ki so povezane v omrežje.

Vprašanje 4
Katera dva dela sestavljata naslov IP
IP naslov je sestavljen iz omrežnega dela in dela za naprave.

Vprašanje 5
Kako vemo kateri del je kateri?
Omrežni del in del za naprave ločujemo z masko podomrežja ali CIDR /biti.
Te nam povejo koliko bitov je določenih za omrežje in koliko bitov za naprave v tem omrežju.

Vprašanje 6
Napiši dva pravilna IP naslova in dva napačna IP naslova.
1. Pravilen IP naslov: 192.168.1.1
2. Pravilen IP naslov: 8.8.8.8
1. Napačen IP naslov: 192.168.1
2. Napačen IP naslov: 8888.8888.8888.8888.8888
