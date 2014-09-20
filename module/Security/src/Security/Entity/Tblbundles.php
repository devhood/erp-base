<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblbundles
 *
 * @ORM\Table(name="tblBundles", indexes={@ORM\Index(name="fk_tblBundles_tblProducts1_idx", columns={"intProductID"})})
 * @ORM\Entity
 */
class Tblbundles
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intBundleID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intbundleid;

    /**
     * @var integer
     *
     * @ORM\Column(name="intChildID", type="integer", nullable=true)
     */
    private $intchildid;

    /**
     * @var integer
     *
     * @ORM\Column(name="intQuantity", type="integer", nullable=true)
     */
    private $intquantity;

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
     * Get intbundleid
     *
     * @return integer 
     */
    public function getIntbundleid()
    {
        return $this->intbundleid;
    }

    /**
     * Set intchildid
     *
     * @param integer $intchildid
     * @return Tblbundles
     */
    public function setIntchildid($intchildid)
    {
        $this->intchildid = $intchildid;

        return $this;
    }

    /**
     * Get intchildid
     *
     * @return integer 
     */
    public function getIntchildid()
    {
        return $this->intchildid;
    }

    /**
     * Set intquantity
     *
     * @param integer $intquantity
     * @return Tblbundles
     */
    public function setIntquantity($intquantity)
    {
        $this->intquantity = $intquantity;

        return $this;
    }

    /**
     * Get intquantity
     *
     * @return integer 
     */
    public function getIntquantity()
    {
        return $this->intquantity;
    }

    /**
     * Set intproductid
     *
     * @param \Security\Entity\Tblproducts $intproductid
     * @return Tblbundles
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
