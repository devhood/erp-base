<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblactionfieldoptions
 *
 * @ORM\Table(name="tblActionFieldOptions", indexes={@ORM\Index(name="fk_tblActionFieldOptions_tblObjects1_idx", columns={"intObjectID"}), @ORM\Index(name="fk_tblActionFieldOptions_tblActionFields1_idx", columns={"intActionFieldID"})})
 * @ORM\Entity
 */
class Tblactionfieldoptions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intActionFieldOptionID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $intactionfieldoptionid;

    /**
     * @var integer
     *
     * @ORM\Column(name="intStatus", type="integer", nullable=true)
     */
    private $intstatus = '1';

    /**
     * @var \Security\Entity\Tblactionfields
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Security\Entity\Tblactionfields")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intActionFieldID", referencedColumnName="intActionFieldID")
     * })
     */
    private $intactionfieldid;

    /**
     * @var \Security\Entity\Tblobjects
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Security\Entity\Tblobjects")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intObjectID", referencedColumnName="intObjectID")
     * })
     */
    private $intobjectid;



    /**
     * Set intactionfieldoptionid
     *
     * @param integer $intactionfieldoptionid
     * @return Tblactionfieldoptions
     */
    public function setIntactionfieldoptionid($intactionfieldoptionid)
    {
        $this->intactionfieldoptionid = $intactionfieldoptionid;

        return $this;
    }

    /**
     * Get intactionfieldoptionid
     *
     * @return integer 
     */
    public function getIntactionfieldoptionid()
    {
        return $this->intactionfieldoptionid;
    }

    /**
     * Set intstatus
     *
     * @param integer $intstatus
     * @return Tblactionfieldoptions
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
     * Set intactionfieldid
     *
     * @param \Security\Entity\Tblactionfields $intactionfieldid
     * @return Tblactionfieldoptions
     */
    public function setIntactionfieldid(\Security\Entity\Tblactionfields $intactionfieldid)
    {
        $this->intactionfieldid = $intactionfieldid;

        return $this;
    }

    /**
     * Get intactionfieldid
     *
     * @return \Security\Entity\Tblactionfields 
     */
    public function getIntactionfieldid()
    {
        return $this->intactionfieldid;
    }

    /**
     * Set intobjectid
     *
     * @param \Security\Entity\Tblobjects $intobjectid
     * @return Tblactionfieldoptions
     */
    public function setIntobjectid(\Security\Entity\Tblobjects $intobjectid)
    {
        $this->intobjectid = $intobjectid;

        return $this;
    }

    /**
     * Get intobjectid
     *
     * @return \Security\Entity\Tblobjects 
     */
    public function getIntobjectid()
    {
        return $this->intobjectid;
    }
}
