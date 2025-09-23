---
url: "https://developer.paychangu.com/docs/charge-verification"
title: "Charge Verification"
---

To verify a Mobile Money or Bank Transfer payment, use the Charge Verification [Mobile Money endpoint](https://developer.paychangu.com/reference/verify-direct-charge-status) or [Bank endpoint](https://developer.paychangu.com/reference/single-transaction), passing in the charge ID in the URL. You can get the charge ID from the `chargeId` field that's present in the response you get after creating a transaction, or in the [webhook](https://developer.paychangu.com/reference/webhooks) payload for any transaction.

Below is a sample code of how to implement server-side validation

Mobile MoneyBANK

```rdmd-code lang-asp theme-light

curl -X GET "https://api.paychangu.com/mobile-money/payments/{{chargeId}}/verify"
-H "Accept: application/json"
-H "Authorization: Bearer {secret_key}"
```

```rdmd-code lang-asp theme-light

curl --request GET \
     --url https://api.paychangu.com/direct-charge/transactions/{{charge_id}}/details \
     --header 'Authorization: Bearer {secret_key}' \
     --header 'accept: application/json'
```

## Verification response   [Skip link to Verification response](https://developer.paychangu.com/docs/charge-verification\#verification-response)

Here's a sample verification response

Mobile money success responseBank success response

```rdmd-code lang-json theme-light

{
  "status": "successful",
  "message": "Payment authorized and completed successfully.",
  "data": {
    "amount": 100,
    "charge_id": "ksni",
    "ref_id": "29263119322",
    "trans_id": null,
    "first_name": "Kim",
    "last_name": "Banda",
    "email": "yourmail@gmail.com",
    "type": "Direct API Payment",
    "status": "success",
    "mobile": "+265993xxxx40",
    "attempts": 1,
    "currency": "MK",
    "mode": "Live",
    "created_at": "2024-08-18T14:45:11.000000Z",
    "completed_at": "2024-08-18T14:52:44.000000Z",
    "event_type": "api.charge.payment",
    "mobile_money": {
      "name": "Airtel Money",
      "ref_id": "20be6c20-adeb-4b5b-a7ba-0769820df4fb",
      "country": "Malawi"
    },
    "transaction_charges": {
      "currency": "MK",
      "amount": "4"
    },
    "authorization": {
      "channel": "Mobile Money",
      "card_number": null,
      "expiry": null,
      "brand": null,
      "provider": "Airtel Money",
      "mobile_number": null,
      "completed_at": "2024-08-18T14:52:44.000000Z"
    },
    "logs": []
  }
}
```

```rdmd-code lang-asp theme-light

{
  "status": "success",
  "message": "Transaction retrieved successfully.",
  "data": {
    "transaction": {
      "charge_id": "PTC12383",
      "ref_id": "75513659949",
      "trans_id": null,
      "currency": "MK",
      "amount": 1000,
      "first_name": null,
      "last_name": null,
      "email": null,
      "type": "Direct API Payment",
      "trace_id": "v0atWHs0NLEN3vbTAL4DKFLm59dVHuRM",
      "status": "success",
      "mobile": "0",
      "attempts": 1,
      "mode": "live",
      "created_at": "2025-02-17T21:14:35.000000Z",
      "completed_at": "2025-02-17T21:18:40.000000Z",
      "event_type": "api.charge.payment",
      "transaction_charges": {
        "currency": "MK",
        "amount": "20"
      },
      "authorization": {
        "channel": "Mobile Bank Transfer",
        "card_number": null,
        "expiry": null,
        "brand": null,
        "provider": null,
        "mobile_number": null,
        "payer_bank_uuid":"82310dd1-ec9b-4fe7-a32c-2f262ef08681",
        "payer_bank": "National Bank of Malawi",
        "payer_account_number": "1007134421",
        "payer_account_name": "Jonathan Manda",
        "completed_at": "2025-02-17T21:18:40.000000Z"
      },
      "logs": [\
        {\
          "type": "log",\
          "message": "Attempted to pay with bank transfer",\
          "created_at": "2025-02-17T21:14:35.000000Z"\
        },\
        {\
          "type": "log",\
          "message": "Bank transfer payment processed successfully.",\
          "created_at": "2025-02-17T21:18:40.000000Z"\
        }\
      ]
    }
  }
}
```

Updated9 days ago

* * *

Did this page help you?

Yes

No