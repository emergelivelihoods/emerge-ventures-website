---
url: "https://developer.paychangu.com/reference/mobile-money-payout"
title: "Mobile Money Payout"
---

| time | status | user agent |  |
| :-- | :-- | :-- | :-- |
| Make a request to see history. |

#### URL Expired

The URL for this request expired after 30 days.

This documentation provides an overview of how to send money to mobile money.

mobile

string

required

The phone number of the customer to receive the money

mobile\_money\_operator\_ref\_id

string

required

Mobile Money Operator ref\_id

amount

string

required

The amount of money to be sent

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

transaction\_status

string

\[optional\] used for sandbox Mode only .This takes only one of two values, namely, "failed" and "successful". Default value is "successful"

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

[Log in to use your API keys](https://developer.paychangu.com/login?redirect_uri=/reference/mobile-money-payout)

```

xxxxxxxxxx

1curl --request POST \

2     --url https://api.paychangu.com/mobile-money/payouts/initialize \

3     --header 'accept: application/json' \

4     --header 'content-type: application/json'

```

```

xxxxxxxxxx

41
}

1

{

2  "status": "success",

3  "message": "Payout processed successfully.",

4

  "data": {

5    "amount": 610.2,

6    "charge_id": "6789",

7    "ref_id": "86662145330",

8    "trans_id": null,

9    "first_name": null,

10    "last_name": null,

11    "email": null,

12    "type": "API Payout",

13    "trace_id": null,

14    "status": "success",

15    "mobile": "+265992xxxx20",

16    "attempts": 1,

17    "currency": "MK",

18    "mode": "sandbox",

19    "created_at": "2025-01-06T18:25:37.000000Z",

20    "completed_at": "2025-01-06T18:25:37.000000Z",

21    "event_type": "api.payout",

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