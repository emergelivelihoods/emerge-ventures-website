---
url: "https://developer.paychangu.com/docs/transaction-verification"
title: "Transaction verification"
---

After a successful charge, you need to verify with PayChangu that the payment was successful before providing value to your customer on your website. For every transaction, you must supply a transaction ID.

Here are some important things to check when verifying the payment:

- Verify that the transaction reference matches the one you generated.
- Verify that the status of the transaction is successful.
- Verify that the currency of the payment matches the expected currency.
- Verify that the amount paid is greater than or equal to the expected amount. If the amount is greater, you can provide the customer with the value and refund the excess.

To verify a payment, use the verify transaction endpoint by passing in the transaction ID in the URL. You can obtain the transaction ID from the `tx_ref` present in the response you receive after creating a transaction or in the [webhook](https://developer.paychangu.com/reference/webhooks) payload for any transaction.

Below is a sample code of how to implement server-side validation

cURL

```rdmd-code lang-curl theme-light

curl -X GET "https://api.paychangu.com/verify-payment/{tx_ref}"
-H "Accept: application/json"
-H "Authorization: Bearer {secret_key}"
```

## Verification response   [Skip link to Verification response](https://developer.paychangu.com/docs/transaction-verification\#verification-response)

Here's a sample verification response

JSON

```rdmd-code lang-json theme-light

{
  "status": "success",
  "message": "Payment details retrieved successfully.",
  "data": {
    "event_type": "checkout.payment",
    "tx_ref": "PA54231315",
    "mode": "live",
    "type": "API Payment (Checkout)",
    "status": "success",
    "number_of_attempts": 1,
    "reference": "26262633201",
    "currency": "MWK",
    "amount": 1000,
    "charges": 40,
    "customization": {
      "title": "iPhone 10",
      "description": "Online order",
      "logo": null
    },
    "meta": null,
    "authorization": {
      "channel": "Card",
      "card_number": "230377******0408",
      "expiry": "2035-12",
      "brand": "MASTERCARD",
      "provider": null,
      "mobile_number": null,
      "completed_at": "2024-08-08T23:21:22.000000Z"
    },
    "customer": {
      "email": "yourmail@example.com",
      "first_name": "Mac",
      "last_name": "Phiri"
    },
    "logs": [\
      {\
        "type": "log",\
        "message": "Attempted to pay with card",\
        "created_at": "2024-08-08T23:20:59.000000Z"\
      },\
      {\
        "type": "log",\
        "message": "Processing and verification of card payment completed successfully.",\
        "created_at": "2024-08-08T23:21:22.000000Z"\
      }\
    ],
    "created_at": "2024-08-08T23:20:21.000000Z",
    "updated_at": "2024-08-08T23:20:21.000000Z"
  }
}
```

Updated9 days ago

* * *

Did this page help you?

Yes

No