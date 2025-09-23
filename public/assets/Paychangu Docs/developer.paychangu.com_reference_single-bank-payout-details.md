---
url: "https://developer.paychangu.com/reference/single-bank-payout-details"
title: "Single Bank Payout Details"
---

| time | status | user agent |  |
| :-- | :-- | :-- | :-- |
| Make a request to see history. |

#### URL Expired

The URL for this request expired after 30 days.

This endpoint helps you fetch the details of a transfer. By providing the `Charge ID`, you can obtain comprehensive details about the transfer, including its status, amount, currency, and other relevant metadata

charge\_id

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

charge\_id

string

ref\_id

string

trans\_id

string

currency

string

amount

integer

Defaults to 0

first\_name

string

last\_name

string

email

string

type

string

trace\_id

string

status

string

mobile

string

attempts

integer

Defaults to 0

mode

string

created\_at

string

completed\_at

string

event\_type

string

transaction\_charges

object

transaction\_charges object

recipient\_account\_details

object

recipient\_account\_details object

# `` 400      400

object

Updated 9 days ago

* * *

Did this page help you?

Yes

No

ShellNodeRubyPHPPython

[Log in to use your API keys](https://developer.paychangu.com/login?redirect_uri=/reference/single-bank-payout-details)

```

xxxxxxxxxx

1curl --request GET \

2     --url https://api.paychangu.com/direct-charge/payouts/12354/details \

3     --header 'accept: application/json'

```

```

xxxxxxxxxx

33
}

1

{

2  "status": "successful",

3  "message": "Transaction details retrieved successfully",

4

  "data": {

5    "charge_id": "TRX683932Ygis898jjnyghvtguuu",

6    "ref_id": "33722634970",

7    "trans_id": null,

8    "currency": "MK",

9    "amount": 1000,

10    "first_name": null,

11    "last_name": null,

12    "email": null,

13    "type": "API Payout",

14    "trace_id": null,

15    "status": "failed",

16    "mobile": "0",

17    "attempts": 1,

18    "mode": "live",

19    "created_at": "2025-01-23T22:46:06.000000Z",

20    "completed_at": null,

21    "event_type": "api.payout",

22

    "transaction_charges": {

23      "currency": "MK",

24      "amount": "0"

25    },

```

Updated 9 days ago

* * *

Did this page help you?

Yes

No