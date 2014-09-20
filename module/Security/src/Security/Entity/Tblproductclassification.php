<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblproductclassification
 *
 * @ORM\Table(name="tblProductClassification", uniqueConstraints={@ORM\UniqueConstraint(name="strProductClassification_UNIQUE", columns={"strProductClassification"})})
 * @ORM\Entity
 */
class Tblproductclassification
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intProductClassificationID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intproductclassificationid;

    /**
     * @var string
     *
     * @ORM\Column(name="strProductClassification", type="string", length=45, nullable=false)
     */
    private $strproductclassification;

    /**
     * @var integer
     *
     * @ORM\Column(name="intActive", type="integer", nullable=true)
     */
    private $intactive = '1';



    /**
     * Get intproductclassificationid
     *
     * @return integer 
     */
    public function getIntproductclassificationid()
    {
        return $this->intproductclassificationid;
    }

    /**
     * Set strproductclassification
     *
     * @param string $strproductclassification
     * @return Tblproductclassification
     */
    public function setStrproductclassification($strproductclassification)
    {
        $this->strproductclassification = $strproductclassification;

        return $this;
    }

    /**
     * Get strproductclassification
     *
     * @return string 
     */
    public function getStrproductclassification()
    {
        return $this->strproductclassification;
    }

    /**
     * Set intactive
     *
     * @param integer $intactive
     * @return Tblproductclassification
     */
    public function setIntactive($intactive)
    {
        $this->intactive = $intactive;

        return $this;
    }

    /**
     * Get intactive
     *
     * @return integer 
     */
    public function getIntactive()
    {
        return $this->intactive;
    }
}
