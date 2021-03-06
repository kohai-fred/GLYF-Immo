<?php

namespace App\DataFixtures;

use App\Entity\Property;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class PropertyFixtures extends Fixture
{
    const NB_PROPERTY = 30;

    public function load(ObjectManager $manager)
    {
        for($i = 0; $i < self::NB_PROPERTY; $i++){
            $property = new Property();

            $property->setTitle("appartement")
                ->setType("appartement")
                ->setAdress("$i avenue de ma super maison")
                ->setCity("paris")
                ->setPostalCode(random_int(75000, 75020))
                ->setDescription("ma super description $i")
                ->setPrice(random_int(10000, 1000000))
                ->setBedrooms(random_int(1, 5))
                ->setHeater(true)
                ->setRef(random_int(100, 50000))
                ->setSurface(random_int(18, 400))
                ->setBedrooms(random_int(1, 4))
                ->setFloor(random_int(1, 5))
                ->setRooms(random_int(2, 5))
                ->setSale(random_int(0,1) == 1)
                ->setRental(random_int(0,1) == 1)
                ->setGarage(random_int(0,1) == 1)
                ->setParking(random_int(0,1) == 1)
                ->setFurnished(random_int(0,1) == 1)
                ->setGarden(random_int(0,1) == 1)
                ->setCaretaker(random_int(0,1) == 1)
                ->setHandicapAccess(random_int(0,1) == 1)
                ->setBalcony(random_int(0,1) == 1)
                ->setPicture("http://placehold.it/250x200");

            $manager->persist($property);
        }

        $manager->flush();
    }
}
