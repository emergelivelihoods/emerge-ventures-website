---
url: "https://developer.paychangu.com/reference/bills-payments"
title: "Get All Operators"
---

| time | status | user agent |  |
| :-- | :-- | :-- | :-- |
| Make a request to see history. |

#### URL Expired

The URL for this request expired after 30 days.

# `` 200      200

object

message

string

status

string

data

object

# `` 400      400

object

Updated 9 days ago

* * *

Did this page help you?

Yes

No

ShellNodeRubyPHPPython

[Log in to use your API keys](https://developer.paychangu.com/login?redirect_uri=/reference/bills-payments)

```

xxxxxxxxxx

1curl --request GET \

2     --url https://api.paychangu.com/bill_payment/get-operators \

3     --header 'accept: application/json'

```

```

xxxxxxxxxx



1

{

2  "message": "All Operators",

3  "status": "success",

4  "data": {}

5}

```

Updated 9 days ago

* * *

Did this page help you?

Yes

No