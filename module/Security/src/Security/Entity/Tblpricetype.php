<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblpricetype
 *
 * @ORM\Table(name="tblPriceType", uniqueConstraints={@ORM\UniqueConstraint(name="strPriceType_UNIQUE", columns={"strPriceType"})})
 * @ORM\Entity
 */
class Tblpricetype
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intPriceTypeID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intpricetypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="strPriceType", type="string", length=45, nullable=false)
     */
    private $strpricetype;

    /**
     * @var integer
     *
     * @ORM\Column(name="intActive", type="integer", nullable=true)
     */
    private $intactive = '1';



    /**
     * Get intpricetypeid
     *
     * @return integer 
     */
    public function getIntpricetypeid()
    {
        return $this->intpricetypeid;
    }

    /**
     * Set strpricetype
     *
     * @param string $strpricetype
     * @return Tblpricetype
     */
    public function setStrpricetype($strpricetype)
    {
        $this->strpricetype = $strpricetype;

        return $this;
    }

    /**
     * Get strpricetype
     *
     * @return string 
     */
    public function getStrpricetype()
    {
        return $this->strpricetype;
    }

    /**
     * Set intactive
     *
     * @param integer $intactive
     * @return Tblpricetype
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
