<?php

namespace EasyFrame\Containers;

use Plenty\Plugin\Templates\Twig;

class EasyFrameContainerD
{
    public function call(Twig $twig):string
    {
        return $twig->render('EasyFrame::iFrameD');
    }
}