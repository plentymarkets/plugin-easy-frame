<?php

namespace EasyFrame\Containers;

use Plenty\Plugin\Templates\Twig;

class EasyFrameContainerG
{
    public function call(Twig $twig):string
    {
        return $twig->render('EasyFrame::iFrameG');
    }
}