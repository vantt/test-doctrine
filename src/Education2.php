<?php
// src/Product.php



/**
 * @Entity @Table(name="educations2")
 **/
class Education2
{
    /** @Id @Column(type="integer") @GeneratedValue * */
    protected $id;

    /** @Column(type="string") * */
    protected $school;

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
}