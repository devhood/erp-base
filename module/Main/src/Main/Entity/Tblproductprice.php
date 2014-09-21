<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblproductprice
 *
 * @ORM\Table(name="tblProductPrice", indexes={@ORM\Index(name="fk_tblProductPrice_tblPriceType1_idx", columns={"intPriceTypeID"}), @ORM\Index(name="fk_tblProductPrice_tblCurrency1_idx", columns={"intCurrencyID"}), @ORM\Index(name="fk_tblProductPrice_tblProducts1_idx", columns={"intProductID"})})
 * @ORM\Entity
 */
class Tblproductprice
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intProductPriceID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intproductpriceid;

    /**
     * @var float
     *
     * @ORM\Column(name="floatPrice", type="float", precision=10, scale=0, nullable=false)
     */
    private $floatprice;

    /**
     * @var integer
     *
     * @ORM\Column(name="intActive", type="integer", nullable=true)
     */
    private $intactive = '1';

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
     * @var \Main\Entity\Tblpricetype
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Tblpricetype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intPriceTypeID", referencedColumnName="intPriceTypeID")
     * })
     */
    private $intpricetypeid;

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
     * Get intproductpriceid
     *
     * @return integer 
     */
    public function getIntproductpriceid()
    {
        return $this->intproductpriceid;
    }

    /**
     * Set floatprice
     *
     * @param float $floatprice
     * @return Tblproductprice
     */
    public function setFloatprice($floatprice)
    {
        $this->floatprice = $floatprice;

        return $this;
    }

    /**
     * Get floatprice
     *
     * @return float 
     */
    public function getFloatprice()
    {
        return $this->floatprice;
    }

    /**
     * Set intactive
     *
     * @param integer $intactive
     * @return Tblproductprice
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

    /**
     * Set intcurrencyid
     *
     * @param \Main\Entity\Tblcurrency $intcurrencyid
     * @return Tblproductprice
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
     * Set intpricetypeid
     *
     * @param \Main\Entity\Tblpricetype $intpricetypeid
     * @return Tblproductprice
     */
    public function setIntpricetypeid(\Main\Entity\Tblpricetype $intpricetypeid = null)
    {
        $this->intpricetypeid = $intpricetypeid;

        return $this;
    }

    /**
     * Get intpricetypeid
     *
     * @return \Main\Entity\Tblpricetype 
     */
    public function getIntpricetypeid()
    {
        return $this->intpricetypeid;
    }

    /**
     * Set intproductid
     *
     * @param \Main\Entity\Tblproducts $intproductid
     * @return Tblproductprice
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
