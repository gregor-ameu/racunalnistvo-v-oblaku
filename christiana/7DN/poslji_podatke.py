import json
import urllib.request
import urllib.error

def lambda_handler(event, context):
    # URL tvoje PHP skripte (posodobi, če se spremeni)
    url = 'http://63.176.239.189/tabela.php'

    # Pridobivanje podatkov iz dogodka (event), ki ga sproži Lambda
    stevilo = event.get("stevilo", 0)
    kraj = event.get("kraj", "Neznano")

    # Priprava podatkov za pošiljanje
    data = {
        "stevilo": stevilo,
        "kraj": kraj
    }

    # Serilizacija v JSON format
    json_data = json.dumps(data).encode('utf-8')

    # Glava HTTP zahtevka
    headers = { "Content-Type": "application/json" }

    # Ustvarimo HTTP POST zahtevek
    req = urllib.request.Request(url, data=json_data, headers=headers, method='POST')

    try:
        # Pošljemo zahtevek na PHP strežnik
        with urllib.request.urlopen(req) as response:
            # Preberemo odziv in dekodiramo v slovar
            response_body = response.read().decode('utf-8')
            result = json.loads(response_body)

            # Vrni uspešen odziv
            return {
                'statusCode': 200,
                'body': json.dumps({
                    'sporocilo': 'Podatki uspešno poslani.',
                    'odgovor_streznika': result
                })
            }

    except urllib.error.HTTPError as e:
        # HTTP napaka (npr. 500, 404)
        return {
            'statusCode': e.code,
            'body': json.dumps({'napaka': f'HTTP napaka: {e.reason}'})
        }
    except urllib.error.URLError as e:
        # Napaka omrežja ali nepravilni URL
        return {
            'statusCode': 500,
            'body': json.dumps({'napaka': f'Napaka URL ali povezave: {e.reason}'})
        }
    except Exception as e:
        # Splošna napaka
        return {
            'statusCode': 500,
            'body': json.dumps({'napaka': f'Napaka: {str(e)}'})
        }
