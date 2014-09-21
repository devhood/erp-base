<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblcustomerterms
 *
 * @ORM\Table(name="tblCustomerTerms", indexes={@ORM\Index(name="fk_tblCustomerTerms_tblPaymentTerms1_idx", columns={"intPaymentTermID"}), @ORM\Index(name="fk_tblCustomerTerms_tblCustomers1_idx", columns={"intCustomerID"})})
 * @ORM\Entity
 */
class Tblcustomerterms
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intCustomerTermID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intcustomertermid;

    /**
     * @var \Main\Entity\Tblcustomers
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Tblcustomers")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intCustomerID", referencedColumnName="intCustomerID")
     * })
     */
    private $intcustomerid;

    /**
     * @var \Main\Entity\Tblpaymentterms
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Tblpaymentterms")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intPaymentTermID", referencedColumnName="intPaymentTermID")
     * })
     */
    private $intpaymenttermid;



    /**
     * Get intcustomertermid
     *
     * @return integer 
     */
    public function getIntcustomertermid()
    {
        return $this->intcustomertermid;
    }

    /**
     * Set intcustomerid
     *
     * @param \Main\Entity\Tblcustomers $intcustomerid
     * @return Tblcustomerterms
     */
    public function setIntcustomerid(\Main\Entity\Tblcustomers $intcustomerid = null)
    {
        $this->intcustomerid = $intcustomerid;

        return $this;
    }

    /**
     * Get intcustomerid
     *
     * @return \Main\Entity\Tblcustomers 
     */
    public function getIntcustomerid()
    {
        return $this->intcustomerid;
    }

    /**
     * Set intpaymenttermid
     *
     * @param \Main\Entity\Tblpaymentterms $intpaymenttermid
     * @return Tblcustomerterms
     */
    public function setIntpaymenttermid(\Main\Entity\Tblpaymentterms $intpaymenttermid = null)
    {
        $this->intpaymenttermid = $intpaymenttermid;

        return $this;
    }

    /**
     * Get intpaymenttermid
     *
     * @return \Main\Entity\Tblpaymentterms 
     */
    public function getIntpaymenttermid()
    {
        return $this->intpaymenttermid;
    }
}
