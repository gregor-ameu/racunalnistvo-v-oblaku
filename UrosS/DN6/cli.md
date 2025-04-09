delovanje ukazov mv in sync

1. mv
   ukaz mv premakne datoteko in ene točke na drugo. izvorno datoteko izbriše.
   celotni ukaz(aws s3 mv moj text <mestodatoteke> <destinacijaDatoteke>)
   aws s3 mv textZaPremik.mv S3://alma-web-uros ./downloads/ -> premakne datoteko iz s3 v lokalni računalnik (prenese datoteko v EC2 instanco)
   aws s3 mv textZaPremik.mv /var/www/html/ S3://alma-web-uros/premik/ -> premakne lokalno datoteko v S3 bucket v mapo premik

2. sync
   sync ukaz sinhronizira vsebino med lokalno mapo in S3 bucketom kar pomeni da bo na cilju posodobil datoteke in dodal tiste, ki jih še ni
   celotni ukaz aws s3 sync <izhodiščna mapa z katero posodabljamo> <ciljna mapa ki bo posodobljena> -> lahko posodobimo tudi posamezne datoteke da navedemo da polek poti do mape še datoteko v mapi
   aws s3 sync /var/www/html/ S3://alma-web-uros/sync/ -> vsebina lokalne mape html se bo sinhronizirala v mapo sync
   aws s3 sync S3://alma-web-uros/ /var/www/html/backupSync/ -> vsebina bucketa se bo sinhronizirala v lokalno mapo backupSync

python scripta za uploadanje datotek na S3 bucket
nalogi sem še dodal da lahko podam argumente skupaj z datoteko ki jo želim naložit, da lahko program uporabljam dinamično
ukaz za uporabo python3 uploadToS3.py <fileName>
optional --bucket<bucketSource> --key<rename the uploaded file>
prav tako lahko določim specifični bucket kamor hočem datoteko naložit z ukazom --bucket <bucket adress>
datoteko lahko shranim z uporabo poljubnega imena z uporabom ukaza --key <novo ime datoteke>

import argparse
import boto3
import mimetypes
import os

def main():
parser = argparse.ArgumentParser(description='Upload a file to S3 with metadata.')
parser.add_argument('file_path', help='Path to the file you want to upload')
parser.add_argument('--bucket', help='S3 bucket name (default: alma-web-uros)')
parser.add_argument('--key', help='S3 object key (optional, defaults to filename)')

    args = parser.parse_args()
    file_path = args.file_path
    bucket_name = args.bucket or 'alma-web-uros'
    # Dobi končnico iz izvorne datoteke
    source_ext = os.path.splitext(file_path)[1]
    if args.key:
        key_root, key_ext = os.path.splitext(args.key)
        # Če key nima končnice ali ima napačno, popravi
        if key_ext.lower() != source_ext.lower():
            key = f"{key_root}{source_ext}"
        else:
            key = args.key
    else:
        key = os.path.basename(file_path)

    # Get file metadata
    mime_type, _ = mimetypes.guess_type(file_path)
    metadata = {
        'author': 'Uros Skrt',
        'organization': 'Almamater'
    }

    # Upload to S3
    s3 = boto3.client('s3')
    s3.upload_file(
        Filename=file_path,
        Bucket=bucket_name,
        Key=key,
        ExtraArgs={
            'Metadata': metadata,
            'ContentType': mime_type or 'application/octet-stream'
        }
    )

    print(f"Uploaded {file_path} to s3://{bucket_name}/{key}")

if **name** == '**main**':
main()
