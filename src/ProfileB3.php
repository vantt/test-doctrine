<?php
// src/Product.php
use Doctrine\Common\Collections\ArrayCollection;


/**
 * @Entity @Table(name="profilesb3")
 **/
class ProfileB3
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string") **/
    protected $name;

    /**
     * @OneToMany(targetEntity="Education3", mappedBy="profile", cascade={"all"})
     **/
    protected $educations;

    /**
     *
     */
    public function __construct() {
        $this->educations = new ArrayCollection();
    }

    public function getId()
    {
        return $this->id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param $school
     */
    public function addEducation($school) {
        $education = new Education3($school);
        $education->setProfile($this);
        $this->educations->add($education);
    }
}