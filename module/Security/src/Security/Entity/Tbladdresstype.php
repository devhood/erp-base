<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbladdresstype
 *
 * @ORM\Table(name="tblAddressType")
 * @ORM\Entity
 */
class Tbladdresstype
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intAddressTypeID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intaddresstypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="strAddressType", type="string", length=45, nullable=true)
     */
    private $straddresstype;

    /**
     * @var integer
     *
     * @ORM\Column(name="intActive", type="integer", nullable=true)
     */
    private $intactive = '1';



    /**
     * Get intaddresstypeid
     *
     * @return integer 
     */
    public function getIntaddresstypeid()
    {
        return $this->intaddresstypeid;
    }

    /**
     * Set straddresstype
     *
     * @param string $straddresstype
     * @return Tbladdresstype
     */
    public function setStraddresstype($straddresstype)
    {
        $this->straddresstype = $straddresstype;

        return $this;
    }

    /**
     * Get straddresstype
     *
     * @return string 
     */
    public function getStraddresstype()
    {
        return $this->straddresstype;
    }

    /**
     * Set intactive
     *
     * @param integer $intactive
     * @return Tbladdresstype
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
