---
url: "https://developer.paychangu.com/reference/single-charge-details-copy"
title: "Single MoMo Payout Details"
---

| time | status | user agent |  |
| :-- | :-- | :-- | :-- |
| Make a request to see history. |

#### URL Expired

The URL for this request expired after 30 days.

This endpoint helps you fetch the details of a transfer. By providing the `Charge ID`, you can obtain comprehensive details about the transfer, including its status, amount, currency, and other relevant metadata

chargeId

string

required

Defaults to 12354

# `` 200      200

object

status

string

message

string

data

object

amount

number

Defaults to 0

charge\_id

string

ref\_id

string

trans\_id

string

first\_name

string

last\_name

string

email

string

type

string

status

string

mobile

string

attempts

integer

Defaults to 0

currency

string

mode

string

created\_at

string

completed\_at

string

event\_type

string

mobile\_money

object

mobile\_money object

transaction\_charges

object

transaction\_charges object

# `` 400      400

object

Updated 9 days ago

* * *

Did this page help you?

Yes

No

ShellNodeRubyPHPPython

[Log in to use your API keys](https://developer.paychangu.com/login?redirect_uri=/reference/single-charge-details-copy)

```

xxxxxxxxxx

1curl --request GET \

2     --url https://api.paychangu.com/mobile-money/payments/12354details \

3     --header 'accept: application/json'

```

```

xxxxxxxxxx

31
}

1

{

2  "status": "success",

3  "message": "Transaction retrieved successfully.",

4

  "data": {

5    "amount": 50.75,

6    "charge_id": "jvivuiviu",

7    "ref_id": "87452449015",

8    "trans_id": "bc35c29a-df2c-45e5-a15e-42d594589b8e",

9    "first_name": null,

10    "last_name": null,

11    "email": null,

12    "type": "API Payout",

13    "status": "success",

14    "mobile": "+265992xxxx20",

15    "attempts": 1,

16    "currency": "MK",

17    "mode": "live",

18    "created_at": "2024-07-17T21:22:41.000000Z",

19    "completed_at": "2024-07-17T21:22:44.000000Z",

20    "event_type": "api.payout",

21

    "mobile_money": {

22      "name": "Airtel Money",

23      "ref_id": "20be6c20-adeb-4b5b-a7ba-0769820df4fb",

24      "country": "Malawi"

25    },

```

Updated 9 days ago

* * *

Did this page help you?

Yes

No