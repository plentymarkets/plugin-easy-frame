<?php

namespace EasyFrame\Containers;

use Plenty\Plugin\Templates\Twig;

class EasyFrameContainerE
{
    public function call(Twig $twig):string
    {
        return $twig->render('EasyFrame::iFrameE');
    }
}