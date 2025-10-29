---
url: "https://developer.paychangu.com/docs/introduction-2"
title: "Introduction"
---

You can initiate transfers (or payouts) either individually or in bulk directly from your PayChangu available balance. Transfers can be made to bank accounts and mobile money wallets.

This guide outlines key details you need to understand about transfers. Start here, then explore specific examples for various types of transfers on their dedicated pages.

[**Mobile Money**\\
\\
Airtel Money](https://developer.paychangu.com/docs/mobile-money) [**Bank Accounts**\\
\\
All Malawian banks and mobile money](https://developer.paychangu.com/docs/bank-account)

* * *

## How Transfers Work   [Skip link to How Transfers Work](https://developer.paychangu.com/docs/introduction-2\#how-transfers-work)

You can initiate a transfer either directly from your [dashboard](https://in.paychangu.coml/) or by leveraging the transfer APIs.

To make a transfer via API, send a POST request to the create transfer endpoint. The specific details may vary depending on the type of transfer, but you’ll generally need to provide:

- `amount`
- `currency`
- `bank_uuid` identify a bank or mobile money
- `bank_account_number` used for Bank transfers or mobile money numbers.
- `bank_account_name`
- `charge_id`

You can also specify:

`email`, `first_name`, `last_name` for mobile money transfers, the `mobile_money_operator_ref_id` is required. You can retrieve the mobile operator ID by using the [get operator id endpoint](https://developer.paychangu.com/reference/supported-momo-operators). for banks `bank_uuid` is required works for also mobile money you can retrieve the `uuid` using [Get banks endpoint](https://developer.paychangu.com/reference/get-banks).

Updated9 days ago

* * *

Did this page help you?

Yes

No