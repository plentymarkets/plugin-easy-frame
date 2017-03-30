<?php

namespace EasyFrame\Containers;

use Plenty\Plugin\Templates\Twig;

class EasyFrameContainerI
{
    public function call(Twig $twig):string
    {
        return $twig->render('EasyFrame::iFrameI');
    }
}