<?php

namespace ItemPropertiesTab\Providers;

use Plenty\Plugin\Templates\Twig;

class ItemPropertiesTabContentProvider
{
    public function call(Twig $twig): string
    {
        return $twig->render('ItemPropertiesTab::content.TabContent');
    }
}
