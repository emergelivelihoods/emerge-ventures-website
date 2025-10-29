---
url: "https://developer.paychangu.com/reference/charge-mobile-money"
title: "Charge Mobile Money"
---

| time | status | user agent |  |
| :-- | :-- | :-- | :-- |
| Make a request to see history. |

#### URL Expired

The URL for this request expired after 30 days.

This documentation provides an overview of how you can collect payments from your customers through mobile money, without redirecting them to a separate page.

mobile

string

required

The phone number of the customer to make the payment.

mobile\_money\_operator\_ref\_id

string

required

Defaults to 20be6c20-adeb-4b5b-a7ba-0769820df4fb

Mobile Money Operator ref\_id get them using get supported Operators end point.

amount

string

required

The amount of money to be paid

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

json

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

You can then verify the payment and credit your customer with whatever they paid for. See our guide.

- [Charge Verification](https://developer.paychangu.com/reference/charge-verification-momo)

Did this page help you?

Yes

No

ShellNodeRubyPHPPython

[Log in to use your API keys](https://developer.paychangu.com/login?redirect_uri=/reference/charge-mobile-money)

```

xxxxxxxxxx

1curl --request POST \

2     --url https://api.paychangu.com/mobile-money/payments/initialize \

3     --header 'accept: application/json' \

4     --header 'content-type: application/json' \

5     --data '

6{

7  "mobile_money_operator_ref_id": "20be6c20-adeb-4b5b-a7ba-0769820df4fb"

8}

9'

```

```

xxxxxxxxxx

24



1"status": "success",

2  "message": "Payment initiated successfully.",

3

  "data": {

4    "amount": 50,

5    "charge_id": "27",

6    "ref_id": "95652259752",

7    "trans_id": "f28e10a6-5d71-4499-9ac3-fdce917fae98",

8    "first_name": "Mac",

9    "last_name": "Phiri",

10    "email": "youremail@domain.com",

11    "status": "pending",

12    "mobile": "+265997xxxx50",

13    "attempts": 2,

14    "currency": "MWK",

15    "mode": "live",

16    "created_at": "2024-06-15T00:21:33.000000Z",

17    "completed_at": null,

18

    "mobile_money": {

19      "name": "Airtel Money",

20      "ref_id": "20be6c20-adeb-4b5b-a7ba-0769820df4fb",

21      "country": "Malawi"

22    }

23  }

24}

```

Updated 9 days ago

* * *

You can then verify the payment and credit your customer with whatever they paid for. See our guide.

- [Charge Verification](https://developer.paychangu.com/reference/charge-verification-momo)

Did this page help you?

Yes

No