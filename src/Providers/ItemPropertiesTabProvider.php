<?php

namespace ItemPropertiesTab\Providers;

use Plenty\Plugin\Templates\Twig;

class ItemPropertiesTabProvider
{
    public function call(Twig $twig): string
    {
        return $twig->render('ItemPropertiesTab::content.Tab');
    }
}
