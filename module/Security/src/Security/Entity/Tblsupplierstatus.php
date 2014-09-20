<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblsupplierstatus
 *
 * @ORM\Table(name="tblSupplierStatus", uniqueConstraints={@ORM\UniqueConstraint(name="strSupplierStatus_UNIQUE", columns={"strSupplierStatus"})})
 * @ORM\Entity
 */
class Tblsupplierstatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intSupplierStatusID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intsupplierstatusid;

    /**
     * @var string
     *
     * @ORM\Column(name="strSupplierStatus", type="string", length=45, nullable=false)
     */
    private $strsupplierstatus;

    /**
     * @var integer
     *
     * @ORM\Column(name="intActive", type="integer", nullable=true)
     */
    private $intactive = '1';



    /**
     * Get intsupplierstatusid
     *
     * @return integer 
     */
    public function getIntsupplierstatusid()
    {
        return $this->intsupplierstatusid;
    }

    /**
     * Set strsupplierstatus
     *
     * @param string $strsupplierstatus
     * @return Tblsupplierstatus
     */
    public function setStrsupplierstatus($strsupplierstatus)
    {
        $this->strsupplierstatus = $strsupplierstatus;

        return $this;
    }

    /**
     * Get strsupplierstatus
     *
     * @return string 
     */
    public function getStrsupplierstatus()
    {
        return $this->strsupplierstatus;
    }

    /**
     * Set intactive
     *
     * @param integer $intactive
     * @return Tblsupplierstatus
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
