<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblactionfields
 *
 * @ORM\Table(name="tblActionFields", indexes={@ORM\Index(name="fk_tblActionFields_tblAttributes1_idx", columns={"intAttributeID"}), @ORM\Index(name="fk_tblActionFields_tblActions1_idx", columns={"intActionID"}), @ORM\Index(name="fk_tblActionFields_tblDisplayTypes1_idx", columns={"intDisplayTypeID"}), @ORM\Index(name="fk_tblActionFields_tblActionFieldType1_idx", columns={"intActionFieldTypeID"})})
 * @ORM\Entity
 */
class Tblactionfields
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intActionFieldID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $intactionfieldid;

    /**
     * @var integer
     *
     * @ORM\Column(name="intOrder", type="integer", nullable=true)
     */
    private $intorder;

    /**
     * @var integer
     *
     * @ORM\Column(name="intGroup", type="integer", nullable=true)
     */
    private $intgroup;

    /**
     * @var integer
     *
     * @ORM\Column(name="intStatus", type="integer", nullable=true)
     */
    private $intstatus = '1';

    /**
     * @var \Security\Entity\Tblactionfieldtype
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Security\Entity\Tblactionfieldtype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intActionFieldTypeID", referencedColumnName="intActionFieldTypeID")
     * })
     */
    private $intactionfieldtypeid;

    /**
     * @var \Security\Entity\Tblactions
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Security\Entity\Tblactions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intActionID", referencedColumnName="intActionID")
     * })
     */
    private $intactionid;

    /**
     * @var \Security\Entity\Tblattributes
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Security\Entity\Tblattributes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intAttributeID", referencedColumnName="intAttributeID")
     * })
     */
    private $intattributeid;

    /**
     * @var \Security\Entity\Tbldisplaytypes
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Security\Entity\Tbldisplaytypes")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intDisplayTypeID", referencedColumnName="intDisplayTypeID")
     * })
     */
    private $intdisplaytypeid;



    /**
     * Set intactionfieldid
     *
     * @param integer $intactionfieldid
     * @return Tblactionfields
     */
    public function setIntactionfieldid($intactionfieldid)
    {
        $this->intactionfieldid = $intactionfieldid;

        return $this;
    }

    /**
     * Get intactionfieldid
     *
     * @return integer 
     */
    public function getIntactionfieldid()
    {
        return $this->intactionfieldid;
    }

    /**
     * Set intorder
     *
     * @param integer $intorder
     * @return Tblactionfields
     */
    public function setIntorder($intorder)
    {
        $this->intorder = $intorder;

        return $this;
    }

    /**
     * Get intorder
     *
     * @return integer 
     */
    public function getIntorder()
    {
        return $this->intorder;
    }

    /**
     * Set intgroup
     *
     * @param integer $intgroup
     * @return Tblactionfields
     */
    public function setIntgroup($intgroup)
    {
        $this->intgroup = $intgroup;

        return $this;
    }

    /**
     * Get intgroup
     *
     * @return integer 
     */
    public function getIntgroup()
    {
        return $this->intgroup;
    }

    /**
     * Set intstatus
     *
     * @param integer $intstatus
     * @return Tblactionfields
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
     * Set intactionfieldtypeid
     *
     * @param \Security\Entity\Tblactionfieldtype $intactionfieldtypeid
     * @return Tblactionfields
     */
    public function setIntactionfieldtypeid(\Security\Entity\Tblactionfieldtype $intactionfieldtypeid)
    {
        $this->intactionfieldtypeid = $intactionfieldtypeid;

        return $this;
    }

    /**
     * Get intactionfieldtypeid
     *
     * @return \Security\Entity\Tblactionfieldtype 
     */
    public function getIntactionfieldtypeid()
    {
        return $this->intactionfieldtypeid;
    }

    /**
     * Set intactionid
     *
     * @param \Security\Entity\Tblactions $intactionid
     * @return Tblactionfields
     */
    public function setIntactionid(\Security\Entity\Tblactions $intactionid)
    {
        $this->intactionid = $intactionid;

        return $this;
    }

    /**
     * Get intactionid
     *
     * @return \Security\Entity\Tblactions 
     */
    public function getIntactionid()
    {
        return $this->intactionid;
    }

    /**
     * Set intattributeid
     *
     * @param \Security\Entity\Tblattributes $intattributeid
     * @return Tblactionfields
     */
    public function setIntattributeid(\Security\Entity\Tblattributes $intattributeid)
    {
        $this->intattributeid = $intattributeid;

        return $this;
    }

    /**
     * Get intattributeid
     *
     * @return \Security\Entity\Tblattributes 
     */
    public function getIntattributeid()
    {
        return $this->intattributeid;
    }

    /**
     * Set intdisplaytypeid
     *
     * @param \Security\Entity\Tbldisplaytypes $intdisplaytypeid
     * @return Tblactionfields
     */
    public function setIntdisplaytypeid(\Security\Entity\Tbldisplaytypes $intdisplaytypeid)
    {
        $this->intdisplaytypeid = $intdisplaytypeid;

        return $this;
    }

    /**
     * Get intdisplaytypeid
     *
     * @return \Security\Entity\Tbldisplaytypes 
     */
    public function getIntdisplaytypeid()
    {
        return $this->intdisplaytypeid;
    }
}
