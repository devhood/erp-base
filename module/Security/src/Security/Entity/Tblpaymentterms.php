<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblpaymentterms
 *
 * @ORM\Table(name="tblPaymentTerms", uniqueConstraints={@ORM\UniqueConstraint(name="strPaymentTermName_UNIQUE", columns={"strPaymentTerm"})})
 * @ORM\Entity
 */
class Tblpaymentterms
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intPaymentTermID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intpaymenttermid;

    /**
     * @var string
     *
     * @ORM\Column(name="strPaymentTerm", type="string", length=45, nullable=false)
     */
    private $strpaymentterm;

    /**
     * @var integer
     *
     * @ORM\Column(name="intValueInDays", type="integer", nullable=true)
     */
    private $intvalueindays;

    /**
     * @var integer
     *
     * @ORM\Column(name="intActive", type="integer", nullable=true)
     */
    private $intactive = '1';



    /**
     * Get intpaymenttermid
     *
     * @return integer 
     */
    public function getIntpaymenttermid()
    {
        return $this->intpaymenttermid;
    }

    /**
     * Set strpaymentterm
     *
     * @param string $strpaymentterm
     * @return Tblpaymentterms
     */
    public function setStrpaymentterm($strpaymentterm)
    {
        $this->strpaymentterm = $strpaymentterm;

        return $this;
    }

    /**
     * Get strpaymentterm
     *
     * @return string 
     */
    public function getStrpaymentterm()
    {
        return $this->strpaymentterm;
    }

    /**
     * Set intvalueindays
     *
     * @param integer $intvalueindays
     * @return Tblpaymentterms
     */
    public function setIntvalueindays($intvalueindays)
    {
        $this->intvalueindays = $intvalueindays;

        return $this;
    }

    /**
     * Get intvalueindays
     *
     * @return integer 
     */
    public function getIntvalueindays()
    {
        return $this->intvalueindays;
    }

    /**
     * Set intactive
     *
     * @param integer $intactive
     * @return Tblpaymentterms
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
