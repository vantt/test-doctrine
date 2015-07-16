<?php
// src/Product.php
/**
 * @Entity @Table(name="profilesa2")
 **/
class ProfileA2
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string") **/
    protected $name;

    /**
     * @OneToOne(targetEntity="Contact2", mappedBy="profile", cascade={"all"})
     **/
    protected $contact;

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

    public function setContact($address) {
        $this->contact = new Contact2($address);
        $this->contact->setProfile($this);
    }

    public function getContact() {
        return $this->contact;
    }
}