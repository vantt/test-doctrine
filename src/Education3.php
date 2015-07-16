<?php
// src/Product.php



/**
 * @Entity @Table(name="educations3")
 **/
class Education3
{
    /** @Id @Column(type="integer") @GeneratedValue * */
    protected $id;

    /** @Column(type="string") * */
    protected $school;

    /**
     * @ManyToOne(targetEntity="ProfileB3", inversedBy="educations")
     * @JoinColumn(name="profile_id", referencedColumnName="id")
     **/
    private $profile;

    public function __construct($school)
    {
        $this->school = $school;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getSchool()
    {
        return $this->school;
    }

    public function setSchool($school)
    {
        $this->school = $school;
    }

    public function setProfile($profile) {
        $this->profile = $profile;
    }

}