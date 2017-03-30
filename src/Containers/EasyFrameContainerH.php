<?php

namespace EasyFrame\Containers;

use Plenty\Plugin\Templates\Twig;

class EasyFrameContainerH
{
    public function call(Twig $twig):string
    {
        return $twig->render('EasyFrame::iFrameH');
    }
}