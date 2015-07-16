<?php
// src/Product.php
use Doctrine\Common\Collections\ArrayCollection;

/*
START TRANSACTION
INSERT INTO educations2(school) VALUES('Bach Khoa')
INSERT INTO profilesb2(name) VALUES('vantt')
INSERT INTO educations2(profile_id, id) VALUES(1, 1)
rollback
*/

/**
 * @Entity @Table(name="profilesb2")
 **/
class ProfileB2
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string") **/
    protected $name;

    /**
     * @ManyToMany(targetEntity="Education2", cascade={"all"})
     * @JoinTable(name="profilesb2_educations2",
     *      joinColumns={@JoinColumn(name="profile_id", referencedColumnName="id")},
     *      inverseJoinColumns={@JoinColumn(name="id", referencedColumnName="id", unique=true)}
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
        $this->educations->add(new Education2($school));
    }
}