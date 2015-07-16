<?php
// src/Product.php
/**
 * @Entity @Table(name="profilesa")
 **/
class ProfileA
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string") **/
    protected $name;

    /**
     * @OneToOne(targetEntity="Contact", cascade={"all"})
     * @JoinColumn(name="contact_id", referencedColumnName="id")
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
        $this->contact = new Contact($address);
    }

    public function getContact() {
        return $this->contact;
    }
}