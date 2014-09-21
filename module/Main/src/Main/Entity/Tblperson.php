<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblperson
 *
 * @ORM\Table(name="tblPerson", uniqueConstraints={@ORM\UniqueConstraint(name="strPersonEmail_UNIQUE", columns={"strPersonEmail"})}, indexes={@ORM\Index(name="fk_tblPerson_tblPersonType1_idx", columns={"intPersonTypeID"})})
 * @ORM\Entity
 */
class Tblperson
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intPersonID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intpersonid;

    /**
     * @var string
     *
     * @ORM\Column(name="strPersonName", type="string", length=45, nullable=true)
     */
    private $strpersonname;

    /**
     * @var string
     *
     * @ORM\Column(name="strPersonEmail", type="string", length=45, nullable=false)
     */
    private $strpersonemail;

    /**
     * @var string
     *
     * @ORM\Column(name="strPersonPhone", type="string", length=45, nullable=true)
     */
    private $strpersonphone;

    /**
     * @var integer
     *
     * @ORM\Column(name="intActive", type="integer", nullable=true)
     */
    private $intactive = '1';

    /**
     * @var \Main\Entity\Tblpersontype
     *
     * @ORM\ManyToOne(targetEntity="Main\Entity\Tblpersontype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intPersonTypeID", referencedColumnName="intPersonTypeID")
     * })
     */
    private $intpersontypeid;



    /**
     * Get intpersonid
     *
     * @return integer 
     */
    public function getIntpersonid()
    {
        return $this->intpersonid;
    }

    /**
     * Set strpersonname
     *
     * @param string $strpersonname
     * @return Tblperson
     */
    public function setStrpersonname($strpersonname)
    {
        $this->strpersonname = $strpersonname;

        return $this;
    }

    /**
     * Get strpersonname
     *
     * @return string 
     */
    public function getStrpersonname()
    {
        return $this->strpersonname;
    }

    /**
     * Set strpersonemail
     *
     * @param string $strpersonemail
     * @return Tblperson
     */
    public function setStrpersonemail($strpersonemail)
    {
        $this->strpersonemail = $strpersonemail;

        return $this;
    }

    /**
     * Get strpersonemail
     *
     * @return string 
     */
    public function getStrpersonemail()
    {
        return $this->strpersonemail;
    }

    /**
     * Set strpersonphone
     *
     * @param string $strpersonphone
     * @return Tblperson
     */
    public function setStrpersonphone($strpersonphone)
    {
        $this->strpersonphone = $strpersonphone;

        return $this;
    }

    /**
     * Get strpersonphone
     *
     * @return string 
     */
    public function getStrpersonphone()
    {
        return $this->strpersonphone;
    }

    /**
     * Set intactive
     *
     * @param integer $intactive
     * @return Tblperson
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
     * Set intpersontypeid
     *
     * @param \Main\Entity\Tblpersontype $intpersontypeid
     * @return Tblperson
     */
    public function setIntpersontypeid(\Main\Entity\Tblpersontype $intpersontypeid = null)
    {
        $this->intpersontypeid = $intpersontypeid;

        return $this;
    }

    /**
     * Get intpersontypeid
     *
     * @return \Main\Entity\Tblpersontype 
     */
    public function getIntpersontypeid()
    {
        return $this->intpersontypeid;
    }
}
