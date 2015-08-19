<?php

namespace BibiBundle\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as ODM;

/**
 * Class Bibi
 *
 * @package BibiBundle\Document
 *
 * @ODM\Document()
 */
class Bibi
{
    /**
     * @var integer
     *
     * @ODM\Id
     */
    private $id;

    /**
     * @var integer
     *
     * @ODM\Int
     * @ODM\UniqueIndex(order="asc")
     */
    private $ref;

    public function getId()
    {
        return $this->id;
    }

    public function getRef()
    {
        return $this->ref;
    }

    public function setRef($ref)
    {
        $this->ref = $ref;

        return $this;
    }
}