stripe-payments
===============

Simple and lightweight implementation of Stripe.com payment service into Opencart shopping cart.

<h3>Getting Started</h3>

<h5>Installation</h5>

Most convenient way is to install the extension with Composer:

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

If you don't use composer you can just copy over _admin_, _catalog_ and _vendor_ folders to your Opencart root.
