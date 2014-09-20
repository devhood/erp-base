<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblrealmtypes
 *
 * @ORM\Table(name="tblRealmTypes")
 * @ORM\Entity
 */
class Tblrealmtypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intRealmTypeID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intrealmtypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="strRealmType", type="string", length=45, nullable=true)
     */
    private $strrealmtype;

    /**
     * @var integer
     *
     * @ORM\Column(name="intStatus", type="integer", nullable=true)
     */
    private $intstatus = '1';



    /**
     * Get intrealmtypeid
     *
     * @return integer 
     */
    public function getIntrealmtypeid()
    {
        return $this->intrealmtypeid;
    }

    /**
     * Set strrealmtype
     *
     * @param string $strrealmtype
     * @return Tblrealmtypes
     */
    public function setStrrealmtype($strrealmtype)
    {
        $this->strrealmtype = $strrealmtype;

        return $this;
    }

    /**
     * Get strrealmtype
     *
     * @return string 
     */
    public function getStrrealmtype()
    {
        return $this->strrealmtype;
    }

    /**
     * Set intstatus
     *
     * @param integer $intstatus
     * @return Tblrealmtypes
     */
    public function setIntstatus($intstatus)
    {
        $this->intstatus = $intstatus;

        return $this;
    }

    /**
     * Get intstatus
     *
     * @return integer 
     */
    public function getIntstatus()
    {
        return $this->intstatus;
    }
}
