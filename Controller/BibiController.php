<?php

namespace BibiBundle\Controller;

use BibiBundle\Manager\BibiManager;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class BibiController extends Controller
{
    /**
     * @param int $bibiId
     */
    public function loadBibiAction($id)
    {
        /** @var BibiManager $bibiManager */
        $bibiManager = $this->get('bibi.manager.bibi');

        $bibi = $bibiManager->getBibi($id);
        die(var_dump($bibi));
    }
}