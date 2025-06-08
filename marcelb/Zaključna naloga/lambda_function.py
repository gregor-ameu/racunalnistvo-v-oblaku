import boto3
import datetime

def lambda_handler(event, context):
    s3 = boto3.client('s3')

    source_bucket = 'wordpress-media-cloud-marcel'
    destination_bucket = 'wordpress-media-backup-marcel'

    timestamp = datetime.datetime.utcnow().strftime('%Y%m%d-%H%M%S')

    try:
        response = s3.list_objects_v2(Bucket=source_bucket)
        if 'Contents' not in response:
            return {
                'statusCode': 200,
                'body': 'No files to back up.'
            }

        for obj in response['Contents']:
            source_key = obj['Key']
            copy_source = {
                'Bucket': source_bucket,
                'Key': source_key
            }
            dest_key = f'{timestamp}/{source_key}'

            s3.copy_object(
                CopySource=copy_source,
                Bucket=destination_bucket,
                Key=dest_key
            )

        return {
            'statusCode': 200,
            'body': f'Successfully backed up {len(response["Contents"])} files.'
        }
    except Exception as e:
        return {
            'statusCode': 500,
            'body': str(e)
        }

