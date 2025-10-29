---
url: "https://developer.paychangu.com/reference/charge-via-bank-transfer"
title: "Bank Transfer"
---

| time | status | user agent |  |
| :-- | :-- | :-- | :-- |
| Make a request to see history. |

#### URL Expired

The URL for this request expired after 30 days.

Create dynamic virtual accounts to facilitate instant payments through bank transfers. Before getting started, we recommend reviewing the [method overview](https://developer.paychangu.com/docs/bank-transfer-1) for a better understanding.

amount

string

required

The amount of money to be paid

currency

string

required

Currency to charge in. \[ 'MWK' \]

payment\_method

string

required

Defaults to mobile\_bank\_transfer

charge\_id

string

required

Used to Identify the transaction. This MUST be unique for every transaction.

email

string

This is the email address of your customer. Transaction notification will be sent to this email address. Optional

first\_name

string

This is the first name of your customer. Optional

last\_name

string

This is the last name of your customer. Optional

# `` 200      200

object

status

string

message

string

data

object

payment\_account\_details

object

payment\_account\_details object

transaction

object

transaction object

# `` 400      400

object

status

string

message

string

data

string

Updated 9 days ago

* * *

Did this page help you?

Yes

No

ShellNodeRubyPHPPython

[Log in to use your API keys](https://developer.paychangu.com/login?redirect_uri=/reference/charge-via-bank-transfer)

```

xxxxxxxxxx

1curl --request POST \

2     --url https://api.paychangu.com/direct-charge/payments/initialize \

3     --header 'accept: application/json' \

4     --header 'content-type: application/json' \

5     --data '

6{

7  "payment_method": "mobile_bank_transfer"

8}

9'

```

```

xxxxxxxxxx

54
}

1

{

2  "status": "success",

3  "message": "Payment initialized successfully.",

4

  "data": {

5

    "payment_account_details": {

6      "bank_name": "Centenary Bank",

7      "account_number": "2652493369",

8      "account_name": "PayChangu Dev",

9      "account_expiration_timestamp": 1739830475

10    },

11

    "transaction": {

12      "charge_id": "PTC12383",

13      "ref_id": "75513659949",

14      "trans_id": null,

15      "currency": "MK",

16      "amount": 1020,

17      "first_name": null,

18      "last_name": null,

19      "email": null,

20      "type": "Direct API Payment",

21      "trace_id": "v0atWHs0NLEN3vbTAL4DKFLm59dVHuRM",

22      "status": "pending",

23      "mobile": "0",

24      "attempts": 1,

25      "mode": "live",

```

Updated 9 days ago

* * *

Did this page help you?

Yes

No