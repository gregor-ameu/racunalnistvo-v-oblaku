import json

def lambda_handler(event, context):
    # Extract parameters from the event
    stevilo = event.get('stevilo', None)
    kraj = event.get('kraj', None)

    # Check if both parameters are provided
    if stevilo and kraj:
        result = f"Received stevilo: {stevilo} and kraj: {kraj}"
    else:
        result = "Missing parameters."

    return {
        'statusCode': 200,
        'body': json.dumps({
            'message': result
        })
    }
