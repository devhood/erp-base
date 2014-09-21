<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblpersontype
 *
 * @ORM\Table(name="tblPersonType", uniqueConstraints={@ORM\UniqueConstraint(name="strPersonType_UNIQUE", columns={"strPersonType"})})
 * @ORM\Entity
 */
class Tblpersontype
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intPersonTypeID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intpersontypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="strPersonType", type="string", length=45, nullable=false)
     */
    private $strpersontype;

    /**
     * @var integer
     *
     * @ORM\Column(name="intActive", type="integer", nullable=true)
     */
    private $intactive = '1';



    /**
     * Get intpersontypeid
     *
     * @return integer 
     */
    public function getIntpersontypeid()
    {
        return $this->intpersontypeid;
    }

    /**
     * Set strpersontype
     *
     * @param string $strpersontype
     * @return Tblpersontype
     */
    public function setStrpersontype($strpersontype)
    {
        $this->strpersontype = $strpersontype;

        return $this;
    }

    /**
     * Get strpersontype
     *
     * @return string 
     */
    public function getStrpersontype()
    {
        return $this->strpersontype;
    }

    /**
     * Set intactive
     *
     * @param integer $intactive
     * @return Tblpersontype
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
