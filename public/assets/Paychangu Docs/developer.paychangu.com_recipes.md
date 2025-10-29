---
url: "https://developer.paychangu.com/recipes"
title: "Recipes"
---

# Webhook Authentication In JavaScript (Node.js

This JavaScript file implements a secure webhook endpoint using Express.js. It validates incoming webhook requests from PayChangu to ensure they are genuine and untampered. The validation is done by comparing a computed hash of the request payload with the Signature header sent in the webhook request.

IN THIS RECIPE

1. Import required modules
2. Set Up App
3. Capture Raw Body

•••

1. Define Webhook Route
2. Extract and Validate
3. Process Webhook
4. Respond
5. Start Server

📨Open Recipe

JavaScript

```
xxxxxxxxxx
```

56

```
});
```

1

```
// Step 1: Import required modules
```

2

```
const crypto = require('crypto');
```

3

```
const express = require('express');
```

4

```
​
```

5

```
// Step 2: Initialize Express app
```

6

```
const app = express();
```

7

```
// Set your webhook secret key (replace with your actual secret key)
```

8

```
const webhookSecret = 'your_webhook_secret_key';
```

9

```
​
```

10

```
// Step 3: Middleware to capture raw body for validation
```

11

```
app.use(express.raw({ type: 'application/json' }));
```

12

```
​
```

13

```
// Step 4: Webhook endpoint to handle requests
```

14

```
app.post('/webhook', (req, res) => {
```

15

```
    try {
```

16

```
        // Step 5: Extract the raw request body
```

17

```
        const payload = req.body.toString();
```

18

```
​
```

19

```
        // Step 6: Retrieve the "Signature" header
```

20

```
        const signature = req.headers['signature'];
```

21

```
​
```

22

```
        // Step 7: Check if the "Signature" header is missing
```

23

```
        if (!signature) {
```

24

```
            res.status(400).send('Missing signature header');
```

25

```
            return;
```

26

```
        }
```

📨

Webhook Authentication In JavaScript (Node.js

This JavaScript file implements a secure webhook endpoint using Express.js. It validates incoming webhook requests from PayChangu to ensure they are genuine and untampered. The validation is done by comparing a computed hash of the request payload with the Signature header sent in the webhook request.

8 Steps

Open Recipe

Steps to Authenticate Webhook Requests in PHP

This PHP script provides a secure implementation to handle and authenticate webhook requests from PayChangu. It ensures that the incoming request originates from PayChangu by verifying the payload’s integrity using an HMAC SHA-256 hash. The verification process prevents unauthorized or tampered requests from being processed.

9 Steps

Open Recipe

🦉

# Recipe Title

Recipe Description

​x

```

```

1{"success":true}

#### Title