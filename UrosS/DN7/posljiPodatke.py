import urllib.request

def lambda_handler(event, context):
    url = 'http://3.79.242.15/shrani.php?'
    stevilo = '&stevilo=' + str(event['stevilo'])
    kraj = '&kraj=' + str(event['kraj'])

    fullLink = url + stevilo + kraj
    print(fullLink)
    try: 
        with urllib.request.urlopen(fullLink) as response:
            body = response.read().decode('utf-8')
            print('shrani.php se je odzval z' + body)
    except Exception as e:
        print('Napaka pri pridobivanju podatkov')
        print(e)