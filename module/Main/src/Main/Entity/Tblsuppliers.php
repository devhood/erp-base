<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblsuppliers
 *
 * @ORM\Table(name="tblSuppliers", uniqueConstraints={@ORM\UniqueConstraint(name="intCompanyID_UNIQUE", columns={"intCompanyID"})}, indexes={@ORM\Index(name="fk_tblSuppliers_tblSupplierStatus1_idx", columns={"intSupplierStatusID"}), @ORM\Index(name="fk_tblSuppliers_tblPerson1_idx", columns={"intPersonID"})})
 * @ORM\Entity
 */
class Tblsuppliers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intSupplierID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intsupplierid;

    /**
     * @var \Main\Entity\Tblcompany
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Tblcompany")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intCompanyID", referencedColumnName="intCompanyID")
     * })
     */
    private $intcompanyid;

    /**
     * @var \Main\Entity\Tblperson
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Tblperson")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intPersonID", referencedColumnName="intPersonID")
     * })
     */
    private $intpersonid;

    /**
     * @var \Main\Entity\Tblsupplierstatus
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Tblsupplierstatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intSupplierStatusID", referencedColumnName="intSupplierStatusID")
     * })
     */
    private $intsupplierstatusid;



    /**
     * Get intsupplierid
     *
     * @return integer 
     */
    public function getIntsupplierid()
    {
        return $this->intsupplierid;
    }

    /**
     * Set intcompanyid
     *
     * @param \Main\Entity\Tblcompany $intcompanyid
     * @return Tblsuppliers
     */
    public function setIntcompanyid(\Main\Entity\Tblcompany $intcompanyid = null)
    {
        $this->intcompanyid = $intcompanyid;

        return $this;
    }

    /**
     * Get intcompanyid
     *
     * @return \Main\Entity\Tblcompany 
     */
    public function getIntcompanyid()
    {
        return $this->intcompanyid;
    }

    /**
     * Set intpersonid
     *
     * @param \Main\Entity\Tblperson $intpersonid
     * @return Tblsuppliers
     */
    public function setIntpersonid(\Main\Entity\Tblperson $intpersonid = null)
    {
        $this->intpersonid = $intpersonid;

        return $this;
    }

    /**
     * Get intpersonid
     *
     * @return \Main\Entity\Tblperson 
     */
    public function getIntpersonid()
    {
        return $this->intpersonid;
    }

    /**
     * Set intsupplierstatusid
     *
     * @param \Main\Entity\Tblsupplierstatus $intsupplierstatusid
     * @return Tblsuppliers
     */
    public function setIntsupplierstatusid(\Main\Entity\Tblsupplierstatus $intsupplierstatusid = null)
    {
        $this->intsupplierstatusid = $intsupplierstatusid;

        return $this;
    }

    /**
     * Get intsupplierstatusid
     *
     * @return \Main\Entity\Tblsupplierstatus 
     */
    public function getIntsupplierstatusid()
    {
        return $this->intsupplierstatusid;
    }
}
