Subnet maska je orodje, ki določa, kateri del IP naslova se nanaša na omrežje in kateri del je namenjen napravam znotraj tega omrežja. Z njeno pomočjo lahko razdelimo večje omrežje na manjše dele, kar omogoča boljše upravljanje in izboljšano varnost omrežij.

IP naslov: Edinstvena številka, ki identificira napravo znotraj omrežja.
Subnet maska: Določa, kateri del IP naslova predstavlja omrežje in kateri del pripada napravam.
Omrežni del: Segment naslova IP, ki določa omrežje, kateremu naprava pripada.
Gostiteljski del: Segment, ki identificira specifično napravo v omrežju.
CIDR zapis: Kratek zapis subnet maske, na primer /24 pomeni 255.255.255.0.

Odgovori na vprašanja:
Kaj je IP naslov?
To je edinstvena številka, ki se uporablja za identifikacijo naprav v omrežju.

Zakaj se uporabljajo IP naslovi?
Da omogočijo napravam medsebojno komunikacijo in izmenjavo podatkov.

Katere naprave potrebujejo IP naslov?
Vse naprave, ki se povežejo v omrežje, kot so računalniki, telefoni, usmerjevalniki ipd.

Kateri deli sestavljajo IP naslov?
IP naslov je sestavljen iz omrežnega dela in gostiteljskega dela.

Kako določimo omrežni in gostiteljski del?
To določa subnet maska. Na primer, če imamo masko 255.255.255.0, so prvi trije segmenti (192.168.1) omrežni del, zadnji segment (.X) pa določa napravo.

Primeri IP naslovov:
Pravilni:
192.168.1.1
10.0.0.254

Napačni:
256.100.50.25 (naslovi morajo imeti vrednosti med 0 in 255)
192.168.1.999 (999 ni dovoljena vrednost)

Postopek izdelave moje spletne strani:
1.Najprej sem ustvaril novo mapo, kamor sem shranil vse potrebne datoteke, vključno z HTML, CSS in slikami.
2.Nato sem pripravil HTML datoteke za vsako podstran (index.html, hobiji.html, delo.html) in oblikovanje s CSS (določanje barv, pisav in postavitve).
3.Dodal sem ustrezne slike, ki sem jih želel vključiti na strani.
4.V nadaljevanju sem nastavil AWS:
5.Ustvaril nov VPC, zasnovan za 100 računalnikov z IP naslovi iz razreda A.
6.Kreiral dve podomrežji in povezal javno omrežje z internetom.
7.Nastavil EC2 instanco in namestil spletni strežnik Apache na EC2.
8.Prenesel sem svoje HTML, CSS in slikovne datoteke na EC2 instanco.
9.Preizkusil sem delovanje spletne strani preko javnega IP naslova EC2 instance.