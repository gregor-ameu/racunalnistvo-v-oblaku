#aws s3 mv

Uporablja se za premikanje datotek ali map med lokacijami – znotraj istega S3 vedra ali med različnimi vedri. Deluje podobno kot Linux ukaz mv, vendar deluje s S3 objekti.

##Premik datoteke v S3 vedro:

aws s3 mv file.txt s3://alma-web-danis/file.txt

##Premik celotne mape (rekurzivno):

#aws s3 sync
Sinhronizira vsebino med dvema lokacijama (lokalno in S3 ali med dvema S3 vedroma). Prenese/posodobi le datoteke, ki so se spremenile ali manjkajo.

##Naloži spremembe iz lokalne mape v S3 vedro:

aws s3 sync /local/directory/ s3://alma-web-danis/directory/

##Prenesi spremembe iz S3 vedra v lokalno mapo:

aws s3 sync s3://alma-web-danis/directory/ /local/directory/

##Sinhronizacija med dvema S3 vedroma:

aws s3 sync s3://alma-web-danis/ s3://alma-bucket-danis/