import json
import os
import urllib.parse
import urllib.request

api_key = os.environ.get("LASTDATABASE_API_KEY")

if not api_key:
    raise SystemExit(
        "ERROR: LASTDATABASE_API_KEY is not set."
    )

params = urllib.parse.urlencode(
    {
        "type": "email",
        "country": "usa",
        "industry": "healthcare",
        "limit": 10,
    }
)

url = (
    "https://lastdatabase.com/api/leads/search?"
    + params
)

request = urllib.request.Request(
    url,
    headers={
        "Authorization": f"Bearer {api_key}",
        "Accept": "application/json",
    },
)

try:
    with urllib.request.urlopen(
        request,
        timeout=30,
    ) as response:
        payload = json.load(response)

except Exception as error:
    raise SystemExit(
        f"Request failed: {error}"
    )

print(
    json.dumps(
        payload,
        indent=2,
    )
)
