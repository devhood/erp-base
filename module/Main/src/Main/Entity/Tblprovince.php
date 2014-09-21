<?php

namespace Main\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblprovince
 *
 * @ORM\Table(name="tblProvince")
 * @ORM\Entity
 */
class Tblprovince
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intProvinceID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intprovinceid;

    /**
     * @var string
     *
     * @ORM\Column(name="strProvinceName", type="string", length=45, nullable=false)
     */
    private $strprovincename;



    /**
     * Get intprovinceid
     *
     * @return integer 
     */
    public function getIntprovinceid()
    {
        return $this->intprovinceid;
    }

    /**
     * Set strprovincename
     *
     * @param string $strprovincename
     * @return Tblprovince
     */
    public function setStrprovincename($strprovincename)
    {
        $this->strprovincename = $strprovincename;

        return $this;
    }

    /**
     * Get strprovincename
     *
     * @return string 
     */
    public function getStrprovincename()
    {
        return $this->strprovincename;
    }
}
