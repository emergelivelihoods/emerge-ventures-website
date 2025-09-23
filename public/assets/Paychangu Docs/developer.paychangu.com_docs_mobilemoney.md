---
url: "https://developer.paychangu.com/docs/mobilemoney"
title: "Mobile Money"
---

This documentation provides an overview of how you can collect payments from your customers through mobile money, without redirecting them to a separate page.

**The Process**

Collecting payments through Mobile Money is simple and hassle-free:

1. You call our [API to create a charge](https://developer.paychangu.com/reference/charge-mobile-money) and pass in the customer's mobile number.
2. Your customer completes the payment by authorizing it with their mobile money provider.
3. We send a webhook to notify you once the payment is received.
4. You confirm the payment and proceed to fulfill the customer’s order.

Your webhook endpoint can process the event and finalize the customer’s order. For assistance with configuring webhooks, refer to our [webhook setup guide](https://developer.paychangu.com/docs/webhooks).

Within your webhook handler, you can verify the payment and allocate the purchased items or services to your customers. For more information, check out our [Charge Verification guide](https://developer.paychangu.com/docs/charge-verification).

Updated9 days ago

* * *

Did this page help you?

Yes

No