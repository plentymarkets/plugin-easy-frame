<?php

namespace EasyFrame\Containers;

use Plenty\Plugin\Templates\Twig;

class EasyFrameContainerB
{
    public function call(Twig $twig):string
    {
        return $twig->render('EasyFrame::iFrameB');
    }
}