<?php

namespace Andyvr;

use Composer\Script\Event;

class StripePayments
{
    public static function postPackageInstall(Event $event)
    {
        $this::installExtension($event);
    }

    public static function postPackageUpdate(Event $event)
    {
        $this::installExtension($event);
    }

    private static function installExtension(Event $event)
    {
        echo $event->getOperation()->getPackage();
    }
}