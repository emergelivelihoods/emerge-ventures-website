---
url: "https://developer.paychangu.com/reference/bank-payout"
title: "Bank Payout"
---

| time | status | user agent |  |
| :-- | :-- | :-- | :-- |
| Make a request to see history. |

#### URL Expired

The URL for this request expired after 30 days.

This documentation provides an overview of how to send money to a bank account

payout\_method

string

required

Defaults to bank\_transfer

Payout method

bank\_uuid

string

required

Uuid of the bank to send to. The list of banks is got from the Get Banks endpoint

amount

string

required

The amount of money to be sent

charge\_id

string

required

Used to Identify the transaction. This MUST be unique for every transaction.

bank\_account\_name

string

required

Recipient Name

bank\_account\_number

string

required

Recipient account number for banks or phone number (265...) for Airtel Money and TNM Mpamba

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

[Log in to use your API keys](https://developer.paychangu.com/login?redirect_uri=/reference/bank-payout)

```

xxxxxxxxxx

1curl --request POST \

2     --url https://api.paychangu.com/direct-charge/payouts/initialize \

3     --header 'accept: application/json' \

4     --header 'content-type: application/json' \

5     --data '

6{

7  "payout_method": "bank_transfer"

8}

9'

```

```

xxxxxxxxxx

35
}

1

{

2  "status": "success",

3  "message": "Payout request submitted successfully.",

4

  "data": {

5

    "transaction": {

6      "charge_id": "TRX683932Ygis898jjnyghvtgu",

7      "ref_id": "97073812876",

8      "trans_id": null,

9      "currency": "MK",

10      "amount": 3000,

11      "first_name": null,

12      "last_name": null,

13      "email": null,

14      "type": "API Payout",

15      "trace_id": null,

16      "status": "pending",

17      "mobile": "0",

18      "attempts": 1,

19      "mode": "live",

20      "created_at": "2025-01-23T17:03:28.000000Z",

21      "completed_at": null,

22      "event_type": "api.payout",

23

      "transaction_charges": {

24        "currency": "MK",

25        "amount": "0"

```

Updated 9 days ago

* * *

Did this page help you?

Yes

No