<?php

namespace EasyFrame\Containers;

use Plenty\Plugin\Templates\Twig;

class EasyFrameContainerF
{
    public function call(Twig $twig):string
    {
        return $twig->render('EasyFrame::iFrameF');
    }
}