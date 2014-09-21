<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblproductcondition
 *
 * @ORM\Table(name="tblProductCondition", uniqueConstraints={@ORM\UniqueConstraint(name="strConditionName_UNIQUE", columns={"strConditionName"})})
 * @ORM\Entity
 */
class Tblproductcondition
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intConditionID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intconditionid;

    /**
     * @var string
     *
     * @ORM\Column(name="strConditionName", type="string", length=45, nullable=false)
     */
    private $strconditionname;

    /**
     * @var string
     *
     * @ORM\Column(name="intActive", type="string", length=45, nullable=true)
     */
    private $intactive = '1';



    /**
     * Get intconditionid
     *
     * @return integer 
     */
    public function getIntconditionid()
    {
        return $this->intconditionid;
    }

    /**
     * Set strconditionname
     *
     * @param string $strconditionname
     * @return Tblproductcondition
     */
    public function setStrconditionname($strconditionname)
    {
        $this->strconditionname = $strconditionname;

        return $this;
    }

    /**
     * Get strconditionname
     *
     * @return string 
     */
    public function getStrconditionname()
    {
        return $this->strconditionname;
    }

    /**
     * Set intactive
     *
     * @param string $intactive
     * @return Tblproductcondition
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
