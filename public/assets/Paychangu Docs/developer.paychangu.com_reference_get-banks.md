---
url: "https://developer.paychangu.com/reference/get-banks"
title: "Get Banks"
---

| time | status | user agent |  |
| :-- | :-- | :-- | :-- |
| Make a request to see history. |

#### URL Expired

The URL for this request expired after 30 days.

This endpoint enables you to retrieve all the banks we currently support in processing payments.

# `` 200      200

object

status

string

message

string

data

array of objects

data

object

uuid

string

name

string

# `` 400      400

object

Updated 9 days ago

* * *

Did this page help you?

Yes

No

ShellNodeRubyPHPPython

```

xxxxxxxxxx

1curl --request GET \

2     --url 'https://api.paychangu.com/direct-charge/payouts/supported-banks?currency=MWK' \

3     --header 'accept: application/json'

```

```

xxxxxxxxxx

46
}

1

{

2  "status": "success",

3  "message": "Retrieved successfully.",

4

  "data": [\
\
5\
\
    {\
\
6      "uuid": "82310dd1-ec9b-4fe7-a32c-2f262ef08681",\
\
7      "name": "National Bank of Malawi"\
\
8    },\
\
9\
\
    {\
\
10      "uuid": "5b9f76b1-620a-4eb9-8848-43d1e3e372dd",\
\
11      "name": "NBS Bank Limited"\
\
12    },\
\
13\
\
    {\
\
14      "uuid": "87e62436-0553-4fb5-a76d-f27d28420c5b",\
\
15      "name": "Ecobank Malawi Limited"\
\
16    },\
\
17\
\
    {\
\
18      "uuid": "b064172a-8a1b-4f7f-aad7-81b036c46c57",\
\
19      "name": "FDH Bank Limited"\
\
20    },\
\
21\
\
    {\
\
22      "uuid": "e7447c2c-c147-4907-b194-e087fe8d8585",\
\
23      "name": "Standard Bank Limited"\
\
24    },\
\
25\
\
    {\
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