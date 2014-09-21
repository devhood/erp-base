<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblcustomerstatus
 *
 * @ORM\Table(name="tblCustomerStatus", uniqueConstraints={@ORM\UniqueConstraint(name="strCustomerStatus_UNIQUE", columns={"strCustomerStatus"})})
 * @ORM\Entity
 */
class Tblcustomerstatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intCustomerStatusID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intcustomerstatusid;

    /**
     * @var string
     *
     * @ORM\Column(name="strCustomerStatus", type="string", length=45, nullable=false)
     */
    private $strcustomerstatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="intActive", type="integer", nullable=true)
     */
    private $intactive = '1';



    /**
     * Get intcustomerstatusid
     *
     * @return integer 
     */
    public function getIntcustomerstatusid()
    {
        return $this->intcustomerstatusid;
    }

    /**
     * Set strcustomerstatus
     *
     * @param string $strcustomerstatus
     * @return Tblcustomerstatus
     */
    public function setStrcustomerstatus($strcustomerstatus)
    {
        $this->strcustomerstatus = $strcustomerstatus;

        return $this;
    }

    /**
     * Get strcustomerstatus
     *
     * @return string 
     */
    public function getStrcustomerstatus()
    {
        return $this->strcustomerstatus;
    }

    /**
     * Set intactive
     *
     * @param integer $intactive
     * @return Tblcustomerstatus
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
