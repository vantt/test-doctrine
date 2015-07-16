<?php
// create_product.php
require_once "bootstrap.php";

$newProductName = $argv[1];

$profile = new ProfileA2();
$profile->setName($newProductName);
$profile->setContact('Dinh Tien Hoang');

$entityManager->persist($profile);
$entityManager->flush();

echo "Created Product with ID " . $profile->getId() . "\n";