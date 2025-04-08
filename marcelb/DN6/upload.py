import boto3

BUCKET_NAME = "alma-bucket-marcel"
FILE_NAME = "file.txt"

s3 = boto3.client("s3")

metadata = {
    "author": "Marcel Belec",
    "organization": "Alma Mater"
}

s3.upload_file(
    FILE_NAME,
    BUCKET_NAME,
    FILE_NAME,
    ExtraArgs={"Metadata": metadata}
)

print(f"File {FILE_NAME} uploaded to {BUCKET_NAME}/{FILE_NAME} with metadata.")
