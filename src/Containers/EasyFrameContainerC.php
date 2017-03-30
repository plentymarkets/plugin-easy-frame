<?php

namespace EasyFrame\Containers;

use Plenty\Plugin\Templates\Twig;

class EasyFrameContainerC
{
    public function call(Twig $twig):string
    {
        return $twig->render('EasyFrame::iFrameC');
    }
}