<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblcurrency
 *
 * @ORM\Table(name="tblCurrency", uniqueConstraints={@ORM\UniqueConstraint(name="strCurrency_UNIQUE", columns={"strCurrency"})})
 * @ORM\Entity
 */
class Tblcurrency
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intCurrencyID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intcurrencyid;

    /**
     * @var string
     *
     * @ORM\Column(name="strCurrency", type="string", length=45, nullable=false)
     */
    private $strcurrency;

    /**
     * @var integer
     *
     * @ORM\Column(name="inActive", type="integer", nullable=true)
     */
    private $inactive = '1';



    /**
     * Get intcurrencyid
     *
     * @return integer 
     */
    public function getIntcurrencyid()
    {
        return $this->intcurrencyid;
    }

    /**
     * Set strcurrency
     *
     * @param string $strcurrency
     * @return Tblcurrency
     */
    public function setStrcurrency($strcurrency)
    {
        $this->strcurrency = $strcurrency;

        return $this;
    }

    /**
     * Get strcurrency
     *
     * @return string 
     */
    public function getStrcurrency()
    {
        return $this->strcurrency;
    }

    /**
     * Set inactive
     *
     * @param integer $inactive
     * @return Tblcurrency
     */
    public function setInactive($inactive)
    {
        $this->inactive = $inactive;

        return $this;
    }

    /**
     * Get inactive
     *
     * @return integer 
     */
    public function getInactive()
    {
        return $this->inactive;
    }
}
