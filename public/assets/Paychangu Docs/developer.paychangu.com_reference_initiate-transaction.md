---
url: "https://developer.paychangu.com/reference/initiate-transaction"
title: "Initiate Transaction"
---

| time | status | user agent |  |
| :-- | :-- | :-- | :-- |
| Make a request to see history. |

#### URL Expired

The URL for this request expired after 30 days.

amount

string

required

Amount to charge the customer.

currency

string

required

Defaults to MWK

Currency to charge in. \[ 'MWK', 'USD' \]

tx\_ref

string

Your transaction reference. This MUST be unique for every transaction.

first\_name

string

This is the first\_name of your customer.

last\_name

string

This is the last\_name of your customer. (optional)

callback\_url

string

required

This is your IPN url, it is important for receiving payment notification. Successful transactions redirects to this url after payment. {tx\_ref} is returned, so you don't need to pass it with your url

return\_url

string

required

Once the customer cancels or after multiple failed attempts, we will redirect to the return\_url with the query parameters tx\_ref and status of failed. (optional)

email

string

This is the email address of your customer. Transaction notification will be sent to this email address (optional)

meta

string

You can pass extra information here. (optional)

uuid

string

(optional)

customization

object

customization object

# `` 200      200

object

message

string

status

string

data

object

event

string

checkout\_url

string

data

object

data object

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

- [Transaction verification](https://developer.paychangu.com/reference/transaction-verification)

Did this page help you?

Yes

No

ShellNodeRubyPHPPython

[Log in to use your API keys](https://developer.paychangu.com/login?redirect_uri=/reference/initiate-transaction)

```

xxxxxxxxxx

1curl --request POST \

2     --url https://api.paychangu.com/payment \

3     --header 'accept: application/json' \

4     --header 'content-type: application/json' \

5     --data '{"currency":"MWK"}'

```

```

xxxxxxxxxx

15



1

{

2  "message": "Hosted payment session generated successfully.",

3  "status": "success",

4

  "data": {

5    "event": "checkout.session:created",

6    "checkout_url": "https://test-checkout.paychangu.com/7887951180",

7

    "data": {

8      "tx_ref": "98993331-d4f4-4840-899f-7b46cacbb9f4",

9      "currency": "MWK",

10      "amount": 1000,

11      "mode": "sandbox",

12      "status": "pending"

13    }

14  }

15}

```

Updated 9 days ago

* * *

- [Transaction verification](https://developer.paychangu.com/reference/transaction-verification)

Did this page help you?

Yes

No