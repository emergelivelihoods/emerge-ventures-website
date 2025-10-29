---
url: "https://developer.paychangu.com/reference/single-charge-details"
title: "Single Charge details"
---

| time | status | user agent |  |
| :-- | :-- | :-- | :-- |
| Make a request to see history. |

#### URL Expired

The URL for this request expired after 30 days.

This endpoint enables you to retrieve all the mobile money operators that we currently support in processing payments. **click TRY IT**

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

trace\_id

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

array of objects

logs

object

type

string

message

string

created\_at

string

# `` 400      400

object

Updated 9 days ago

* * *

Did this page help you?

Yes

No

ShellNodeRubyPHPPython

[Log in to use your API keys](https://developer.paychangu.com/login?redirect_uri=/reference/single-charge-details)

```

xxxxxxxxxx

1curl --request GET \

2     --url https://api.paychangu.com/mobile-money/payments/12354/details \

3     --header 'accept: application/json'

```

```

xxxxxxxxxx

53
}

1

{

2  "status": "success",

3  "message": "Transaction retrieved successfully.",

4

  "data": {

5    "amount": 50,

6    "charge_id": "74536",

7    "ref_id": "36013728295",

8    "trans_id": "e90ec6c4-18b0-4503-b2df-ee19436b31d6",

9    "first_name": null,

10    "last_name": null,

11    "email": null,

12    "type": "Direct API Payment",

13    "trace_id": "wS3bV5uZkWEnKPv8r9Cv0ikII4BzuJ2S",

14    "status": "success",

15    "mobile": "+265992xxxx20",

16    "attempts": 1,

17    "currency": "MK",

18    "mode": "live",

19    "created_at": "2025-01-03T22:39:48.000000Z",

20    "completed_at": "2025-01-03T22:40:10.000000Z",

21    "event_type": "api.charge.payment",

22

    "mobile_money": {

23      "name": "Airtel Money",

24      "ref_id": "20be6c20-adeb-4b5b-a7ba-0769820df4fb",

25      "country": "Malawi"

```

Updated 9 days ago

* * *

Did this page help you?

Yes

No