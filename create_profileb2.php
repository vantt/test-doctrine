<?php
// create_product.php
require_once "bootstrap.php";

$newProductName = $argv[1];

$profile = new ProfileB2();
$profile->setName($newProductName);
$profile->addEducation('Bach Khoa');
$entityManager->persist($profile);
$entityManager->flush();

echo "Created Product with ID " . $profile->getId() . "\n";