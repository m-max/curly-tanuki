<?php

namespace BibiBundle\Manager;

use BibiBundle\Document\Bibi;
use Doctrine\ODM\MongoDB\DocumentManager;

class BibiManager
{
    /** @var DocumentManager  */
    private $documentManager;

    public function __construct(DocumentManager $documentManager)
    {
        $this->documentManager = $documentManager;
    }

    public function getBibi($id)
    {
        $bibiRepository = $this->documentManager->getRepository("BibiBundle:Bibi");
        $bibi = $bibiRepository->findOneBy(array("ref" => $id));

        if(null === $bibi) {
            $bibi = new Bibi();
            $bibi->setRef($id);
            $this->documentManager->persist($bibi);
            $this->documentManager->flush();
        }

        return $bibi;
    }
}