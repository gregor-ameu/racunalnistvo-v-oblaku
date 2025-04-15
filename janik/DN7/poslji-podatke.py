import json
import urllib.request

def lambda_handler(event, context):
    # URL kamor bomo poslali podatke
    url = 'http://3.65.30.246/api_avtomobili.php?action=dodaj'

    # Pridobi podatke iz event objekta
    stevilo = event.get("stevilo", 0)          # privzeta vrednost 0, če "stevilo" ni podano
    kraj = event.get("kraj", "Neznano")        # privzeta vrednost "Neznano", če "kraj" ni podan

    # Pripravi podatke v obliki slovarja, ki jih bomo poslali na API
    data = {
        "stevilo": stevilo,
        "kraj": kraj
    }

    # Pripravi glave in JSON telo zahteve
    headers = { "Content-Type": "application/json" }
    json_data = json.dumps(data).encode('utf-8')

    try:
        # Ustvari POST zahtevo na API URL s podatki in glavo
        req = urllib.request.Request(url, data=json_data, headers=headers, method='POST')
        
        # Pošlji zahtevo in preberi odgovor
        with urllib.request.urlopen(req) as response:
            body = response.read().decode('utf-8') 
            print("Odgovor od API:", body)          
            
            # Vrni uspešen HTTP odgovor iz Lambda funkcije
            return {
                'statusCode': 200,
                'body': body
            }

    except Exception as e:
        # Če pride do napake (npr. povezava ne uspe), izpiši napako in vrni kodo 500
        print("Napaka pri pošiljanju podatkov:", e)
        return {
            'statusCode': 500,
            'body': str(e)
        }