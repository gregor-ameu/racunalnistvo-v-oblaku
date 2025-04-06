import boto3

BUCKET_NAME = "alma-my-bucket2"
FILE_NAME = "file.txt"

s3 = boto3.client("s3")

s3.upload_file(
    Filename=FILE_NAME,
    Bucket=BUCKET_NAME,
    Key=FILE_NAME,
    ExtraArgs={
        "Metadata": {
            "avtor": "Jani Kojc",
            "sola": "Alma Mater",
            "predmet": "Racunalnistvo v oblaku",
            "skripta": "upload.py",
            "verzija_skripte": "1.1"
        }
    }
)

print(f"File {FILE_NAME} uploaded to {BUCKET_NAME}/{FILE_NAME} with full metadata.")