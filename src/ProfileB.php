<?php
// src/Product.php
use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity @Table(name="profilesb")
 **/
class ProfileB
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string") **/
    protected $name;

    /**
     * @ManyToMany(targetEntity="Education", cascade={"all"})
     * @JoinTable(name="profilesb_educations",
     *      joinColumns={@JoinColumn(name="profile_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="education_id", referencedColumnName="id", unique=true)}
     *      )
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

    public function addEducation($school) {
        $this->educations->add(new Education($school));
    }
}