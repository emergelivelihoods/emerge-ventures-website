---
url: "https://developer.paychangu.com/reference/verify-direct-charge-status"
title: "Verify Direct Charge Status"
---

| time | status | user agent |  |
| :-- | :-- | :-- | :-- |
| Make a request to see history. |

#### URL Expired

The URL for this request expired after 30 days.

This endpoint helps developers to query the final status of a Direct Charge transaction. This can be used to check transactions after they have been attempted.

chargeId

int32

required

Defaults to 2345

You can get the charge ID from the chargeId field that's present in the response

# `` 200      200

object

status

string

message

string

data

object

amount

integer

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

authorization

object

authorization object

logs

array

logs

# `` 400      400

object

Updated 9 days ago

* * *

Did this page help you?

Yes

No

ShellNodeRubyPHPPython

[Log in to use your API keys](https://developer.paychangu.com/login?redirect_uri=/reference/verify-direct-charge-status)

```

xxxxxxxxxx

1curl --request GET \

2     --url https://api.paychangu.com/mobile-money/payments/2345/verify \

3     --header 'accept: application/json'

```

```

xxxxxxxxxx

41
}

1

{

2  "status": "successful",

3  "message": "Payment authorized and completed successfully.",

4

  "data": {

5    "amount": 100,

6    "charge_id": "2345",

7    "ref_id": "29263119322",

8    "trans_id": null,

9    "first_name": "Kim",

10    "last_name": "Banda",

11    "email": "yourmail@gmail.com",

12    "type": "Direct API Payment",

13    "status": "success",

14    "mobile": "+265993xxxx40",

15    "attempts": 1,

16    "currency": "MK",

17    "mode": "Live",

18    "created_at": "2024-08-18T14:45:11.000000Z",

19    "completed_at": "2024-08-18T14:52:44.000000Z",

20    "event_type": "api.charge.payment",

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