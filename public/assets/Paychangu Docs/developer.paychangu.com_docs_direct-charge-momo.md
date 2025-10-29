---
url: "https://developer.paychangu.com/docs/direct-charge-momo"
title: "Direct Charge"
---

For developers seeking greater flexibility and control, our Direct Charge option is the perfect solution. With our APIs, you can handle customer payment information directly while designing your own UI and payment flow. This empowers you to create a fully customized experience that aligns with your app’s unique needs and branding.

> ### 📘  Direct Charge
>
> Direct Charge requires separate integrations for each payment method you wish to support, which can be complex. It’s best suited for scenarios where your customers rely on a specific payment method, such as mobile money or bank transfer payments.

## How does Direct Charge Work?   [Skip link to How does Direct Charge Work?](https://developer.paychangu.com/docs/direct-charge-momo\#how-does-direct-charge-work)

Direct Charge involves three main steps:

1. **Initiating the Payment:** Send transaction and customer payment details to the relevant charge endpoints to begin the process.
2. **Authorize the charge:** The customer completes authorization with their payment provider, such as a [Mobile Money](https://developer.paychangu.com/docs/mobilemoney) provider or [Bank](https://developer.paychangu.com/docs/bank-transfer), to finalize the charge.
3. **Verifying the Payment**: As a precaution, use our [Webhooks](https://developer.paychangu.com/docs/webhooks) or [Charge verify transaction](https://developer.paychangu.com/docs/charge-verification) endpoint to confirm the payment’s success before providing any value to the customer.

The steps may vary depending on the payment method. For example, card payments might require multiple authorization stages. Each method’s guide provides specific details.

**Direct Charge Options**

Here are the different methods available for Direct Charge, each with unique requirements and authorization processes. Explore detailed guides for each type:

1. **[Mobile Money](https://developer.paychangu.com/docs/mobilemoney)**
2. **[Bank Transfer](https://developer.paychangu.com/docs/bank-transfer)**
3. **Card**

Updated9 days ago

* * *

Did this page help you?

Yes

No