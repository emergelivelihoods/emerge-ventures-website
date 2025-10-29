---
url: "https://developer.paychangu.com/reference/create-bill"
title: "Create Bill"
---

| time | status | user agent |  |
| :-- | :-- | :-- | :-- |
| Make a request to see history. |

#### URL Expired

The URL for this request expired after 30 days.

operator

string

required

Defaults to 123

Operator ID of the network.

amount

string

required

Defaults to 100

Amount of bill.

phone

string

required

Defaults to 0900000000

Mobile phone of the customer e.g 265000000000 without the plus symbol.

callback\_url

string

required

Defaults to https://webhook.site/

This is your IPN url, it is important for receiving payment notification webhooks

# `` 200      200

object

message

string

status

string

data

object

user\_id

string

type

string

amount

integer

Defaults to 0

biller

integer

Defaults to 0

charge

integer

Defaults to 0

ref

string

track

integer

Defaults to 0

trx\_ref

integer

Defaults to 0

recipientPhone

string

senderPhone

string

updated\_at

string

created\_at

string

id

integer

Defaults to 0

# `` 400      400

object

Updated 9 days ago

* * *

Did this page help you?

Yes

No

ShellNodeRubyPHPPython

[Log in to use your API keys](https://developer.paychangu.com/login?redirect_uri=/reference/create-bill)

```

xxxxxxxxxx

12

1curl --request POST \

2     --url https://api.paychangu.com/bill_payment/create \

3     --header 'accept: application/json' \

4     --header 'content-type: application/json' \

5     --data '

6{

7  "operator": "123",

8  "amount": "100",

9  "phone": "0900000000",

10  "callback_url": "https://webhook.site/"

11}

12'

```

```

xxxxxxxxxx

19



1

{

2  "message": "Topup  created",

3  "status": "success",

4

  "data": {

5    "user_id": "1111-1111-11111-11111-111111",

6    "type": "2",

7    "amount": 100,

8    "biller": 123,

9    "charge": 3,

10    "ref": "MZqAzUtjgToZ7pib",

11    "track": 13362120,

12    "trx_ref": 13362120,

13    "recipientPhone": "265000000000",

14    "senderPhone": null,

15    "updated_at": "2023-04-24T10:25:12.000000Z",

16    "created_at": "2023-04-24T10:25:12.000000Z",

17    "id": 27

18  }

19}

```

Updated 9 days ago

* * *

Did this page help you?

Yes

No