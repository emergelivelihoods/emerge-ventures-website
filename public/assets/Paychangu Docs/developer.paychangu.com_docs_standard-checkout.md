---
url: "https://developer.paychangu.com/docs/standard-checkout"
title: "Standard Checkout"
---

PayChangu provides access to your resources through RESTful endpoints, allowing you to test the API. You can also access your test API credentials and keys from [here](https://in.paychangu.com/user/api).

You can also **simulate** our Standard Checkout and explore integrations using various programming languages by [clicking here](https://developer.paychangu.com/reference/initiate-transaction).

## HTTP Request Sample   [Skip link to HTTP Request Sample](https://developer.paychangu.com/docs/standard-checkout\#http-request-sample)

We provide cURL request samples so you can quickly test each endpoint on your terminal or command line. Need a quick how-to for making cURL requests? Just use an HTTP client such as Postman, like the rest of us!

## Requests and Responses   [Skip link to Requests and Responses](https://developer.paychangu.com/docs/standard-checkout\#requests-and-responses)

Both request body data and response data are formatted as JSON. Content type for responses are always of the type `application/JSON`. You can use the PayChangu API in [test mode](https://developer.paychangu.com/docs/test), which does not affect your live data. The [API key](https://developer.paychangu.com/docs/api-keys) you use to authenticate the request determines whether the request is live mode or test mode

## Initiate Transaction   [Skip link to Initiate Transaction](https://developer.paychangu.com/docs/standard-checkout\#initiate-transaction)

| Parameter | Required | Description |
| --- | --- | --- |
| secret\_key string | Yes | This is important for creating payment links |
| callback\_url url | Yes | This is your IPN URL, which is essential for receiving payment notifications. Successful transactions will redirect to this URL after payment. The {tx\_ref} is returned, so you don’t need to include it in your URL. |
| return\_url url | Yes | Once the customer cancels or after multiple failed attempts, we will redirect to the return\_url with the query parameters tx\_ref and status of failed. |
| tx\_ref string | Optional | Your transaction reference. This MUST be unique for every transaction. |
| first\_name string | Optional | This is the first name of your customer. |
| last\_name string | Optional | This is the last name of your customer. |
| email string | Optional | This is the email address of your customer. Transaction notification will be sent to this email address |
| currency string | Yes | Currency to charge in. \[ 'MWK', 'USD' \] |
| amount int32 | Yes | Amount to charge the customer. |
| customization array | Optional | {<br>"title":"Title of payment",<br>"description":"Description of payment",<br>} |
| meta array | Optional | You can pass on extra information here. |

cURL

```rdmd-code lang-curl theme-light

curl -X POST "https://api.paychangu.com/payment"
-H "Accept: application/json"
-H "Authorization: Bearer {secret_key}"
-d "{
    "amount": "100",
    "currency": "MWK",
    "email": "yourmail@example.com",
    "first_name":"Kelvin",
    "last_name":"Banda",
    "callback_url": "https://webhook.site/9d0b00ba-9a69-44fa-a43d-a82c33c36fdc",
    "return_url": "https://webhook.site",
    "tx_ref": '' + Math.floor((Math.random() * 1000000000) + 1),
    "customization": {
      "title": "Test Payment",
      "description": "Payment Description",
    },
    "meta": {
      "uuid": "uuid",
      "response": "Response"
    }
}"
```

Explore integrations using various programming languages by [clicking here](https://developer.paychangu.com/reference/initiate-transaction).

**Response**

JSON

```rdmd-code lang-json theme-light

{
  "message": "Hosted payment session generated successfully.",
  "status": "success",
  "data": {
    "event": "checkout.session:created",
    "checkout_url": "https://checkout.paychangu.com/923677185321",
    "data": {
      "tx_ref": "ae041eae-6abd-4602-a949-56fbd65c29fe",
      "currency": "MWK",
      "amount": 100,
      "mode": "live",
      "status": "pending"
    }
  }
}
```

When you provide the user with the returned link, they will be directed to our checkout page to complete the payment, as shown below.

![](https://files.readme.io/bc8c92b60dc54684730bc53e93dcf817445a557af9dcc3714a327303ad1e4764-Screenshot_2025-01-01_at_8.41.55_pm.png)

**What happens when the user completes the transaction on the page?**

When the user enters their payment details, PayChangu will validate and then charge the card. Once the charge is completed, we will:

1. Call your specified redirect\_url and post the response to you. We will also append your transaction ID (transaction\_id), transaction reference (tx\_ref), and the transaction status.

2. Call your webhook URL (if one is set).

3. Send an email to you and your customer on the successful payment.


Before providing value to the customer, please make a server-side call to our transaction verification endpoint to confirm the status of the transaction.

## After the Payment   [Skip link to After the Payment](https://developer.paychangu.com/docs/standard-checkout\#after-the-payment)

Four things will happen when a payment is successful:

- We’ll redirect you to your `callback_url` with status `tx_ref` after payment is complete.
- We’ll send you a webhook if you have it enabled. Learn more about webhooks and see examples [here](https://developer.paychangu.com/docs/webhooks).
- If the payment was successful, we’ll email a receipt to your customer (unless you’ve disabled this feature).
- We’ll send you an email notification (unless you’ve disabled this feature).

On your server, you should handle the redirect and always [verify the final state of the transaction](https://developer.paychangu.com/docs/webhooks).

## What if the Payment Fails?   [Skip link to What if the Payment Fails?](https://developer.paychangu.com/docs/standard-checkout\#what-if-the-payment-fails)

If the payment attempt fails (for instance, due to insufficient funds), you don’t need to take any action. The payment page will remain open, allowing the customer to try again until the payment succeeds or they choose to cancel. Once the customer cancels or after multiple failed attempts, we will redirect to the `return_url` with the query parameters `tx_ref` and status of failed.

If you have webhooks enabled, we’ll send you a notification for each failed payment attempt. This can be useful if you want to reach out to customers who experienced issues with their payment. See our [webhooks guide](https://developer.paychangu.com/docs/webhooks) for an example.

Updated9 days ago

* * *

Did this page help you?

Yes

No