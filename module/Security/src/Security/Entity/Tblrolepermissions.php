<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblrolepermissions
 *
 * @ORM\Table(name="tblRolePermissions", indexes={@ORM\Index(name="fk_tblRolePermissions_roles1_idx", columns={"intRoleID"}), @ORM\Index(name="fk_tblRolePermissions_tblPermissions1_idx", columns={"intPermissionID"})})
 * @ORM\Entity
 */
class Tblrolepermissions
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intRolePermissionID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $introlepermissionid;

    /**
     * @var \Security\Entity\Tblroles
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tblroles")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intRoleID", referencedColumnName="intRoleID")
     * })
     */
    private $introleid;

    /**
     * @var \Security\Entity\Tblpermissions
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tblpermissions")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intPermissionID", referencedColumnName="intPermissionID")
     * })
     */
    private $intpermissionid;



    /**
     * Get introlepermissionid
     *
     * @return integer 
     */
    public function getIntrolepermissionid()
    {
        return $this->introlepermissionid;
    }

    /**
     * Set introleid
     *
     * @param \Security\Entity\Tblroles $introleid
     * @return Tblrolepermissions
     */
    public function setIntroleid(\Security\Entity\Tblroles $introleid = null)
    {
        $this->introleid = $introleid;

        return $this;
    }

    /**
     * Get introleid
     *
     * @return \Security\Entity\Tblroles 
     */
    public function getIntroleid()
    {
        return $this->introleid;
    }

    /**
     * Set intpermissionid
     *
     * @param \Security\Entity\Tblpermissions $intpermissionid
     * @return Tblrolepermissions
     */
    public function setIntpermissionid(\Security\Entity\Tblpermissions $intpermissionid = null)
    {
        $this->intpermissionid = $intpermissionid;

        return $this;
    }

    /**
     * Get intpermissionid
     *
     * @return \Security\Entity\Tblpermissions 
     */
    public function getIntpermissionid()
    {
        return $this->intpermissionid;
    }
}
