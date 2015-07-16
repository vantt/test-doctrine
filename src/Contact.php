<?php
// src/Product.php
/**
 * @Entity @Table(name="contacts")
 **/
class Contact
{
    /** @Id @Column(type="integer") @GeneratedValue **/
    protected $id;

    /** @Column(type="string") **/
    protected $address;

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
}