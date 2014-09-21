<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbluom
 *
 * @ORM\Table(name="tblUOM", uniqueConstraints={@ORM\UniqueConstraint(name="strUOM_UNIQUE", columns={"strUOM"})})
 * @ORM\Entity
 */
class Tbluom
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intUOMID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intuomid;

    /**
     * @var string
     *
     * @ORM\Column(name="strUOM", type="string", length=45, nullable=false)
     */
    private $struom;

    /**
     * @var integer
     *
     * @ORM\Column(name="intActive", type="integer", nullable=true)
     */
    private $intactive = '1';



    /**
     * Get intuomid
     *
     * @return integer 
     */
    public function getIntuomid()
    {
        return $this->intuomid;
    }

    /**
     * Set struom
     *
     * @param string $struom
     * @return Tbluom
     */
    public function setStruom($struom)
    {
        $this->struom = $struom;

        return $this;
    }

    /**
     * Get struom
     *
     * @return string 
     */
    public function getStruom()
    {
        return $this->struom;
    }

    /**
     * Set intactive
     *
     * @param integer $intactive
     * @return Tbluom
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
