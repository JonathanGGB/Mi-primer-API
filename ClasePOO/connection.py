import requests
import json

if __name__ == '__main__':
    url = 'http://zivotmagazine.net/Pruebas/index.php'
    response= requests.get(url)
    words = json.loads(response.content)
    print(words)
    print(json.dumps(words, indent=2))
    