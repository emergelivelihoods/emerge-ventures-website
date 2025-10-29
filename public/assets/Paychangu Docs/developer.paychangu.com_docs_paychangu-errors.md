---
url: "https://developer.paychangu.com/docs/paychangu-errors"
title: "PayChangu Errors"
---

PayChangu API errors can be grouped into three main categories. The validation errors, PayChangu errors, and provider errors.

They are usually returned in this format with the 400 HTTP status code:

JSON

```rdmd-code lang-json theme-light

{
  "message": {
    "callback_url": [\
      "The callback url field is required."\
    ]
  },
  "status": "failed",
  "data": null
}
```

## Provider Errors   [Skip link to Provider Errors](https://developer.paychangu.com/docs/paychangu-errors\#provider-errors)

Provider errors are returned from the payment provider. Below are some possible provider errors you can expect:

**DECLINED&#xA;**

Transaction declined.

**TIMED\_OUT**

Response timed out

**EXPIRED\_CARD&#xA;**

Transaction declined due to expired card

**INSUFFICIENT\_FUNDS**

Transaction declined due to insufficient funds

**AUTHENTICATION\_FAILED**

3DS authentication failed

**NOT\_ENROLLED\_3D\_SECURE&#xA;**

Cardholder is not enrolled in 3D Secure

**EXCEEDED\_RETRY\_LIMIT**

Transaction retry limit exceeded

**CARD\_NOT\_ENROLLED**

The card is not enrolled for 3DS authentication

**AUTHENTICATION\_NOT\_AVAILABLE**

Authentication is not currently available

**AUTHENTICATION\_ATTEMPTED**

Authentication was attempted but the card issuer did not perform the authentication

**CARD\_DOES\_NOT\_SUPPORT\_3DS**

The card does not support 3DS authentication

Updated9 days ago

* * *

Did this page help you?

Yes

No