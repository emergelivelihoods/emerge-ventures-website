---
url: "https://developer.paychangu.com/reference/verify-transaction-status"
title: "Verify Transaction Status"
---

| time | status | user agent |  |
| :-- | :-- | :-- | :-- |
| Make a request to see history. |

#### URL Expired

The URL for this request expired after 30 days.

This endpoint helps developers to query the final status of a transaction. This can be used to check transactions of all payment types after they have been attempted. Except MoMo [Direct MoMo Charge](https://paychangu.readme.io/reference/verify-direct-charge-status).

tx\_ref

int32

required

Defaults to 2345

Obtain the transaction ID from the tx\_ref present in the response you receive after creating a transaction

# `` 200      200

object

status

string

message

string

data

object

event\_type

string

tx\_ref

string

mode

string

type

string

status

string

number\_of\_attempts

integer

Defaults to 0

reference

string

currency

string

amount

integer

Defaults to 0

charges

integer

Defaults to 0

customization

object

customization object

meta

string

authorization

object

authorization object

customer

object

customer object

logs

array of objects

logs

object

type

string

message

string

created\_at

string

created\_at

string

updated\_at

string

# `` 400      400

object

Updated 9 days ago

* * *

Did this page help you?

Yes

No

ShellNodeRubyPHPPython

[Log in to use your API keys](https://developer.paychangu.com/login?redirect_uri=/reference/verify-transaction-status)

```

xxxxxxxxxx

1curl --request GET \

2     --url https://api.paychangu.com/verify-payment/2345 \

3     --header 'accept: application/json'

```

```

xxxxxxxxxx

50
}

1

{

2  "status": "success",

3  "message": "Payment details retrieved successfully.",

4

  "data": {

5    "event_type": "checkout.payment",

6    "tx_ref": "PA54231315",

7    "mode": "live",

8    "type": "API Payment (Checkout)",

9    "status": "success",

10    "number_of_attempts": 1,

11    "reference": "26262633201",

12    "currency": "MWK",

13    "amount": 1000,

14    "charges": 40,

15

    "customization": {

16      "title": "iPhone 10",

17      "description": "Online order",

18      "logo": null

19    },

20    "meta": null,

21

    "authorization": {

22      "channel": "Card",

23      "card_number": "230377******0408",

24      "expiry": "2035-12",

25      "brand": "MASTERCARD",

```

Updated 9 days ago

* * *

Did this page help you?

Yes

No