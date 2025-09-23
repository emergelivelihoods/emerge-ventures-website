---
url: "https://developer.paychangu.com/reference/single-bank-payout-details-copy"
title: "All Bank Payout Details"
---

| time | status | user agent |  |
| :-- | :-- | :-- | :-- |
| Make a request to see history. |

#### URL Expired

The URL for this request expired after 30 days.

# `` 200      200

object

status

string

message

string

data

object

current\_page

integer

Defaults to 0

total\_pages

integer

Defaults to 0

per\_page

integer

Defaults to 0

next\_page\_url

string

data

array of objects

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

[Log in to use your API keys](https://developer.paychangu.com/login?redirect_uri=/reference/single-bank-payout-details-copy)

```

xxxxxxxxxx

1curl --request GET \

2     --url https://api.paychangu.com/direct-charge/payouts \

3     --header 'accept: application/json'

```

```

xxxxxxxxxx

41
}

1

{

2  "status": "success",

3  "message": "Transactions retrieved successfully.",

4

  "data": {

5    "current_page": 1,

6    "total_pages": 1,

7    "per_page": 20,

8    "next_page_url": null,

9

    "data": [\
\
10\
\
      {\
\
11        "charge_id": "4567tfuty",\
\
12        "ref_id": "54438943842",\
\
13        "trans_id": null,\
\
14        "currency": "MK",\
\
15        "amount": 1000,\
\
16        "first_name": null,\
\
17        "last_name": null,\
\
18        "email": null,\
\
19        "type": "API Payout",\
\
20        "trace_id": null,\
\
21        "status": "success",\
\
22        "mobile": "0",\
\
23        "attempts": 1,\
\
24        "mode": "live",\
\
25        "created_at": "2025-01-24T06:46:40.000000Z",\
\
```\
\
Updated 9 days ago\
\
* * *\
\
Did this page help you?\
\
Yes\
\
No