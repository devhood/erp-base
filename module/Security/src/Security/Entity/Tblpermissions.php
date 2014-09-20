<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblpermissions
 *
 * @ORM\Table(name="tblPermissions")
 * @ORM\Entity
 */
class Tblpermissions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intPermissionID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intpermissionid;

    /**
     * @var string
     *
     * @ORM\Column(name="strModule", type="string", length=45, nullable=true)
     */
    private $strmodule;

    /**
     * @var string
     *
     * @ORM\Column(name="strController", type="string", length=45, nullable=true)
     */
    private $strcontroller;

    /**
     * @var string
     *
     * @ORM\Column(name="strAction", type="string", length=45, nullable=true)
     */
    private $straction;



    /**
     * Get intpermissionid
     *
     * @return integer 
     */
    public function getIntpermissionid()
    {
        return $this->intpermissionid;
    }

    /**
     * Set strmodule
     *
     * @param string $strmodule
     * @return Tblpermissions
     */
    public function setStrmodule($strmodule)
    {
        $this->strmodule = $strmodule;

        return $this;
    }

    /**
     * Get strmodule
     *
     * @return string 
     */
    public function getStrmodule()
    {
        return $this->strmodule;
    }

    /**
     * Set strcontroller
     *
     * @param string $strcontroller
     * @return Tblpermissions
     */
    public function setStrcontroller($strcontroller)
    {
        $this->strcontroller = $strcontroller;

        return $this;
    }

    /**
     * Get strcontroller
     *
     * @return string 
     */
    public function getStrcontroller()
    {
        return $this->strcontroller;
    }

    /**
     * Set straction
     *
     * @param string $straction
     * @return Tblpermissions
     */
    public function setStraction($straction)
    {
        $this->straction = $straction;

        return $this;
    }

    /**
     * Get straction
     *
     * @return string 
     */
    public function getStraction()
    {
        return $this->straction;
    }
}
