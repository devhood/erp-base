<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblcompanytype
 *
 * @ORM\Table(name="tblCompanyType", uniqueConstraints={@ORM\UniqueConstraint(name="strCompanyType_UNIQUE", columns={"strCompanyType"})})
 * @ORM\Entity
 */
class Tblcompanytype
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intCompanyTypeID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intcompanytypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="strCompanyType", type="string", length=45, nullable=false)
     */
    private $strcompanytype;

    /**
     * @var integer
     *
     * @ORM\Column(name="intActive", type="integer", nullable=true)
     */
    private $intactive = '1';



    /**
     * Get intcompanytypeid
     *
     * @return integer 
     */
    public function getIntcompanytypeid()
    {
        return $this->intcompanytypeid;
    }

    /**
     * Set strcompanytype
     *
     * @param string $strcompanytype
     * @return Tblcompanytype
     */
    public function setStrcompanytype($strcompanytype)
    {
        $this->strcompanytype = $strcompanytype;

        return $this;
    }

    /**
     * Get strcompanytype
     *
     * @return string 
     */
    public function getStrcompanytype()
    {
        return $this->strcompanytype;
    }

    /**
     * Set intactive
     *
     * @param integer $intactive
     * @return Tblcompanytype
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
