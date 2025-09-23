---
url: "https://developer.paychangu.com/docs/get-single-charge-details"
title: "Get Single Charge details"
---

This endpoint allows you to retrieve detailed information about a specific transaction. By providing the `Charge ID`, you can obtain comprehensive details about the transaction, including its status, amount, currency, and other relevant metadata.

Mobile MoneyBank

```rdmd-code lang-curl theme-light

curl -X GET "https://api.paychangu.com/mobile-money/payments/{{chargeId}}/details"
-H "Accept: application/json"
-H "Authorization: Bearer {secret_key}"
```

```rdmd-code lang-asp theme-light

curl --request GET \
     --url https://api.paychangu.com/direct-charge/transactions/{{charge_id}}/details \
     --header 'Authorization: Bearer {secret_key}' \
     --header 'accept: application/json'
```

## Verification response   [Skip link to Verification response](https://developer.paychangu.com/docs/get-single-charge-details\#verification-response)

Here's a sample verification response

Money moneyBank

```rdmd-code lang-json theme-light

{
  "status": "successful",
  "message": "Payment authorized and completed successfully.",
  "data": {
    "amount": 65,
    "charge_id": "TRAU28987693",
    "ref_id": "40725788795",
    "trans_id": "83822270-958d-4fb7-a370-ec132e8c5b06",
    "first_name": "Kim",
    "last_name": "Darry",
    "email": "mail@yourdomain.com",
    "status": "successful",
    "mobile": "+265992xxxx20",
    "attempts": 1,
    "currency": "MWK",
    "mode": "live",
    "created_at": "2024-06-14T15:43:25.000000Z",
    "completed_at": "2024-06-14T15:43:58.000000Z",
    "mobile_money": {
      "name": "Airtel Money",
      "ref_id": "20be6c20-adeb-4b5b-a7ba-0769820df4fb",
      "country": "Malawi"
    }
  }
```

```rdmd-code lang-c theme-light

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
        "payer_bank_uuid": "82310dd1-ec9b-4fe7-a32c-2f262ef08681",
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