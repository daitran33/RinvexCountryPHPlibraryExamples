<?php
use Rinvex\countries\data;

// Load Composer's autoloader
require 'vendor/autoload.php';
// Get single country
$egypt = country('eg');

// Get country name                                 // Get country native name
echo $egypt->getName() . "<br />";                             echo $egypt->getNativeName() . "<br />";

// Get country official name                        // Get country ISO 3166-1 alpha2 code
echo $egypt->getOfficialName() . "<br />";                     echo $egypt->getIsoAlpha2() . "<br />";


// Get country emoji                                // Get country flag
echo $egypt->getEmoji() . "<br />";                            echo $egypt->getFlag() . "<br />";


// Get all countries                                // Get countries with where condition (continent: Oceania)
$countries = countries();                           $whereCountries = \Rinvex\Country\CountryLoader::where('geo.continent', ['OC' => 'Oceania']);



?>