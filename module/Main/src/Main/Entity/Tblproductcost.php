<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblproductcost
 *
 * @ORM\Table(name="tblProductCost", indexes={@ORM\Index(name="fk_tblProductCost_tblProducts1_idx", columns={"intProductID"}), @ORM\Index(name="fk_tblProductCost_tblCurrency1_idx", columns={"intCurrencyID"})})
 * @ORM\Entity
 */
class Tblproductcost
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intProductCostID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intproductcostid;

    /**
     * @var string
     *
     * @ORM\Column(name="actual_landed_cost", type="string", length=45, nullable=true)
     */
    private $actualLandedCost;

    /**
     * @var string
     *
     * @ORM\Column(name="purchase_cost", type="string", length=45, nullable=true)
     */
    private $purchaseCost;

    /**
     * @var \Main\Entity\Tblcurrency
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Tblcurrency")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intCurrencyID", referencedColumnName="intCurrencyID")
     * })
     */
    private $intcurrencyid;

    /**
     * @var \Main\Entity\Tblproducts
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Tblproducts")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intProductID", referencedColumnName="intProductID")
     * })
     */
    private $intproductid;



    /**
     * Get intproductcostid
     *
     * @return integer 
     */
    public function getIntproductcostid()
    {
        return $this->intproductcostid;
    }

    /**
     * Set actualLandedCost
     *
     * @param string $actualLandedCost
     * @return Tblproductcost
     */
    public function setActualLandedCost($actualLandedCost)
    {
        $this->actualLandedCost = $actualLandedCost;

        return $this;
    }

    /**
     * Get actualLandedCost
     *
     * @return string 
     */
    public function getActualLandedCost()
    {
        return $this->actualLandedCost;
    }

    /**
     * Set purchaseCost
     *
     * @param string $purchaseCost
     * @return Tblproductcost
     */
    public function setPurchaseCost($purchaseCost)
    {
        $this->purchaseCost = $purchaseCost;

        return $this;
    }

    /**
     * Get purchaseCost
     *
     * @return string 
     */
    public function getPurchaseCost()
    {
        return $this->purchaseCost;
    }

    /**
     * Set intcurrencyid
     *
     * @param \Main\Entity\Tblcurrency $intcurrencyid
     * @return Tblproductcost
     */
    public function setIntcurrencyid(\Main\Entity\Tblcurrency $intcurrencyid = null)
    {
        $this->intcurrencyid = $intcurrencyid;

        return $this;
    }

    /**
     * Get intcurrencyid
     *
     * @return \Main\Entity\Tblcurrency 
     */
    public function getIntcurrencyid()
    {
        return $this->intcurrencyid;
    }

    /**
     * Set intproductid
     *
     * @param \Main\Entity\Tblproducts $intproductid
     * @return Tblproductcost
     */
    public function setIntproductid(\Main\Entity\Tblproducts $intproductid = null)
    {
        $this->intproductid = $intproductid;

        return $this;
    }

    /**
     * Get intproductid
     *
     * @return \Main\Entity\Tblproducts 
     */
    public function getIntproductid()
    {
        return $this->intproductid;
    }
}
