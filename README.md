stripe-payments
===============

Stripe Payments is the simple and lightweight implementation of Stripe.com payment service for Opencart. Currently it is the only Stripe Opencart payment gateway extension that is free and open source. It's licensed under MIT license, therefore feel free to use it in any project or modify the code.

<h3>Getting Started</h3>

<h5>Installation</h5>

Most convenient way is to install the extension with Composer, add following to your _composer.json_ file:

```
{
  "require": {
    "andyvr/stripe-payments": "@dev"
  },
  "scripts": {
    "post-install-cmd": [
      "sh ./vendor/andyvr/stripe-payments/extension-install.sh"
    ]
   }
}
```

If you don't use composer you can just copy over _<b>admin</b>_, _<b>catalog</b>_ and _<b>vendor</b>_ folders to your Opencart root.
