<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblactionfieldoptionfilters
 *
 * @ORM\Table(name="tblActionFieldOptionFilters", indexes={@ORM\Index(name="fk_tblActionFieldOptionFilters_tblActionFieldOptions1_idx", columns={"intActionFieldOptionID"})})
 * @ORM\Entity
 */
class Tblactionfieldoptionfilters
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intActionFieldOptionFilterID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $intactionfieldoptionfilterid;

    /**
     * @var integer
     *
     * @ORM\Column(name="intAttributeID", type="integer", nullable=true)
     */
    private $intattributeid;

    /**
     * @var string
     *
     * @ORM\Column(name="strFilterValue", type="string", length=100, nullable=true)
     */
    private $strfiltervalue;

    /**
     * @var integer
     *
     * @ORM\Column(name="intStatus", type="integer", nullable=true)
     */
    private $intstatus = '1';

    /**
     * @var \Security\Entity\Tblactionfieldoptions
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Security\Entity\Tblactionfieldoptions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intActionFieldOptionID", referencedColumnName="intActionFieldOptionID")
     * })
     */
    private $intactionfieldoptionid;



    /**
     * Set intactionfieldoptionfilterid
     *
     * @param integer $intactionfieldoptionfilterid
     * @return Tblactionfieldoptionfilters
     */
    public function setIntactionfieldoptionfilterid($intactionfieldoptionfilterid)
    {
        $this->intactionfieldoptionfilterid = $intactionfieldoptionfilterid;

        return $this;
    }

    /**
     * Get intactionfieldoptionfilterid
     *
     * @return integer 
     */
    public function getIntactionfieldoptionfilterid()
    {
        return $this->intactionfieldoptionfilterid;
    }

    /**
     * Set intattributeid
     *
     * @param integer $intattributeid
     * @return Tblactionfieldoptionfilters
     */
    public function setIntattributeid($intattributeid)
    {
        $this->intattributeid = $intattributeid;

        return $this;
    }

    /**
     * Get intattributeid
     *
     * @return integer 
     */
    public function getIntattributeid()
    {
        return $this->intattributeid;
    }

    /**
     * Set strfiltervalue
     *
     * @param string $strfiltervalue
     * @return Tblactionfieldoptionfilters
     */
    public function setStrfiltervalue($strfiltervalue)
    {
        $this->strfiltervalue = $strfiltervalue;

        return $this;
    }

    /**
     * Get strfiltervalue
     *
     * @return string 
     */
    public function getStrfiltervalue()
    {
        return $this->strfiltervalue;
    }

    /**
     * Set intstatus
     *
     * @param integer $intstatus
     * @return Tblactionfieldoptionfilters
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

    /**
     * Set intactionfieldoptionid
     *
     * @param \Security\Entity\Tblactionfieldoptions $intactionfieldoptionid
     * @return Tblactionfieldoptionfilters
     */
    public function setIntactionfieldoptionid(\Security\Entity\Tblactionfieldoptions $intactionfieldoptionid)
    {
        $this->intactionfieldoptionid = $intactionfieldoptionid;

        return $this;
    }

    /**
     * Get intactionfieldoptionid
     *
     * @return \Security\Entity\Tblactionfieldoptions 
     */
    public function getIntactionfieldoptionid()
    {
        return $this->intactionfieldoptionid;
    }
}
