stripe-payments
===============

Stripe Payments is the simple and lightweight implementation of Stripe.com payment service for Opencart. Currently it is the only Stripe Opencart payment gateway extension that is free and open source. It's licensed under MIT license, therefore feel free to use it in any project or modify the source code.

<h3>Getting Started</h3>

<h4>Installation</h4>

The most convenient way to install the extension is with Composer, add following code to your _composer.json_ file:

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

If you don't use Composer you can just copy over _<b>admin</b>_, _<b>catalog</b>_ and _<b>vendor</b>_ folders to your Opencart root.

<h4>Setup</h4>

Activate the extension thru your Opencart Admin Panel.

The extension uses the Stripe API. You need to enter either Test or Live Stripe API keys on the extension settings page.

In order to obtain the Stripe API keys please login to your Stripe account dashboard, click on _Your Account_ in the top right corner of the page, then _Account Settings_.<br>
In the pop-up box click on the _API Keys_ tab. Both Test and Live keypairs will be provided for you.

Use Test keys to test the Opencart extension. When testing is done replace test keys to live keys in the extension settings page to start accepting credit card payments thru Stripe. 
