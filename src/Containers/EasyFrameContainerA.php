<?php

namespace EasyFrame\Containers;

use Plenty\Plugin\Templates\Twig;

class EasyFrameContainerA
{
    public function call(Twig $twig):string
    {
        return $twig->render('EasyFrame::iFrameA');
    }
}