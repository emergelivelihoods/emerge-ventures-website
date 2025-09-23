---
url: "https://developer.paychangu.com/docs/mobile-money"
title: "Mobile Money"
---

> ### 🚧  NOTICE
>
> This endpoint only support Mobile Money if your planning on sending to both mobile money and banks then use the [bank method](https://developer.paychangu.com/docs/bank-account) it support both Airtel Money, TNM Mpamba and Banks.

Mobile money transfers are different from bank transfers because they use different systems, but both send money instantly, so the recipient gets it right away.

### Mobile Money Sample Request   [Skip link to Mobile Money Sample Request](https://developer.paychangu.com/docs/mobile-money\#mobile-money-sample-request)

**Initiating Bank Transfer**

To complete a Mobile Money transfer, adhere to these steps:

- Obtain the necessary Get Operator ID. Send a request to [get the operators](https://developer.paychangu.com/reference/get-operator)’ endpoints to retrieve the correct bank operator ID required for the transfer.

cURL

```rdmd-code lang-asp theme-light

curl --request POST \
     --url https://api.paychangu.com/mobile-money/payments/initialize \
     --header 'accept: application/json' \
     --header 'content-type: application/json' \
     --data '
{
  "mobile_money_operator_ref_id": "20be6c20-adeb-4b5b-a7ba-0769820df4fb",
  "mobile": "0990000000",
  "amount": "1000",
  "charge_id": "PC-64FU65435"
}
'
```

> ### 🗒️  Sample in other languages check [here](https://developer.paychangu.com/reference/charge-mobile-money).

### Handling the Response   [Skip link to Handling the Response](https://developer.paychangu.com/docs/mobile-money\#handling-the-response)

After initiating a transfer, you will receive a response like this:

200 OK

```rdmd-code lang-asp theme-light

"status": "success",
  "message": "Payment initiated successfully.",
  "data": {
    "amount": 1000,
    "charge_id": "PC-64FU65435",
    "ref_id": "95652259752",
    "trans_id": "f28e10a6-5d71-4499-9ac3-fdce917fae98",
    "first_name": null,
    "last_name": null,
    "email": null,
    "status": "pending",
    "mobile": "+265990xxxx00",
    "attempts": 2,
    "currency": "MWK",
    "mode": "live",
    "created_at": "2024-06-15T00:21:33.000000Z",
    "completed_at": null,
    "mobile_money": {
      "name": "Airtel Money",
      "ref_id": "20be6c20-adeb-4b5b-a7ba-0769820df4fb",
      "country": "Malawi"
    }
  }
}
```

There are some important details here:

`status.data.status` is the status of the transfer. `status.data.charge_id` is the ID of the transfer. You can use this ID to [fetch details](https://developer.paychangu.com/reference/single-charge-details) about this transfer later.

Updated8 days ago

* * *

Did this page help you?

Yes

No