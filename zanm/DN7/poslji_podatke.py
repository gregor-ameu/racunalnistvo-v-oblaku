import urllib.request


def lambda_handler(event, context):

    print(event)
    stevilo = event.get("stevilo")
    kraj = event.get("kraj")

    if stevilo is None or kraj is None:
        raise ValueError("Manjkajoči vhodni podatki!")

    params = urllib.parse.urlencode({
        "stevilo": stevilo,
        "kraj": kraj
    })

    url = f"http://3.120.243.94/shrani.php?{params}"


    try:
        with urllib.request.urlopen(url) as response:
            body = response.read().decode('utf-8')
            print("shrani.php se je odzval z " + body)

    except Exception as e:
        print(e)