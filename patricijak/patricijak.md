# DOMAČA NALOGA 3: 

## Slike naloge:

![vpc](https://github.com/user-attachments/assets/af361d49-edad-435e-b651-cb5f8b3fa84c)

![sg](https://github.com/user-attachments/assets/ee83c049-9705-4709-88da-d869443c8f7e)

![rt2](https://github.com/user-attachments/assets/f47a0569-a300-4861-94c0-11424c8b7dde)

![rt](https://github.com/user-attachments/assets/9397c27b-f327-41b2-9855-25951384940d)

![gw](https://github.com/user-attachments/assets/d08c93a0-02fb-4238-966e-9ec56797c84e)

![ec2](https://github.com/user-attachments/assets/a636680e-fe9c-4275-8b95-8fa0135d1153)

![apache](https://github.com/user-attachments/assets/7224d79e-2f30-45f1-a5bd-a9a32629af03)

![almameter html](https://github.com/user-attachments/assets/2b5df98c-0372-4cec-8a6b-fb94b24fe279)

![index html](https://github.com/user-attachments/assets/12e2735d-e59a-444d-a047-470f3ba98bc0)

![hobiji html](https://github.com/user-attachments/assets/67386c10-c5e4-40b5-9c02-7148d7492e3f)

![style css](https://github.com/user-attachments/assets/28623953-4acb-4de2-8e83-f48c20f08867)

![slika png](https://github.com/user-attachments/assets/fdc929e3-bcf8-42c3-8dc4-dc48ab2c5164)

![spletna stran](https://github.com/user-attachments/assets/720a1df9-24df-4511-b5ae-692898f94e8b)


## KODA almamater.html:

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Patricija Kotnjek - Alma Mater</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="navbar">
        <h1>Patricija Kotnjek/h1>
        <div class="menu">
            <a href="index.html">Domov</a>
            <a href="hobiji.html">Hobiji</a>
            <a href="almamater.html">Alma Mater</a>
        </div>
    </div>

    <div class="content">
        <h2>Študij na Alma Mater</h2>
        <p>Sem študentka na Almi Mater smeri Spletne in informacijske tehnologije. Tukaj sem se že naučila nekaj novih stvari:</p>
        <ul>
            <li>Programirati</li>
            <li>Urejanjem podatkovnih baz</li>
            <li>Kriptografijo</li>
        </ul>
    </div>
</body>
</html>


## KODA index.html:

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Patricja Kotnjek - Portfolio</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="navbar">
        <h1>Patricija Kotnjek</h1>
        <div class="menu">
            <a href="index.html">Domov</a>
            <a href="hobiji.html">Hobiji</a>
            <a href="almamater.html">Alma Mater</a>
        </div>
    </div>

    <div class="content">
        <h2>O meni</h2>
        <img src="slika.png" alt="Moja fotografija" width="200">
        <p>Pozdravljeni! Sem Patricija Kotnjek. Trenutno sem vzporedna študentka z Academie in sem prišla na Almo Mater si pridobivat nova znanja.</p>
    </div>
</body>
</html>


## KODA hobiji.html:

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Patricija Kotnjek - Hobiji</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="navbar">
        <h1>Patricija Kotnjek</h1>
        <div class="menu">
            <a href="index.html">Domov</a>
            <a href="hobiji.html">Hobiji</a>
            <a href="almamater.html">Alma Mater</a>
        </div>
    </div>

    <div class="content">
        <h2>Moji Hobiji</h2>
        <p>V prostem času se ukvarjam z:</p>
        <ul>
            <li>Grafičnim oblikovanjem</li>
            <li>Branjem knjig</li>
            <li>Svojim psom</li>
        </ul>
    </div>
</body>
</html>


## KODA style.css:

body {
    background-color: #e0e0e0;
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
}

.navbar {
    background-color: #333;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.navbar h1 {
    color: white;
    margin: 0;
}

.menu a {
    color: white;
    text-decoration: none;
    padding: 10px;
    transition: background-color 0.3s;
}

.menu a:hover {
    background-color: #575757;
}

.content {
    background-color: white;
    padding: 30px;
    margin: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

img {
    border-radius: 10px;
    margin-bottom: 20px;
}




## Vprašanja

## Vprašanje 1: Kaj je naslov IP?

**Odgovor:** IP naslov (Internet Protocol naslov) je edinstvena številčna oznaka, ki jo ima vsaka naprava, povezana v omrežje, kot je internet ali lokalno omrežje. IP naslov omogoča identifikacijo in komunikacijo med napravami v omrežju.


## Vprašanje 2: Zakaj potrebujemo naslove IP?

**Odgovor:** IP naslove potrebujemo zato, da omogočimo komunikacijo med napravami v omrežju, predvsem na internetu. Tukaj je nekaj glavnih razlogov, zakaj so IP naslovi pomembni: identifikacijo naprav, usmerjanje podatkov, za povezovanje z internetom, ločevanje omrežij in zaradi varnostne funkcije (požarni zid). 


## Vprašanje 3: Katerim napravam se dodeli IP naslov?

**Odgovor:** IP naslov se dodeli vsaki napravi, ki je povezana v omrežje. Kot so na primer računalniki, telefoni, usmerjevalniki, strežniki in pametne naprave (tablica, telefon). Omogoča jim identifikacijo in komunikacijo z drugimi napravami v lokalnem omrežju ali na internetu.


## Vprašanje 4: Katera dva dela sestavljata naslov IP?

**Odgovor:** IP naslov sestavljata omrežni del (network) in gostiteljski del (host). Omrežni del določa v katerem omrežju se naprava nahaja in gostiteljski del pa identificira posamezno napravo znotraj tega omrežja.



## Vprašanje 5: Kako vemo kateri del je kateri?

**Odgovor:** Kateri del IP naslova je omrežni in kateri gostiteljski, določa maska omrežja (Subnet Mask).

- Omrežni del so biti, kjer je v maski omrežja vrednost 1.

- Gostiteljski del so biti, kjer je v maski omrežja vrednost 0.



## Vprašanje 6:  Napiši dva pravilna IP naslova in dva napačna IP naslova.

**Odgovor:** 

Pravilna IP naslova:

    192.168.1.100 (zasebni IP v IPv4)

    10.0.0.1 (zasebni IP v IPv4)

Napačna IP naslova:

    300.25.14.8 (številka 300 presega dovoljeni obseg 0–255)

    192.168.1.256 (številka 256 presega dovoljeni obseg 0–255)



## OPIS NALOGE:
V tej nalogi sem najprej ustvarila lastno virtualno omrežje (VPC) v okolju AWS. VPC je bil zasnovan tako, da podpira do 100 računalnikov. Uporabila sem IP naslove iz razreda A. Nato sem znotraj tega omrežja ustvarila dve ločeni podomrežji: eno javno in eno zasebno. Vsako s kapaciteto za približno 30 naprav.

V nadaljevanju sem javno podomrežje povezala z internetom. Za tem sem dodala internetni prehod (Internet Gateway) nastavila ustrezne poti v usmerjevalni tabeli (Route Table) in prilagodila varnostna pravila (Security Group), da sem omogočila dostop do spletnega strežnika prek brskalnika.

Ko je bila omrežna infrastruktura pripravljena, sem zagnala novo EC2 instanco v javnem podomrežju. Na tej instanci sem nato namestila spletni strežnik Apache. Apcache sem nato zagnala in poskrbela, da se ob vsakem zagonu sistema samodejno vključi.

Na svojem lokalnem računalniku sem izdelala preprosto statično predstavitveno spletno stran, ki vsebuje tri podstrani: index.html (splošen opis o meni), hobiji.html in almamater.html (Alma Mater). Poleg tega sem s pomočjo CSS oblikovala videz strani – določila sem ozadje, spremenila pisavo in postavitev elementov. Na stran sem vključila tudi "svojo" fotografijo.

Vse datoteke povezane s spletno stranjo (HTML, CSS in slike) sem nato prenesla na EC2 instanco, natančneje v mapo /var/www/html. Tukaj jih laho strežnik Apache prikaže uporabniku. Po prenosu sem v brskalniku odprla javni IP naslov instance in preverila ali spletna stran deluje pravilno.

Na koncu sem ustvarila novo mapo kjer sem shranila vse datoteke, ki sem jih uporabila pri projektu – spletne datoteke, posnetek zaslona delujoče strani in to opisno datoteko. Vse skupaj sem nato naložila v repozitorij in oddala nalogo s »pull requestom«, kot je bilo zahtevano.







## PREDLOG STRUKTURE SEMINARSKE NALOGE
Primer naslova: Primerjava dveh zgodb
Dve plati oblaka: Uspešen prehod Netflixa na AWS in odločitev 37signals za vrnitev v On-Premise

Seminarska naloga bo primerjala dve različni zgodbi uporabe računalništva v oblaku. Kot prvo uspešno migracijo podjetja Netflix na AWS in kot drugo odločitev podjetja 37signals za izstop iz oblaka ter vrnitev na lastno infrastrukturo (on-premise). V uvodu bo predstavljen namen raziskave in kratek opis obeh podjetij. Sledi podroben opis primerov posameznih podjetij. Najprej zakaj se je Netflix odločil za prehod na oblak in katere AWS storitve uporablja ter kakšne prednosti in izzive je pri tem srečal. Nato sledi analiza zakaj je 37signals zapustil AWS s poudarkom na stroškovnih razlogih, kritikah in njihovih novih rešitvah (Docker, Kubernetes). Potem bo sledila primerjava obeh odločitev kjer bo analizirano kakšni so bili ključni dejavniki za različne pristope, ter razprava o stroških, zmogljivosti in fleksibilnosti. V zaključku bodo povzete glavne ugotovitve, oblikovana priporočila za podjetja pri odločanju med oblakom in on-premise ter podan pogled na prihodnost oblačnih storitev.
Vključene bodo kakšne tabele primerjave Netflix vs. 37signals, diagrami arhitekture AWS rešitev za Netflix in kakšen graf stroškov AWS vs. On-premise.

Primer kazala:
1. Uvod
•	Namen naloge:
Predstaviti dva različna pristopa k uporabi računalništva v oblaku na realnih primerih Netflixa in 37signals.
•	Kratek pregled podjetij:
  -	 Netflix kot globalna platforma za pretočno vsebino.
  -	  37signals kot manjše podjetje s poudarkom na neodvisnosti in stroškovni učinkovitosti.

2. Primer 1: Netflix in prehod na AWS
•	Zakaj se je Netflix odločil za migracijo v oblak:
  -	  Zaradi izpada sistema leta 2008.
  -	  Potreba po razširljivosti, odpornosti in večji razpoložljivosti.
•	Katere AWS storitve uporablja Netflix:
  -	  EC2 (računalništvo), S3 (shranjevanje videov), DynamoDB (podatkovne baze), Lambda (serverless), CloudFront (CDN).
•	Prednosti, ki jih je Netflix dosegel:
  -	  Globalna razširitev.
  -	  Hitrejša obnova napak.
  -	  Večja fleksibilnost in nižji začetni stroški.
•	Tehnični izzivi:
  -	  Upravljanje velikih količin podatkov.
  -	  Avtomatizacija distribucije vsebin.
  -	  Varnost in zaščita uporabniških podatkov.

3. Primer 2: 37signals in izstop iz AWS
•	Zakaj so se odločili za vrnitev na on-premise:
  -	  Stroškovni razlogi – trditev, da je AWS za stalno gostovanje predrag za manjša podjetja.
  -	  Želja po večji kontroli nad infrastrukturo.
  -	  Ideološki razlogi: večja neodvisnost od "velikih" tehnoloških podjetij.
•	Kritika AWS:
  -	  Stroški ob dolgoročni uporabi.
  -	  Kompleksnost cenovnih modelov.
  -	  Pomanjkanje fleksibilnosti za specifične potrebe manjših podjetij.
•	Kakšno rešitev uporablja 37signals:
  -	  Lastni strežniki v najemniških podatkovnih centrih.
  -	  Kontejnerji z Docker in orkestracijo z Kubernetes.
  -	  Upravljanje podatkovnih baz (npr. MySQL) v lastni režiji.

4. Primerjava
•	Zakaj sta podjetji sprejeli različne odločitve:
  -	  Netflix = potreba po globalni razširitvi.
  -	  37signals = stabilno, manjše podjetje, optimizacija stroškov.
•	Primerjava stroškov, prilagodljivosti, zmogljivosti:
  -	  AWS za dinamične potrebe, On-premise za stabilne potrebe z znanim obsegom.
•	Ali obstaja univerzalna rešitev?
  -	  Ne – odvisno od velikosti podjetja, narave storitev, investicijskih možnosti.

5. Zaključek
•	Glavne ugotovitve:
  -	  AWS oblak omogoča hitro rast, a dolgoročno ni vedno najcenejša rešitev.
  -	  On-premise je lahko smiseln za podjetja s predvidljivo in stabilno rastjo.
•	Priporočila za podjetja:
  -	  Analiza stroškov pred migracijo.
  -	  Določitev glavnih prioritet (kontrola, cena).
•	Vpliv na prihodnost oblaka:
  -	  Vedno več podjetij bo uporabljalo hibridne rešitve (del v oblaku, del lokalno).

6. Viri








# Domača naloga 2: Authenticator MFA

##Naloga je bila, da svoj account v AWS zavarujemo z MFA. Tega sem se lotila tako, da sem si sprva na mobilni telefon naložila Google Authenticator in se lotila v AWS pod My security credentials dodat My multi-factor authentication (MFA). Nato sen si izbrala ime PatricijaDevice ter se odločila za drugo opcijo zavarovanje z Authenticator app. Ker je računalnik različne blagovne zanmke kot telefon sem lahko dostopala samo do Google Authenticatorja. Tako sem na telefon namestila aplikacijo in skenirala QR kodo. Nato sem morala v AWS zapisati dve zaporedni kodi, ki sem ji prodbila na 30 sekund. S tem sem zavarovala svoj AWS account. 
![DMslika](https://github.com/user-attachments/assets/11070185-bef4-40ce-9c81-9d5b5e058710)



# Domača naloga 1: ODGOVORI NA VPRAŠANJA

## Vprašanje 1: Which of the following is an example of virtualization?
**Odgovor:** d) Multiple virtual machines running on the same server.
**Utemeljitev:** Virtualizacija nam omogoča, da na enem fizičnem strežniku teče več virtualnih strojev, ki delujejo neodvisno drug od drugega.

---

## Vprašanje 2: Which resources provide the ‘brains’ to process your workloads, including what is required to process and
run requests from applications?
**Odgovor:** a) Compute
**Utemeljitev:** Računski viri (compute) vključujejo procesorje (CPU), grafične procesorje (GPU) in pomnilnik (RAM), ki so ključni za izvajanje in obdelavo aplikacijskih zahtevkov.

---

## Vprašanje 3: When you need to provision a resource within the cloud, _________ makes it almost immediately available
to you to allocate where and when you need it
**Odgovor:** d) on-demand resourcing
**Utemeljitev:** On-demand resourcing (zagotavljanje virov na zahtevo) omogoča uporabnikom, da takoj pridobijo in uporabijo računalniške vire brez čakanja ali predhodnega načrtovanja, kar je ena ključnih prednosti oblačnih storitev.

---

## Vprašanje 4: A ________ cloud deployment model is where a vendor makes available the use of shared infrastructure,
including compute, storage and network resources, that can be provisioned on demand and typically
accessed over the internet.
**Odgovor:** d) public
**Utemeljtev:** Javni oblak (public cloud) je oblačni model, kjer ponudniki, kot so AWS, Microsoft Azure in Google Cloud, zagotavljajo računalniške vire prek interneta. Ti viri so v skupni rabi med različnimi strankami in omogočajo hitro ter stroškovno učinkovito skaliranje.

---

## Vprašanje : How are costs generally charged for cloud resources?
**Odgovor:** a) Utility-based metering where you only pay for what you use
**Utemeljitev:** Večina ponudnikov oblačnih storitev (npr. AWS, Azure, Google Cloud) uporablja model plačila glede na porabo (pay-as-you-go), kjer uporabniki plačajo samo za uporabljene vire, podobno kot pri porabi elektrike ali vode. Ta pristop omogoča prilagodljivost in optimizacijo stroškov

---

## Vprašanje 6: What concept or characteristic of cloud computing does this represent?
**Odgovor:** 1. On-demand resourcing
*Utemeljitev:** On-demand resourcing omogoča hitro prilagajanje in širitev infrastrukture glede na potrebe. V tem primeru je uporabnik začel z majhno spletno stranjo in postopoma dodajal vire, kot so AI storitve in geografska širitev, brez potrebe po velikih začetnih naložbah v strojno opremo.

---

## Vprašanje 7: The ___________________ cloud service model offers a balance between customization and user control, allowing
developers to focus on designing at the application layer while the service handles the administration of the virtual
architecture, including the network and operating system.
**Odgovor:** b) Platform-as-a-Service
**Utemeljitev:** PaaS (Platform-as-a-Service) razvijalcem omogoča, da gradijo in izvajajo aplikacije, ne da bi morali skrbeti za upravljanje strežnikov, omrežja ali operacijskih sistemov. Primeri PaaS storitev so Google App Engine, Microsoft Azure App Services in AWS Elastic Beanstalk.

---

## Vprašanje 8: What concept or characteristic of cloud computing does this represent?
**Odgovor:** a) Growth
**Utemeljitev:** Ta primer prikazuje rast (scalability), saj lahko organizacija postopoma širi svojo infrastrukturo in funkcionalnosti v oblaku brez velikih začetnih naložb. Oblak omogoča preprosto prilagajanje storitev glede na potrebe poslovanja, kar je ena od ključnih prednosti.

---

##Vprašanje 9: Which of the following are not the sole responsibility of public cloud customers? (Choose 2 answers
**Odgovor:** a) Patch Management and d) Network Controls.
**Utemeljitev:** V modelu skupne odgovornosti (Shared Responsibility Model) ponudnik javnega oblaka (npr. AWS, Azure, Google Cloud) skrbi za vzdrževanje osnovne infrastrukture, vključno z upravljanjem popravkov (patch management) za strojno opremo, hipervizorje in nekatere upravljane storitve. Prav tako nadzoruje omrežno varnost (network controls) na infrastrukturni ravni.

---

## Vprašanje 10: Which cloud resource saves and retains data, and is available at an almost unlimited amount within the cloud?
**Odgovor:** d) Storage
**Utemeljitev:** Oblačno shranjevanje (storage) omogoča skoraj neomejeno shranjevanje podatkov in njihovo dostopnost. Pomembne storitve oblačnega shranjevanja vključujejo Amazon S3, Google Cloud Storage in Microsoft Azure Blob Storage, ki omogočajo shranjevanje ogromnih količin podatkov z visoko razpoložljivostjo in skalabilnostjo.

---

##Vprašanje 11: The ___________________ cloud service model offers the greatest amount of user customization and control but
requires the greatest amount of user administration including the operating system, but not physical hardware.
**Odgovor:** a) Infrastructure-as-a-Service (IaaS
**Utemeljitev:** IaaS (Infrastructure-as-a-Service) ponuja uporabnikom najvišjo stopnjo prilagodljivosti, saj lahko upravljajo z operacijskimi sistemi, omrežji in drugimi virom infrastrukture. Uporabniki so odgovorni za nastavitve in vzdrževanje teh virov, medtem ko ponudnik oblaka skrbi za fizično strojno opremo.

---

## Vprašanje 12: What benefit of cloud computing allows you to increase or decrease the power or quantity of resources at any time,
without extensive installation or physical processes of provisioning?
**Odgovor:** b) Scalability
**Utemeljitev:** Razširljivost (scalability) je ena od ključnih prednosti oblačnega računalništva, saj omogoča enostavno prilagoditev zmogljivosti in virov glede na potrebe uporabnika, bodisi z večanjem bodisi z zmanjšanjem virov brez potrebe po fizičnih postopkih ali dolgotrajnih nastavitvah.

---

## Vprašanje 13: The website will have high access demands from the 4:00 pm to 11:00 pm peak hours, and slower access demands
during off-peak hours. The owner does not have any IT experience and does not want to become involved in the extra
work of maintaining IT equipment. What do you recommend she do?
**Odgovor:** b) Implement a public cloud-computing environment
**Utemeljitev:** Javni oblak (Public cloud) bi bil najboljša izbira, saj ponuja prilagodljivost (scalability) za obvladovanje povečanih zahtev v vršnih urah in ni potrebe po vzdrževanju lastne infrastrukture. Ponudniki javnega oblaka, kot so AWS, Google Cloud in Microsoft Azure, omogočajo hitro širitev zmogljivosti, brez potrebe po naložbah v lastno strojno opremo.

---

## Vprašanje 14: Public cloud vendors have a common definition of what aspects of security are the vendor's responsibility and what
aspects of security are the end user's responsibility. This is referred to as the Shared Responsibility Model.
Under the Shared Responsibility Model, which of the following would be the end user's responsibility?
**Odgovor:** d) Encryption of data stored within a cloud storage service such as Amazon Elastic Block Store
**Utemeljitev:** V skladu s modelom skupne odgovornosti (Shared Responsibility Model) je šifriranje podatkov (encryption) odgovornost končnega uporabnika. Ponudnik oblačnih storitev skrbi za varnost infrastrukture, kot so fizični podatkovni centri, omrežje in strežniki, medtem ko so uporabniki odgovorni za zaščito svojih podatkov, kar vključuje šifriranje shranjenih podatkov

---

## Vprašanje 15: The ___________________ model requires no software installation and focuses on design simplicity and ease of use.
It offers a minimal level of service customization.
**Odgovor:** b) Software-as-a-Service
**Utemeljitev:** SaaS (Software-as-a-Service) ponuja popolnoma upravljane aplikacije preko interneta, kjer uporabniki dostopajo do programske opreme brez potrebe po lokalni namestitvi ali vzdrževanju. Primeri SaaS storitev vključujejo Google Workspace, Microsoft 365 in Dropbox.

---

## Vprašanje 16: You are leading a team of developers on a project whose goal is to improve customer experience on a credit card
company's website.
The solution requires that the developers write business requirement-oriented custom code. Your client wants the
developers not to have the overhead of managing operating systems, runtimes, and middleware.
Which of the following cloud offerings would you suggest to your client?
**Odgovor:** b) Platform as a Service (PaaS
**Utemeljitev:** PaaS (Platform as a Service) je najbolj primerna izbira v tem primeru, saj razvijalcem omogoča, da se osredotočijo na razvoj aplikacij (pisanje poslovne logike) brez skrbi za operacijske sisteme, runtime okolja in middleware. Ponudniki PaaS storitev, kot so Microsoft Azure App Services ali Google App Engine, zagotavljajo infrastrukturo in vse potrebno za razvoj, gostovanje in upravljanje aplikacij.

---

## Vprašanje 17: A business uses a combination of vendor-managed hardware, such as AWS, Azure, or Google Cloud, and its own
hardware on premises to host virtualized resources. This is an example of the ___________ cloud deployment model
**Odgovor:** c) hybrid
**Utemeljitev:** Hibridni oblak (Hybrid cloud) je model uvedbe oblaka, ki združuje uporabo tako javnih kot zasebnih oblačnih storitev. V tem primeru podjetje uporablja tako oblačne vire od ponudnikov, kot so AWS, Azure ali Google Cloud, kot tudi lastno lokalno infrastrukturo za gostovanje virtualiziranih virov

---

## Vprašanje 18: One can argue that security on the public cloud is superior to on-premise security. Why is this? (Choose 2 answers)
**Odgovora:** a) Public cloud vendor services must meet international security requirements.
b) Public cloud vendor datacenters use superior security technology.
**Utemlejitev:** Ponudniki javnega oblaka so pogosto podvrženi strogim mednarodnim varnostnim standardom, kar zagotavlja visoko raven zaščite. In podatkovni centri javnih oblakov pogosto uporabljajo napredne varnostne tehnologije, ki so na voljo le velikim podjetjem, kar lahko zagotovi boljšo zaščito kot tradicionalna lokalna infrastruktura

---

## Vprašanje 19: What is a key benefit of Virtualization?
**Odgovor:** a) Reduced capital expenditure
**Utemeljitev:** Virtualizacija omogoča, da lahko podjetja znižajo kapitalne stroške, saj ni potrebe po vlaganju v veliko fizičnih strežnikov in opreme. Namesto tega lahko podjetja izvajajo več virtualnih strežnikov na eni fizični napravi, kar zmanjša stroške nakupa in vzdrževanja strojne opreme.

---

## Vprašanje 20: Which of the following cloud computing concepts refers to increasing or decreasing compute resources based on
demand?
**Odgovor:** a) Elasticity
**Utemljitev:** Elastičnost (Elasticity) omogoča oblačnim sistemom, da se prilagajajo povečanemu ali zmanjšanemu povpraševanju po virov (kot so procesorska moč, pomnilnik ali shranjevanje). To omogoča optimizacijo stroškov in učinkovito izrabo virov

---

## Vprašanje 21: Which resources provide the connectivity allowing all other resources to communicate with each other?
**Odgovor:** a) network
**Utemljitev:** Omrežje (Network) zagotavlja povezljivost med različnimi viri v oblačnem okolju, kot so strežniki, shranjevanje in računalniški viri. Omogoča, da ti viri komunicirajo med seboj in zagotavlja potrebno infrastrukturo za prenos podatkov.

---

## Vprašanje 22: In what way is a private cloud model similar to a public cloud model?
**Odgovor:** c) Both private and public cloud models use virtualization to differentiate themselves from traditional on-
premise servers.
**Utemeljitev:** Virtualizacija je ključna komponenta tako pri zasebnem kot javnem oblaku, saj omogoča boljšo izrabo virov in večjo fleksibilnost v primerjavi s tradicionalnimi strežniki na lokaciji. Virtualizacija omogoča, da se na eni fizični napravi gosti več virtualnih virov, kar optimizira stroške in povečuje učinkovitost

---

## Vprašanje 23: Which of the following is not a characteristic of the public cloud?
**Odgovor:** b) One-time costs for virtual resource
*Utemeljitev:** Javni oblak temelji na modelu, kjer se uporabnikom zaračunava na podlagi dejanske porabe virov (merjenje na podlagi porabe), kar pomeni, da ni enkratnih stroškov za virtualne vire. Namesto tega uporabniki plačujejo glede na uporabo, kar omogoča prilagodljivost in optimizacijo stroškov

---

## Vprašanje 24: Public cloud vendors have a common definition of what aspects of security are the vendor's responsibility and what
aspects of security are the end user's responsibility. This is referred to as the Shared Responsibility Model.
Under the Shared Responsibility Model, which of the following would be the end user's responsibility?
**Odgovor:** a) Encryption of data stored within a cloud storage service such as Amazon Elastic Block Store
**Utemeljitev:** V skladu s modelom skupne odgovornosti (Shared Responsibility Model) je šifriranje podatkov (encryption) odgovornost končnega uporabnika. Ponudnik oblačnih storitev je odgovoren za zaščito infrastrukture in omrežja, medtem ko so uporabniki odgovorni za zaščito svojih podatkov, kar vključuje šifriranje shranjenih podatkov

---

## Vprašanje 25: What cloud resource type stores structured data used by cloud applications?
**Odgovor:** d) Database
**Utemeljitev:** Baza podatkov (Database) je oblačni vir, ki shranjuje strukturirane podatke, ki jih uporabljajo različne oblačne aplikacije. To vključuje podatkovne baze, kot so SQL baze, ki omogočajo shranjevanje, obdelavo in iskanje strukturiranih podatkov.
