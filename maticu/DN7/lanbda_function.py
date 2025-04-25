import urllib.request

def lambda_handler(event, context):

    url = f'http://18.192.129.243/shrani.php?stevilo=8&kraj=Ljubljana'

    try:
        with urllib.request.urlopen(url) as response:
            print("shrani.php se je odzval z " + response.read().decode('utf-8'))
    except Exception as e:
        print(f"Napaka pri povezavi: {e}")