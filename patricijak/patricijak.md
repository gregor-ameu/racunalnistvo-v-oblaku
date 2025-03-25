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
