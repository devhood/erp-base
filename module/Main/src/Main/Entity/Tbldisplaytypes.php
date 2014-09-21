<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbldisplaytypes
 *
 * @ORM\Table(name="tblDisplayTypes")
 * @ORM\Entity
 */
class Tbldisplaytypes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intDisplayTypeID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intdisplaytypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="strDisplayType", type="string", length=45, nullable=true)
     */
    private $strdisplaytype;

    /**
     * @var integer
     *
     * @ORM\Column(name="intStatus", type="integer", nullable=true)
     */
    private $intstatus = '1';



    /**
     * Get intdisplaytypeid
     *
     * @return integer 
     */
    public function getIntdisplaytypeid()
    {
        return $this->intdisplaytypeid;
    }

    /**
     * Set strdisplaytype
     *
     * @param string $strdisplaytype
     * @return Tbldisplaytypes
     */
    public function setStrdisplaytype($strdisplaytype)
    {
        $this->strdisplaytype = $strdisplaytype;

        return $this;
    }

    /**
     * Get strdisplaytype
     *
     * @return string 
     */
    public function getStrdisplaytype()
    {
        return $this->strdisplaytype;
    }

    /**
     * Set intstatus
     *
     * @param integer $intstatus
     * @return Tbldisplaytypes
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
