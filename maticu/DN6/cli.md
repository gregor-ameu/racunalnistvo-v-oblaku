Ukaz aws s3 mv 1.png s3://alma-web-matic/1.png premakne izbrano datoteko na naš bucket na S3.  
Kopiranje datotek med bucketi:  
aws s3 mv s3://alma-bucket-matic/1.png s3://alma-web-matic/1.png  
Premikanje vseh datotek:  
aws s3 mv s3://alma-web-matic/ s3://alma-bucket-matic/ --recursive  
Sinhroniziranje datotek (lokalno na S3):  
aws s3 sync /var/www/html s3://alma-web-matic/  
Sinhronizacija med bucketi:  
aws s3 sync s3://alma-bucket-matic/ s3://alma-web-matic  
Izbris datotek, katere se ne nahajajo na našem lokalnem disku:  
aws s3 sync /var/www/html s3://alma-web-matic/ --delete
