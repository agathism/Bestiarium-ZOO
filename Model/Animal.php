<?php
class Animal
{

    private ?int $id;
    private string $name;
    private string $species;
    private string $family;
    private string $habitat;
    private string $diet;
    private ?int $lifespan;
    private ?float $weight;
    private ?float $height;
    private string $introduction;
    // private string $image;

    public function __construct(int|null $id, string $name, string $species, string $family, string $habitat, string $diet, int|null $lifespan, float|null $weight, float|null $height, string $introduction)
    {
        $this->id = $id;
        $this->name = $name;
        $this->species = $species;
        $this->family = $family;
        $this->habitat = $habitat;
        $this->diet = $diet;
        $this->lifespan = $lifespan;
        $this->weight = $weight;
        $this->height = $height;
        $this->introduction = $introduction;
        // $this->image = $image;
    }

    // Méthode pour présenter l'animal
    public function presenter() {
        return "Je suis " . $this->name . " et je suis un(e) " . $this->species . ".";
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Get the value of name
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * Get the value of the species
     */
    public function getSpecies()
    {
        return $this->species;
    }

    /**
     * Set the value of species
     *
     * @return  self
     */
    public function setSpecies($species)
    {
        $this->species = $species;
    }

    /**
     * Get the value of family
     */
    public function getFamily()
    {
        return $this->family;
    }

    /**
     * Set the value of family
     *
     * @return  self
     */
    public function setFamily($family)
    {
        $this->family = $family;
    }
    /**
     * Get the value of habitat
     */
    public function getHabitat()
    {
        return $this->habitat;
    }

    /**
     * Set the value of habitat
     *
     * @return  self
     */
    public function setHabitat($habitat)
    {
        $this->habitat = $habitat;
    }

    /**
     * Get the value of diet
     */
    public function getDiet()
    {
        return $this->diet;
    }

    /**
     * Set the value of diet
     *
     * @return  self
     */
    public function setDiet($diet)
    {
        $this->diet = $diet;
    }
    /**
     * Get the value of lifespan
     */
    public function getLifespan()
    {
        return $this->lifespan;
    }

    /**
     * Set the value of lifespan
     *
     * @return  self
     */
    public function setLifespan($lifespan)
    {
        $this->lifespan = $lifespan;
    }
    /**
     * Get the value of weight
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * Set the value of weight
     *
     * @return  self
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }
    /**
     * Get the value of height
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Set the value of height
     *
     * @return  self
     */
    public function setHeight($height)
    {
        $this->height = $height;
    }
    /**
     * Get the value of introduction
     */
    public function getIntroduction()
    {
        return $this->introduction;
    }

    /**
     * Set the value of height
     *
     * @return  self
     */
    public function setIntroduction($introduction)
    {
        $this->introduction = $introduction;
    }
    /**
     * Get the value of image
     */
    // public function getImage()
    // {
    //     return $this->image;
    // }

    /**
     * Set the value of height
     *
     * @return  self
     */
    // public function setImage($image)
    // {
    //     $this->image = $image;
    // }
}