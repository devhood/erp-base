<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblproductcategory
 *
 * @ORM\Table(name="tblProductCategory", indexes={@ORM\Index(name="fk_tblProductCategory_tblProducts1_idx", columns={"intProductID"})})
 * @ORM\Entity
 */
class Tblproductcategory
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intCategoryID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intcategoryid;

    /**
     * @var string
     *
     * @ORM\Column(name="strCategoryName", type="string", length=45, nullable=false)
     */
    private $strcategoryname;

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
     * Get intcategoryid
     *
     * @return integer 
     */
    public function getIntcategoryid()
    {
        return $this->intcategoryid;
    }

    /**
     * Set strcategoryname
     *
     * @param string $strcategoryname
     * @return Tblproductcategory
     */
    public function setStrcategoryname($strcategoryname)
    {
        $this->strcategoryname = $strcategoryname;

        return $this;
    }

    /**
     * Get strcategoryname
     *
     * @return string 
     */
    public function getStrcategoryname()
    {
        return $this->strcategoryname;
    }

    /**
     * Set intproductid
     *
     * @param \Security\Entity\Tblproducts $intproductid
     * @return Tblproductcategory
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
