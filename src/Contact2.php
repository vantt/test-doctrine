<?php
// src/Product.php
/**
 * @Entity @Table(name="contacts2")
 **/
class Contact2
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string") **/
    protected $address;

    /**
     * @OneToOne(targetEntity="ProfileA2", inversedBy="contact")
     * @JoinColumn(name="profile_id", referencedColumnName="id")
     **/
    protected $profile;

    public function __construct($address) {
        $this->address = $address;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getAddress()
    {
        return $this->address;
    }

    public function setAddress($address)
    {
        $this->address = $address;
    }

    public function setProfile($profile) {
        $this->profile = $profile;
    }
 } 