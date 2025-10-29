---
url: "https://developer.paychangu.com/reference/single-transaction"
title: "Single Transaction"
---

| time | status | user agent |  |
| :-- | :-- | :-- | :-- |
| Make a request to see history. |

#### URL Expired

The URL for this request expired after 30 days.

This endpoint enables you to retrieve a single Bank Transfer transaction.

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

transaction

object

transaction object

# `` 400      400

object

Updated 9 days ago

* * *

Did this page help you?

Yes

No

ShellNodeRubyPHPPython

[Log in to use your API keys](https://developer.paychangu.com/login?redirect_uri=/reference/single-transaction)

```

xxxxxxxxxx

1curl --request GET \

2     --url https://api.paychangu.com/direct-charge/transactions/12354%20/details \

3     --header 'accept: application/json'

```

```

xxxxxxxxxx

54
}

1

{

2  "status": "success",

3  "message": "Transaction retrieved successfully.",

4

  "data": {

5

    "transaction": {

6      "charge_id": "PTC12383",

7      "ref_id": "75513659949",

8      "trans_id": null,

9      "currency": "MK",

10      "amount": 1000,

11      "first_name": null,

12      "last_name": null,

13      "email": null,

14      "type": "Direct API Payment",

15      "trace_id": "v0atWHs0NLEN3vbTAL4DKFLm59dVHuRM",

16      "status": "success",

17      "mobile": "0",

18      "attempts": 1,

19      "mode": "live",

20      "created_at": "2025-02-17T21:14:35.000000Z",

21      "completed_at": "2025-02-17T21:18:40.000000Z",

22      "event_type": "api.charge.payment",

23

      "transaction_charges": {

24        "currency": "MK",

25        "amount": "20"

```

Updated 9 days ago

* * *

Did this page help you?

Yes

No