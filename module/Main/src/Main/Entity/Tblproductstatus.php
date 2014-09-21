<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblproductstatus
 *
 * @ORM\Table(name="tblProductStatus", uniqueConstraints={@ORM\UniqueConstraint(name="strProductStatus_UNIQUE", columns={"strProductStatus"})})
 * @ORM\Entity
 */
class Tblproductstatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intProductStatusID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intproductstatusid;

    /**
     * @var string
     *
     * @ORM\Column(name="strProductStatus", type="string", length=45, nullable=false)
     */
    private $strproductstatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="intActive", type="integer", nullable=true)
     */
    private $intactive = '1';



    /**
     * Get intproductstatusid
     *
     * @return integer 
     */
    public function getIntproductstatusid()
    {
        return $this->intproductstatusid;
    }

    /**
     * Set strproductstatus
     *
     * @param string $strproductstatus
     * @return Tblproductstatus
     */
    public function setStrproductstatus($strproductstatus)
    {
        $this->strproductstatus = $strproductstatus;

        return $this;
    }

    /**
     * Get strproductstatus
     *
     * @return string 
     */
    public function getStrproductstatus()
    {
        return $this->strproductstatus;
    }

    /**
     * Set intactive
     *
     * @param integer $intactive
     * @return Tblproductstatus
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
