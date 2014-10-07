#!/bin/sh

rsync -Rarz admin ../../../
rsync -Rarz catalog ../../../
rm -Rf vendor