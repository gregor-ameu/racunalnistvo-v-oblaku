import boto3

BUCKET_NAME = "alma-bucket-matic"  # Spremenite na ime vašega S3 vedra!
FILE_NAME = "file.txt"

# Inicializirajte boto3 S3 klienta
s3 = boto3.client("s3")

# Metapodatki, ki jih bomo shranili skupaj z datoteko
metadata = {
    "author": "Matic Usaj",
    "organization": "Alma Mater"
}

# Prenos datoteke z metapodatki na S3
s3.upload_file(FILE_NAME, BUCKET_NAME, FILE_NAME, ExtraArgs={"Metadata": metadata})

print(f"File {FILE_NAME} uploaded to {BUCKET_NAME}/{FILE_NAME} with metadata.")