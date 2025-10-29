---
url: "https://developer.paychangu.com/docs/webhooks"
title: "Webhooks"
---

Webhooks play a crucial role in your payment integration. They enable PayChangu to inform you about events occurring in your account, such as a successful payment or a failed transaction.

A webhook URL is an endpoint on your server designed to receive notifications about these events. When an event takes place, a POST request will be made to that endpoint with a JSON body that includes details about the event, such as the event type and the related data.

## When to use webhooks   [Skip link to When to use webhooks](https://developer.paychangu.com/docs/webhooks\#when-to-use-webhooks)

Webhooks are compatible with all types of payment methods. By setting up a webhook, you allow us to inform you when payments are completed. Within your webhook endpoint, you can then:

- Email a customer when a payment fails.
- Update your order records when the status of a pending payment is updated to successful.

## Structure of a webhook payload   [Skip link to Structure of a webhook payload](https://developer.paychangu.com/docs/webhooks\#structure-of-a-webhook-payload)

Here are some sample webhook payloads for transfers and payments:

successful paymentAPI Payout

```rdmd-code lang-curl theme-light

{
  "event_type": "api.charge.payment",
  "currency": "MWK",
  "amount": 1000,
  "charge": "20",
  "mode": "test",
  "type": "Direct API Payment",
  "status": "success",
  "charge_id": "5d676fg",
  "reference": "71308131545",
  "authorization": {
    "channel": "Mobile Bank Transfer",
    "card_details": null,
    "bank_payment_details": {
      "payer_bank_uuid":"82310dd1-ec9b-4fe7-a32c-2f262ef08681"
      "payer_bank": "National Bank of Malawi",
      "payer_account_number": "10010000",
      "payer_account_name": "Jonathan Manda"
    },
    "mobile_money": null,
    "completed_at": "2025-01-15T19:53:18.000000Z"
  },
  "created_at": "2025-01-15T19:53:18.000000Z",
  "updated_at": "2025-01-15T19:53:18.000000Z"
}

```

```rdmd-code lang-asp theme-light

{
  "event_type":"api.payout",
  "charge_id":"4567tfuty",
  "reference":"54438943842",
  "first_name":null,
  "last_name":null,
  "email":null,
  "currency":"MWK",
  "amount":1000,
  "charge":"0",
  "mode":"live",
  "type":"API Payout",
  "status":"success",
  "recipient_account_details":{"bank_name":"National Bank of Malawi",
  "bank_uuid":"82310dd1-ec9b-4fe7-a32c-2f262ef08681",
  "account_name":"Nohaata Seven",
  "account_number":"1007534422"
  }
}

```

### Enabling webhooks   [Skip link to Enabling webhooks](https://developer.paychangu.com/docs/webhooks\#enabling-webhooks)

Here's how to set up a webhook on your PayChangu account:

- Log in to your [dashboard](https://dashboard.paychangu.com/manage/settings) and click on Settings
- Navigate to API & Webhooks to add your webhook URL
- Check all the boxes and save your settings

![](https://files.readme.io/568f0f4e66d2dfcc76f4c682a1a6d93349534e1803c084c9eeac48f4950ce78a-dash_keys.png)

## Implementing a Webhook   [Skip link to Implementing a Webhook](https://developer.paychangu.com/docs/webhooks\#implementing-a-webhook)

Creating a webhook endpoint on your server is similar to writing any other API endpoint, but there are a few important details to keep in mind:

## Authentication of Webhook Requests   [Skip link to Authentication of Webhook Requests](https://developer.paychangu.com/docs/webhooks\#authentication-of-webhook-requests)

To ensure that the request received on your webhook is actually coming from PayChangu, it is necessary to carry out a validation check on the incoming request. This is achieved through the “Signature” header, which is always present in the header of each webhook request. The value of the “Signature” header is a SHA-256 HMAC hash of the webhook payload sent to your server.

To verify the validity of the webhook (confirming it is from PayChangu), generate the SHA-256 HMAC hash of the webhook payload using your web secret key, which is generated on your dashboard. The resulting hash should then be compared with the value of the “Signature” header in the request headers. If the generated hash matches the “Signature” header value, the webhook is a valid request from PayChangu. Otherwise, it is an invalid request that has either been tampered with or originated from an untrusted source.

Example Code To Authenticate Webhook Request (PHP)

```rdmd-code lang-asp theme-light

function handleWebhookEvent(){
// retrieve request body
$payload = file_get_contents('php://input');
// retrieve all headers
$headers = getallheaders();
$computedSignature = hash_hmac('sha256', $payload, $webhookSecret);
/* change the value of webhookSecret to the webhook secret generated on your
merchant dashboard */
$webhookSecret = 'your_webhook_secret_key';
// generate hash of the webhook payload using the secret key
$computedSignature = hash_hmac('sha256', $payload, $webhookSecret);
// compare the computed signature of the incoming request with the value on the
"Signature" header
if($computedSignature != $headers['Signature']) {
/* request may have been tampered with or is likely from another source */
/* enter code to discard webhook */
}
else{
/* request is from PayChangu */
/* enter code to implement on the basis of the data on the webhook payload */
}
}
```

> ### 🔗  Authentication In JavaScript (Node.js
>
> [Click here](https://developer.paychangu.com/recipes/webhook-authentication-in-javascript-nodejs)

## Responding to Webhook Requests   [Skip link to Responding to Webhook Requests](https://developer.paychangu.com/docs/webhooks\#responding-to-webhook-requests)

To acknowledge receipt of a webhook, your endpoint must return a 200 HTTP status code. Any other response codes, including 3xx codes, will be considered a failure. The response body or headers do not matter to us.

> ### 📍
>
> If we do not receive a 200 status code (for example, if your server is unreachable), we will retry the webhook call three times, with a 30-minute interval between each attempt.

## Don't rely solely on webhooks   [Skip link to Don't rely solely on webhooks](https://developer.paychangu.com/docs/webhooks\#dont-rely-solely-on-webhooks)

Have a backup strategy in place in case your webhook endpoint fails. For instance, if your webhook endpoint is encountering server errors, you won’t be notified of new customer payments because the webhook requests will fail.

To mitigate this, we recommend setting up a background job that regularly polls for the status of any pending transactions using the [transaction verification endpoint](https://developer.paychangu.com/docs/transaction-verification), or for direct charge use [charge verification endpoint](https://developer.paychangu.com/reference/charge-verification-momo). For example, you could check every hour until a successful or failed response is returned.

## Always Re-query   [Skip link to Always Re-query](https://developer.paychangu.com/docs/webhooks\#always-re-query)

Whenever you receive a webhook notification, before providing the customer with any value, you should call our API again to verify the received details and ensure that the data has not been compromised.

For example, when you receive a successful payment notification, you can use our [transaction verification endpoint](https://developer.paychangu.com/docs/transaction-verification), or for direct charge use [charge verification endpoint](https://paychangu.readme.io/reference/charge-verification-momo). to confirm the status of the transaction before confirming the customer’s order.

Updated8 days ago

* * *

Did this page help you?

Yes

No