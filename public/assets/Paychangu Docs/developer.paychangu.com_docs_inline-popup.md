---
url: "https://developer.paychangu.com/docs/inline-popup"
title: "Inline Checkout"
---

**An example**

Here's what an implementation of PayChangu Inline Checkout on a checkout page could look like:

![**Sample code** <https://codepen.io/paychangu/pen/JjqKWdr>](https://files.readme.io/f047fa7f46e08d55e7ebdc165641d3e45725f28b6869a136265b8c941708b654-checkout.gif)

**Image code** [https://codepen.io/paychangu/pen/JjqKWdr](https://codepen.io/paychangu/pen/JjqKWdr)

> ### 📃  Try it out
>
> Use test card **4242 4242 4242 4242** Airtel Money Number **990000000**

### Let’s break down the main functions of this code:   [Skip link to Let’s break down the main functions of this code:](https://developer.paychangu.com/docs/inline-popup\#lets-break-down-the-main-functions-of-this-code)

First, you include the PayChangu Inline library with a script tag:

JavaScript

```rdmd-code lang-javascript theme-light

<script src="https://in.paychangu.com/js/popup.js"></script>
```

Next up is the payment button. This is the button the customer clicks after they've reviewed their order and are ready to pay you. You'll attach an onclick event handler to this button that calls makePayment(), a custom JS function you're going to write.

JavaScript

```rdmd-code lang-javascript theme-light

 <div id="wrapper"></div>
<button type="button" onClick="makePayment()">Pay Now</button>
```

Finally, in the makePayment() function, you call the PayChanguCheckout() function with some custom parameters:

JavaScript

```rdmd-code lang-javascript theme-light

function makePayment(){
      PaychanguCheckout({
        "public_key": "pub-test-HYSBQpa5K91mmXMHrjhkmC6mAjObPJ2u",
        "tx_ref": '' + Math.floor((Math.random() * 1000000000) + 1),
        "amount": 1000,
        "currency": "MWK",
        "callback_url": "https://example.com/callbackurl",
        "return_url": "https://example.com/returnurl",
        "customer":{
          "email": "yourmail@example.com",
          "first_name":"Mac",
          "last_name":"Phiri",
        },
        "customization": {
          "title": "Test Payment",
          "description": "Payment Description",
        },
        "meta": {
          "uuid": "uuid",
          "response": "Response"
        }
      });
    }
    </script>
```

## Sample inline Implementation   [Skip link to Sample inline Implementation](https://developer.paychangu.com/docs/inline-popup\#sample-inline-implementation)

You can embed PayChangu on your page using our PayChanguCheckout() JavaScript function. The function responds to your request in accordance with your request configurations. If you specify a callback\_url in your request, the function will redirect your users to the provided callback URL when they complete the payment.

JavaScript

```rdmd-code lang-javascript theme-light

<form>
  <script src="https://in.paychangu.com/js/popup.js"></script>
  <div id="wrapper"></div>
  <button type="button" onClick="makePayment()">Pay Now</button>
  </form>
<script>
    function makePayment(){
      PaychanguCheckout({
        "public_key": "pub-test-HYSBQpa5K91mmXMHrjhkmC6mAjObPJ2u",
        "tx_ref": '' + Math.floor((Math.random() * 1000000000) + 1),
        "amount": 1000,
        "currency": "MWK",
        "callback_url": "https://example.com/callbackurl",
        "return_url": "https://example.com/returnurl",
        "customer":{
          "email": "yourmail@example.com",
          "first_name":"Mac",
          "last_name":"Phiri",
        },
        "customization": {
          "title": "Test Payment",
          "description": "Payment Description",
        },
        "meta": {
          "uuid": "uuid",
          "response": "Response"
        }
      });
    }
    </script>
```

## After the Payment   [Skip link to After the Payment](https://developer.paychangu.com/docs/inline-popup\#after-the-payment)

Four things will happen when a payment is successful:

- We’ll redirect you to your `callback_url` with status `tx_ref` after payment is complete.
- We’ll send you a webhook if you have it enabled. Learn more about webhooks and see examples [here](https://developer.paychangu.com/reference/webhooks).
- We’ll send an email receipt to your customer if the payment was successful (unless you’ve disabled this feature).
- We’ll send you an email notification (unless you’ve disabled this feature).

On your server, you should handle the redirect and always [verify the final state of the transaction](https://developer.paychangu.com/docs/transaction-verification).

## What if the Payment Fails?   [Skip link to What if the Payment Fails?](https://developer.paychangu.com/docs/inline-popup\#what-if-the-payment-fails)

If the payment attempt fails (for instance, due to insufficient funds), you don’t need to take any action. The payment page will remain open, allowing the customer to try again until the payment succeeds or they choose to cancel. Once the customer cancels or after multiple failed attempts, we will redirect to the `return_url` with the query parameters `tx_ref` and status of failed.

If you have webhooks enabled, we’ll send you a notification for each failed payment attempt. This can be useful if you want to reach out to customers who experienced issues with their payment. See our [webhooks guide](https://developer.paychangu.com/docs/webhooks) for an example.

Updated9 days ago

* * *

Did this page help you?

Yes

No