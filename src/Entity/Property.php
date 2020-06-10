<?php

namespace App\Entity;

use App\Repository\PropertySearchRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PropertyRepository::class)
 */
class Property
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $ref;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $title;

    /**
     * @ORM\Column(type="text")
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picture;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="integer")
     */
    private $surface;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $adress;

    /**
     * @ORM\Column(type="integer")
     */
    private $postal_code;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $city;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $number_of_parts;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $number_of_bedrooms;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $garage;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $parking;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $balcony;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $garden;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $floor;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $locality;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $rental;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $sale;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $apartment;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $house;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $budget;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $furnished;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $opposite;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $caretaker;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $handicap_access;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $heater;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRef(): ?int
    {
        return $this->ref;
    }

    public function setRef(int $ref): self
    {
        $this->ref = $ref;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(?string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getSurface(): ?int
    {
        return $this->surface;
    }

    public function setSurface(int $surface): self
    {
        $this->surface = $surface;

        return $this;
    }

    public function getAdress(): ?string
    {
        return $this->adress;
    }

    public function setAdress(string $adress): self
    {
        $this->adress = $adress;

        return $this;
    }

    public function getPostalCode(): ?int
    {
        return $this->postal_code;
    }

    public function setPostalCode(int $postal_code): self
    {
        $this->postal_code = $postal_code;

        return $this;
    }

    public function getCity(): ?string
    {
        return $this->city;
    }

    public function setCity(string $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getNumberOfParts(): ?int
    {
        return $this->number_of_parts;
    }

    public function setNumberOfParts(?int $number_of_parts): self
    {
        $this->number_of_parts = $number_of_parts;

        return $this;
    }

    public function getNumberOfBedrooms(): ?int
    {
        return $this->number_of_bedrooms;
    }

    public function setNumberOfBedrooms(?int $number_of_bedrooms): self
    {
        $this->number_of_bedrooms = $number_of_bedrooms;

        return $this;
    }

    public function getGarage(): ?string
    {
        return $this->garage;
    }

    public function setGarage(?string $garage): self
    {
        $this->garage = $garage;

        return $this;
    }

    public function getParking(): ?string
    {
        return $this->parking;
    }

    public function setParking(?string $parking): self
    {
        $this->parking = $parking;

        return $this;
    }

    public function getBalcony(): ?bool
    {
        return $this->balcony;
    }

    public function setBalcony(?bool $balcony): self
    {
        $this->balcony = $balcony;

        return $this;
    }

    public function getGarden(): ?bool
    {
        return $this->garden;
    }

    public function setGarden(?bool $garden): self
    {
        $this->garden = $garden;

        return $this;
    }

    public function getFloor(): ?string
    {
        return $this->floor;
    }

    public function setFloor(?string $floor): self
    {
        $this->floor = $floor;

        return $this;
    }

    public function getLocality(): ?string
    {
        return $this->locality;
    }

    public function setLocality(?string $locality): self
    {
        $this->locality = $locality;

        return $this;
    }

    public function getRental(): ?bool
    {
        return $this->rental;
    }

    public function setRental(?bool $rental): self
    {
        $this->rental = $rental;

        return $this;
    }

    public function getSale(): ?bool
    {
        return $this->sale;
    }

    public function setSale(?bool $sale): self
    {
        $this->sale = $sale;

        return $this;
    }

    public function getApartment(): ?bool
    {
        return $this->apartment;
    }

    public function setApartment(?bool $apartment): self
    {
        $this->apartment = $apartment;

        return $this;
    }

    public function getHouse(): ?bool
    {
        return $this->house;
    }

    public function setHouse(?bool $house): self
    {
        $this->house = $house;

        return $this;
    }

    public function getBudget(): ?int
    {
        return $this->budget;
    }

    public function setBudget(?int $budget): self
    {
        $this->budget = $budget;

        return $this;
    }

    public function getFurnished(): ?bool
    {
        return $this->furnished;
    }

    public function setFurnished(?bool $furnished): self
    {
        $this->furnished = $furnished;

        return $this;
    }

    public function getOpposite(): ?bool
    {
        return $this->opposite;
    }

    public function setOpposite(?bool $opposite): self
    {
        $this->opposite = $opposite;

        return $this;
    }

    public function getCaretaker(): ?bool
    {
        return $this->caretaker;
    }

    public function setCaretaker(?bool $caretaker): self
    {
        $this->caretaker = $caretaker;

        return $this;
    }

    public function getHandicapAccess(): ?bool
    {
        return $this->handicap_access;
    }

    public function setHandicapAccess(?bool $handicap_access): self
    {
        $this->handicap_access = $handicap_access;

        return $this;
    }

    public function getHeater(): ?string
    {
        return $this->heater;
    }

    public function setHeater(?string $heater): self
    {
        $this->heater = $heater;

        return $this;
    }
}