---
url: "https://developer.paychangu.com/docs/bank-transfer"
title: "Bank Transfer"
---

Direct charge via bank transfer enables you to create account details (including an account number and bank) instantly, allowing customers to make payments conveniently through instant bank transfers.

> ### 🚧  Bank Transfer Support
>
> Bank transfer is currently only supported for MWK transactions.

**The Process**

Collecting payments through a bank transfer charge is simple and hassle-free:

1. Use the bank [transfer charge endpoint](https://developer.paychangu.com/reference/charge-via-bank-transfer) to initiate a charge and generate unique account details for the customer to make their payment.
2. The customer makes a payment by transferring funds to the generated account.
3. We send a webhook to notify you once the payment is received.
4. You confirm the payment and proceed to fulfill the customer’s order.

![](https://files.readme.io/fafd89cbe9c63e357282a4af19794bd33327a75ef57503c923ad22e77320ab2d-PayChangu_.jpg)

**Initiating the Charge**

To initiate the charge, you'll call the [bank transfer charge endpoint](https://developer.paychangu.com/reference/charge-via-bank-transfer). You'll need to specify:

- charge\_id: A unique reference code that you'll generate for each transaction.
- amount: The amount to be charged for the transaction.
- currency: The currency to be used for the charge ( always use"MWK").
- payment\_method: The payment method use ( "mobile\_bank\_transfer" )

cURL

```rdmd-code lang-asp theme-light

curl --request POST \
     --url https://api.paychangu.com/direct-charge/payments/initialize \
     --header 'Authorization: Bearer sec-test-2Xhuyv2Plb24DQMG26CN2sDKYzyoFMEM' \
     --header 'accept: application/json' \
     --header 'content-type: application/json' \
     --data '
{
  "payment_method": "mobile_bank_transfer",
  "amount": "1000",
  "currency": "MWK",
  "charge_id": "PC-YR6D43446"
}
'
```

If the charge is created successfully, you'll get a successful response containing the generated account details.

Success

```rdmd-code lang-asp theme-light

{
  "status": "success",
  "message": "Payment initialized successfully.",
  "data": {
    "payment_account_details": {
      "bank_name": "Centenary Bank",
      "account_number": "2652455380",
      "account_name": "PayChangu",
      "account_expiration_timestamp": 1736805724
    },
    "transaction": {
      "amount": 1000,
      "charge_id": "PC-YR6D43446",
      "ref_id": "25274666909",
      "type": "Direct API Payment",
      "trace_id": "OiG8diXHAbw3Y7yz4sZwuY610GdIc1dy",
      "status": "pending",
      "mobile": "0",
      "attempts": 1,
      "currency": "MK",
      "mode": "sandbox",
      "created_at": "2025-01-13T21:02:04.000000Z",
      "event_type": "api.charge.payment",
      "transaction_charges": {
        "currency": "MK",
        "amount": "20"
      },
      "authorization": {
        "channel": "Mobile Bank Transfer",
      }
    }
  }
}
```

### Completing the Payment   [Skip link to Completing the Payment](https://developer.paychangu.com/docs/bank-transfer\#completing-the-payment)

The `data.payment_account_details ` object contains the account details for the transfer: the bank name ( `bank_name`), account number ( `account_number)` account expiration (" `account_expiration_timestamp`"), get the amount on `data.transaction` amount ( `amount`). Pass the details on to your customer, and they can make an instant bank transfer into the account (for instance, from their bank app or USSD using the **Instant transfer option** available on all Malawian banks ). The account expires in 1 hour from the time generated.

> ### ⚙️  Testing Tip
>
> In [Test Mode](https://developer.paychangu.com/docs/test), bank transfers are automatically approved and processed within a few seconds.

### Webhooks   [Skip link to Webhooks](https://developer.paychangu.com/docs/bank-transfer\#webhooks)

Your webhook endpoint can process the event and finalize the customer’s order. For assistance with configuring webhooks, refer to our [webhook setup guide](https://developer.paychangu.com/docs/webhooks).

Within your webhook handler, you can verify the payment and allocate the purchased items or services to your customers. For more information, check out our [Charge Verification guide](https://developer.paychangu.com/reference/single-transaction).

Updated9 days ago

* * *

Did this page help you?

Yes

No