<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblentitytype
 *
 * @ORM\Table(name="tblEntityType")
 * @ORM\Entity
 */
class Tblentitytype
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intEntityTypeID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intentitytypeid;

    /**
     * @var string
     *
     * @ORM\Column(name="strEntityTypeName", type="string", length=45, nullable=false)
     */
    private $strentitytypename;

    /**
     * @var string
     *
     * @ORM\Column(name="intActive", type="string", length=45, nullable=true)
     */
    private $intactive = '1';



    /**
     * Get intentitytypeid
     *
     * @return integer 
     */
    public function getIntentitytypeid()
    {
        return $this->intentitytypeid;
    }

    /**
     * Set strentitytypename
     *
     * @param string $strentitytypename
     * @return Tblentitytype
     */
    public function setStrentitytypename($strentitytypename)
    {
        $this->strentitytypename = $strentitytypename;

        return $this;
    }

    /**
     * Get strentitytypename
     *
     * @return string 
     */
    public function getStrentitytypename()
    {
        return $this->strentitytypename;
    }

    /**
     * Set intactive
     *
     * @param string $intactive
     * @return Tblentitytype
     */
    public function setIntactive($intactive)
    {
        $this->intactive = $intactive;

        return $this;
    }

    /**
     * Get intactive
     *
     * @return string 
     */
    public function getIntactive()
    {
        return $this->intactive;
    }
}
