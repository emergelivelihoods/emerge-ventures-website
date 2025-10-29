---
url: "https://developer.paychangu.com/reference/get-operator"
title: "Get Operators"
---

| time | status | user agent |  |
| :-- | :-- | :-- | :-- |
| Make a request to see history. |

#### URL Expired

The URL for this request expired after 30 days.

This endpoint enables you to retrieve all the mobile money operators that we currently support in processing payments. **CLICK TRY IT**

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

id

integer

Defaults to 0

name

string

ref\_id

string

short\_code

string

logo

string

supported\_country

object

supported\_country object

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

2     --url https://api.paychangu.com/mobile-money/ \

3     --header 'accept: application/json'

```

```

xxxxxxxxxx

28
}

1

{

2  "status": "success",

3  "message": "Supported mobile money operators retrieved successfully.",

4

  "data": [\
\
5\
\
    {\
\
6      "id": 1,\
\
7      "name": "TNM Mpamba",\
\
8      "ref_id": "27494cb5-ba9e-437f-a114-4e7a7686bcca",\
\
9      "short_code": "tnm",\
\
10      "logo": null,\
\
11\
\
      "supported_country": {\
\
12        "name": "Malawi",\
\
13        "currency": "MWK"\
\
14      }\
\
15    },\
\
16\
\
    {\
\
17      "id": 2,\
\
18      "name": "Airtel Money",\
\
19      "ref_id": "20be6c20-adeb-4b5b-a7ba-0769820df4fb",\
\
20      "short_code": "airtel",\
\
21      "logo": null,\
\
22\
\
      "supported_country": {\
\
23        "name": "Malawi",\
\
24        "currency": "MWK"\
\
25      }\
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