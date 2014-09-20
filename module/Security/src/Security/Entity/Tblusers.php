<?php

namespace Security\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tblusers
 *
 * @ORM\Table(name="tblUsers", uniqueConstraints={@ORM\UniqueConstraint(name="username_UNIQUE", columns={"strUsername"}), @ORM\UniqueConstraint(name="user_id_UNIQUE", columns={"intUserID"}), @ORM\UniqueConstraint(name="name_UNIQUE", columns={"strName"}), @ORM\UniqueConstraint(name="email_UNIQUE", columns={"strEmail"})}, indexes={@ORM\Index(name="fk_users_roles_idx", columns={"intRoleID"}), @ORM\Index(name="fk_users_status1_idx", columns={"intUserStatusID"})})
 * @ORM\Entity
 */
class Tblusers
{
    /**
     * @var integer
     *
     * @ORM\Column(name="intUserID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $intuserid;

    /**
     * @var string
     *
     * @ORM\Column(name="strName", type="string", length=45, nullable=true)
     */
    private $strname;

    /**
     * @var string
     *
     * @ORM\Column(name="strEmail", type="string", length=45, nullable=true)
     */
    private $stremail;

    /**
     * @var string
     *
     * @ORM\Column(name="strUsername", type="string", length=45, nullable=false)
     */
    private $strusername;

    /**
     * @var string
     *
     * @ORM\Column(name="strPassword", type="string", length=45, nullable=false)
     */
    private $strpassword;

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
     * @var \Security\Entity\Tbluserstatus
     *
     * @ORM\ManyToOne(targetEntity="Security\Entity\Tbluserstatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="intUserStatusID", referencedColumnName="intUserStatusID")
     * })
     */
    private $intuserstatusid;



    /**
     * Get intuserid
     *
     * @return integer 
     */
    public function getIntuserid()
    {
        return $this->intuserid;
    }

    /**
     * Set strname
     *
     * @param string $strname
     * @return Tblusers
     */
    public function setStrname($strname)
    {
        $this->strname = $strname;

        return $this;
    }

    /**
     * Get strname
     *
     * @return string 
     */
    public function getStrname()
    {
        return $this->strname;
    }

    /**
     * Set stremail
     *
     * @param string $stremail
     * @return Tblusers
     */
    public function setStremail($stremail)
    {
        $this->stremail = $stremail;

        return $this;
    }

    /**
     * Get stremail
     *
     * @return string 
     */
    public function getStremail()
    {
        return $this->stremail;
    }

    /**
     * Set strusername
     *
     * @param string $strusername
     * @return Tblusers
     */
    public function setStrusername($strusername)
    {
        $this->strusername = $strusername;

        return $this;
    }

    /**
     * Get strusername
     *
     * @return string 
     */
    public function getStrusername()
    {
        return $this->strusername;
    }

    /**
     * Set strpassword
     *
     * @param string $strpassword
     * @return Tblusers
     */
    public function setStrpassword($strpassword)
    {
        $this->strpassword = $strpassword;

        return $this;
    }

    /**
     * Get strpassword
     *
     * @return string 
     */
    public function getStrpassword()
    {
        return $this->strpassword;
    }

    /**
     * Set introleid
     *
     * @param \Security\Entity\Tblroles $introleid
     * @return Tblusers
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
     * Set intuserstatusid
     *
     * @param \Security\Entity\Tbluserstatus $intuserstatusid
     * @return Tblusers
     */
    public function setIntuserstatusid(\Security\Entity\Tbluserstatus $intuserstatusid = null)
    {
        $this->intuserstatusid = $intuserstatusid;

        return $this;
    }

    /**
     * Get intuserstatusid
     *
     * @return \Security\Entity\Tbluserstatus 
     */
    public function getIntuserstatusid()
    {
        return $this->intuserstatusid;
    }
}
