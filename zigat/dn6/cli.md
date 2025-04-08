#delovanje aws mv & aws sync

## aws mv
Uporablja se pri premikanju datotek ali map med lokacijami -- znotraj vedra ali med vedri. Podobna je linux ukazu "mv" ampak deluje s S3 objekti.<br>

```
aws s3 mv <source> <destination> [--options]
```
<br>
na primeru našega alma-web-zigat vedra: <br>
premik datoteke file.txt v vedro: <br>
aws s3 mv file.txt s3::/alma-web-zigat/file.txt

<br>
če želimo premakniti cel direktorij, uporabimo nastavitev --recursive :<br>
aws s3 mv /local/directory/ s3://alma-web-zigat/directory/ --recursive


## aws sync
aws sync ukaz sinhronizira stanja med dvema lokacijama. Datoteke primerja in prenese le datoteke ki se razlikujejo ali manjkajo. <br>

```
aws s3 sync <source> <destination> [--options]
```

naloži nove lokalne datoteke in spremembe, na s3 bucket: <br>
aws s3 sync /local/directory/ s3://alma-web-zigat/directory/

prenese spremembe is s3 bucket-a v lokalni direktorij <br>
aws s3 sync s3://alma-web-zigat/directory/ /local/directory/

sinhronizacija deluje tudi med dvema bucketoma<br>
aws s3 sync s3://alma-web-zigat/ s3://alma-bucket-zigat/
<br>
Po defaultu, ukaz sync ne briše datotek na cilju, ki na sourcu ne obstajajo. Če želimo s ukazom sync zavrzti "odvečne" datoteke na destinaciji, moramo uporabiti opcijski ukaz --delete
<br>
Opcijski ukaz --exact-timestamps omeji sinhronizacijo, na le tiste datoteke, katerim se razlikujejo časovnice zadnje spremembe. To prepreči nepotrebne prenose datotek, ki se niso spremenile.