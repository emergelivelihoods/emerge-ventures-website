---
url: "https://developer.paychangu.com/docs/test"
title: "Testing"
---

**Test mode**

Test mode allows you to work with test credit cards and mobile money numbers, create test products and prices, and simulate transactions to ensure your integration functions as expected. This feature is designed to help you detect and resolve any bugs or issues in your PayChangu implementation before going live with real payments.

Once you’ve created a PayChangu account, you’ll find a set of test [API keys](https://developer.paychangu.com/docs/api-keys) in your PayChangu Dashboard [setting page](https://dashboard.paychangu.com/manage/settings). These keys allow you to generate and retrieve simulated data by interacting with the PayChangu API. To begin accepting real payments, you’ll need to submit your compliance to activate your account, switch off test mode, and update your integration with live [API keys](https://developer.paychangu.com/docs/api-keys).

## Test Cards   [Skip link to Test Cards](https://developer.paychangu.com/docs/test\#test-cards)

To simulate a payment via card , use test cards from the following list.

| Brand | Card Number | Type | CVC | Date |
| --- | --- | --- | --- | --- |
| VISA | 4242 4242 4242 4242 | 3DS SUCCESS | Any 3 digits | Any future date |
| VISA | 4000 0000 0000 3220 | 3DS TIMEOUT | Any 3 digits | Any future date |
| VISA | 4000 0000 0000 9995 | 3DS INSUFFICIENT | Any 3 digits | Any future date |
| VISA | 4000 0000 0000 0002 | 3DS DECLINED | Any 3 digits | Any future date |
| MASTERCARD | 5555 5555 5555 4444 | 3DS SUCCESS | Any 3 digits | Any future date |
| MASTERCARD | 5200 0000 0000 0008 | 3DS ERROR | Any 3 digits | Any future date |

**OTPs**

For 3DS, use the following OTP: `1234`

## Mobile Money Test Number   [Skip link to Mobile Money Test Number](https://developer.paychangu.com/docs/test\#mobile-money-test-number)

| Provider | Mobile Number( Without 0 ) | Type |
| --- | --- | --- |
| Airtel Money | 990000000 | SUCCESS |
| Airtel Money | 990000001 | FAILED |
| TNM Mpamba | 899817565 | SUCCESS |
| TNM Mpamba | 899817566 | FAILED |

Updated8 days ago

* * *

Did this page help you?

Yes

No