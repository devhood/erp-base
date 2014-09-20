<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblcustomertype
 *
 * @ORM\Table(name="tblCustomerType", uniqueConstraints={@ORM\UniqueConstraint(name="intCustomerType_UNIQUE", columns={"strCustomerType"})})
 * @ORM\Entity
 */
class Tblcustomertype
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intCustomerTypeID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intcustomertypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="strCustomerType", type="string", length=45, nullable=false)
     */
    private $strcustomertype;

    /**
     * @var integer
     *
     * @ORM\Column(name="intActive", type="integer", nullable=true)
     */
    private $intactive = '1';



    /**
     * Get intcustomertypeid
     *
     * @return integer 
     */
    public function getIntcustomertypeid()
    {
        return $this->intcustomertypeid;
    }

    /**
     * Set strcustomertype
     *
     * @param string $strcustomertype
     * @return Tblcustomertype
     */
    public function setStrcustomertype($strcustomertype)
    {
        $this->strcustomertype = $strcustomertype;

        return $this;
    }

    /**
     * Get strcustomertype
     *
     * @return string 
     */
    public function getStrcustomertype()
    {
        return $this->strcustomertype;
    }

    /**
     * Set intactive
     *
     * @param integer $intactive
     * @return Tblcustomertype
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
