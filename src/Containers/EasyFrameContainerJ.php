<?php

namespace EasyFrame\Containers;

use Plenty\Plugin\Templates\Twig;

class EasyFrameContainerJ
{
    public function call(Twig $twig):string
    {
        return $twig->render('EasyFrame::iFrameJ');
    }
}