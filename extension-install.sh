#!/bin/sh

cd ./vendor/andyvr/stripe-payments
rsync -Rarz admin ../../../
rsync -Rarz catalog ../../../
rm -Rf vendor