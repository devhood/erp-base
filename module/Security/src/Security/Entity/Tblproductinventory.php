<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblproductinventory
 *
 * @ORM\Table(name="tblProductInventory", indexes={@ORM\Index(name="fk_tblProductInventory_tblInventoryLocation1_idx", columns={"intLocationID"}), @ORM\Index(name="fk_tblProductInventory_tblProductCondition1_idx", columns={"intConditionID"}), @ORM\Index(name="fk_tblProductInventory_tblProducts1_idx", columns={"intProductID"})})
 * @ORM\Entity
 */
class Tblproductinventory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intInventoryID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intinventoryid;

    /**
     * @var integer
     *
     * @ORM\Column(name="intReserveStock", type="integer", nullable=true)
     */
    private $intreservestock;

    /**
     * @var integer
     *
     * @ORM\Column(name="intActualStock", type="integer", nullable=true)
     */
    private $intactualstock;

    /**
     * @var \Security\Entity\Tblinventorylocation
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tblinventorylocation")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intLocationID", referencedColumnName="intLocationID")
     * })
     */
    private $intlocationid;

    /**
     * @var \Security\Entity\Tblproductcondition
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tblproductcondition")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intConditionID", referencedColumnName="intConditionID")
     * })
     */
    private $intconditionid;

    /**
     * @var \Security\Entity\Tblproducts
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tblproducts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intProductID", referencedColumnName="intProductID")
     * })
     */
    private $intproductid;



    /**
     * Get intinventoryid
     *
     * @return integer 
     */
    public function getIntinventoryid()
    {
        return $this->intinventoryid;
    }

    /**
     * Set intreservestock
     *
     * @param integer $intreservestock
     * @return Tblproductinventory
     */
    public function setIntreservestock($intreservestock)
    {
        $this->intreservestock = $intreservestock;

        return $this;
    }

    /**
     * Get intreservestock
     *
     * @return integer 
     */
    public function getIntreservestock()
    {
        return $this->intreservestock;
    }

    /**
     * Set intactualstock
     *
     * @param integer $intactualstock
     * @return Tblproductinventory
     */
    public function setIntactualstock($intactualstock)
    {
        $this->intactualstock = $intactualstock;

        return $this;
    }

    /**
     * Get intactualstock
     *
     * @return integer 
     */
    public function getIntactualstock()
    {
        return $this->intactualstock;
    }

    /**
     * Set intlocationid
     *
     * @param \Security\Entity\Tblinventorylocation $intlocationid
     * @return Tblproductinventory
     */
    public function setIntlocationid(\Security\Entity\Tblinventorylocation $intlocationid = null)
    {
        $this->intlocationid = $intlocationid;

        return $this;
    }

    /**
     * Get intlocationid
     *
     * @return \Security\Entity\Tblinventorylocation 
     */
    public function getIntlocationid()
    {
        return $this->intlocationid;
    }

    /**
     * Set intconditionid
     *
     * @param \Security\Entity\Tblproductcondition $intconditionid
     * @return Tblproductinventory
     */
    public function setIntconditionid(\Security\Entity\Tblproductcondition $intconditionid = null)
    {
        $this->intconditionid = $intconditionid;

        return $this;
    }

    /**
     * Get intconditionid
     *
     * @return \Security\Entity\Tblproductcondition 
     */
    public function getIntconditionid()
    {
        return $this->intconditionid;
    }

    /**
     * Set intproductid
     *
     * @param \Security\Entity\Tblproducts $intproductid
     * @return Tblproductinventory
     */
    public function setIntproductid(\Security\Entity\Tblproducts $intproductid = null)
    {
        $this->intproductid = $intproductid;

        return $this;
    }

    /**
     * Get intproductid
     *
     * @return \Security\Entity\Tblproducts 
     */
    public function getIntproductid()
    {
        return $this->intproductid;
    }
}
