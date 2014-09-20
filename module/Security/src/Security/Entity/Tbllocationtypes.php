<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbllocationtypes
 *
 * @ORM\Table(name="tblLocationTypes", uniqueConstraints={@ORM\UniqueConstraint(name="strLocationType_UNIQUE", columns={"strLocationType"})})
 * @ORM\Entity
 */
class Tbllocationtypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intLocationTypeID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intlocationtypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="strLocationType", type="string", length=45, nullable=false)
     */
    private $strlocationtype;



    /**
     * Get intlocationtypeid
     *
     * @return integer 
     */
    public function getIntlocationtypeid()
    {
        return $this->intlocationtypeid;
    }

    /**
     * Set strlocationtype
     *
     * @param string $strlocationtype
     * @return Tbllocationtypes
     */
    public function setStrlocationtype($strlocationtype)
    {
        $this->strlocationtype = $strlocationtype;

        return $this;
    }

    /**
     * Get strlocationtype
     *
     * @return string 
     */
    public function getStrlocationtype()
    {
        return $this->strlocationtype;
    }
}
