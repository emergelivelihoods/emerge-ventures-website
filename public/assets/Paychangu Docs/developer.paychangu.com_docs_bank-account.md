---
url: "https://developer.paychangu.com/docs/bank-account"
title: "Bank Account"
---

> ### 📱  Mobile Money
>
> You can also use this endpoint to send to mobile money. Instead of the account number, you enter the mobile money number using the Airtel Money or TNM Mpamba [bank\_uuid](https://developer.paychangu.com/reference/get-banks).

### Initiating Bank Transfer   [Skip link to Initiating Bank Transfer](https://developer.paychangu.com/docs/bank-account\#initiating-bank-transfer)

To complete a bank transfer, adhere to these steps:

- Gather the necessary information: Typically, you only need the recipient’s details. However, for specific transfers, the sender’s details may also be required.
- Obtain the necessary bank uuid: Send a request to our [bank’s endpoints](https://developer.paychangu.com/reference/get-banks) to retrieve the correct bank uuid required for the transfer.
- Submit the details to the “ [Bank Payout](https://developer.paychangu.com/reference/bank-payout)” endpoint. Refer to the example requests in the following section for guidance.

### Prerequisites   [Skip link to Prerequisites](https://developer.paychangu.com/docs/bank-account\#prerequisites)

1. Finalize your KYC process and confirm that your account is fully approved for transactions.
2. Activate this feature by submitting a request through [email](mailto:hie@paychangu.com) or our [support form.](https://paychangu.com/contact-sales)

Bank Payout Sample Request

```rdmd-code lang-javascript theme-light

curl --request POST \
     --url https://api.paychangu.com/direct-charge/payouts/initialize \
     --header 'accept: application/json' \
     --header 'content-type: application/json' \
     --data '
{
  "payout_method": "bank_transfer",
  "bank_uuid": "82310dd1-ec9b-4fe7-a32c-2f262ef08681",
  "amount": "10000",
  "charge_id": "PC-TR2344567534",
  "bank_account_name": "Madalitso Kamwendo",
  "bank_account_number": "1001000010"
}
'
```

> ### 🗒️  Sample in other languages check [here](https://developer.paychangu.com/reference/bank-payout).

You'll get a response like this:

200 OK

```rdmd-code lang-asp theme-light

{
    "status": "success",
    "message": "Payout request submitted successfully.",
    "data": {
        "transaction": {
            "charge_id": "PC-TR2344567534",
            "ref_id": "97073812876",
            "trans_id": null,
            "currency": "MK",
            "amount":10000,
            "first_name": null,
            "last_name": null,
            "email": null,
            "type": "API Payout",
            "trace_id": null,
            "status": "pending",
            "mobile": "0",
            "attempts": 1,
            "mode": "live",
            "created_at": "2025-01-23T17:03:28.000000Z",
            "completed_at": null,
            "event_type": "api.payout",
            "transaction_charges": {
                "currency": "MK",
                "amount": "0"
            },
            "recipient_account_details": {
                "bank_uuid": "82310dd1-ec9b-4fe7-a32c-2f262ef08681",
                "bank_name": "National Bank of Malawi",
                "account_name": "Madalitso Kamwendo",
                "account_number": "1001000010"
            }
        }
    }
}
```

Verify your transfer status, there are many ways to do this:

1. You can get the transfer status using the [transfer status endpoint](https://developer.paychangu.com/reference/single-bank-payout-details).
2. If [webhooks](https://developer.paychangu.com/docs/webhooks) are enabled on your dashboard, check the transfer webhooks to verify the transaction status.

Updated9 days ago

* * *

Did this page help you?

Yes

No