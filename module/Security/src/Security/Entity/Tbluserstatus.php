<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tbluserstatus
 *
 * @ORM\Table(name="tblUserStatus")
 * @ORM\Entity
 */
class Tbluserstatus
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intUserStatusID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intuserstatusid;

    /**
     * @var string
     *
     * @ORM\Column(name="strCategory", type="string", length=45, nullable=false)
     */
    private $strcategory;

    /**
     * @var string
     *
     * @ORM\Column(name="strStatus", type="string", length=45, nullable=false)
     */
    private $strstatus;



    /**
     * Get intuserstatusid
     *
     * @return integer 
     */
    public function getIntuserstatusid()
    {
        return $this->intuserstatusid;
    }

    /**
     * Set strcategory
     *
     * @param string $strcategory
     * @return Tbluserstatus
     */
    public function setStrcategory($strcategory)
    {
        $this->strcategory = $strcategory;

        return $this;
    }

    /**
     * Get strcategory
     *
     * @return string 
     */
    public function getStrcategory()
    {
        return $this->strcategory;
    }

    /**
     * Set strstatus
     *
     * @param string $strstatus
     * @return Tbluserstatus
     */
    public function setStrstatus($strstatus)
    {
        $this->strstatus = $strstatus;

        return $this;
    }

    /**
     * Get strstatus
     *
     * @return string 
     */
    public function getStrstatus()
    {
        return $this->strstatus;
    }
}
