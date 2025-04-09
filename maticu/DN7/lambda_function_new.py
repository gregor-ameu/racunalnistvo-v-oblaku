import urllib.request

def lambda_handler(event, context):
    stevilo = event['stevilo']
    kraj = event['kraj']

    url = f'http://18.192.129.243/shrani.php?stevilo={stevilo}&kraj={kraj}'

    try:
        with urllib.request.urlopen(url) as response:
            print("shrani.php se je odzval z " + response.read().decode('utf-8'))
    except Exception as e:
        print(f"Napaka pri povezavi: {e}")
