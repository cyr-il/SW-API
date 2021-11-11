<?php 

namespace App\DTO;

final class UserDTO
{
    private $name;
    private $height;
    private $mass;
    private $hair_color;
    private $skin_color;
    private $eye_color;
    private $birth_year;
    private $gender;
    private $homeworld;
    private $species;
    private $vehicles;
    private $starships;
    private $movies;
    private $picture;


    

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

        return $this;
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

        return $this;
    }

    /**
     * Get the value of mass
     */ 
    public function getMass()
    {
        return $this->mass;
    }

    /**
     * Set the value of mass
     *
     * @return  self
     */ 
    public function setMass($mass)
    {
        $this->mass = $mass;

        return $this;
    }

    /**
     * Get the value of hair_color
     */ 
    public function getHair_color()
    {
        return $this->hair_color;
    }

    /**
     * Set the value of hair_color
     *
     * @return  self
     */ 
    public function setHair_color($hair_color)
    {
        $this->hair_color = $hair_color;

        return $this;
    }

    /**
     * Get the value of skin_color
     */ 
    public function getSkin_color()
    {
        return $this->skin_color;
    }

    /**
     * Set the value of skin_color
     *
     * @return  self
     */ 
    public function setSkin_color($skin_color)
    {
        $this->skin_color = $skin_color;

        return $this;
    }

    /**
     * Get the value of eye_color
     */ 
    public function getEye_color()
    {
        return $this->eye_color;
    }

    /**
     * Set the value of eye_color
     *
     * @return  self
     */ 
    public function setEye_color($eye_color)
    {
        $this->eye_color = $eye_color;

        return $this;
    }

    /**
     * Get the value of birth_year
     */ 
    public function getBirth_year()
    {
        return $this->birth_year;
    }

    /**
     * Set the value of birth_year
     *
     * @return  self
     */ 
    public function setBirth_year($birth_year)
    {
        $this->birth_year = $birth_year;

        return $this;
    }

    /**
     * Get the value of gender
     */ 
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * Set the value of gender
     *
     * @return  self
     */ 
    public function setGender($gender)
    {
        $this->gender = $gender;

        return $this;
    }

    /**
     * Get the value of homeworld
     */ 
    public function getHomeworld()
    {
        return $this->homeworld;
    }

    /**
     * Set the value of homeworld
     *
     * @return  self
     */ 
    public function setHomeworld($homeworld)
    {
        $this->homeworld = $homeworld;

        return $this;
    }

    /**
     * Get the value of species
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

        return $this;
    }

    /**
     * Get the value of vehicles
     */ 
    public function getVehicles()
    {
        return $this->vehicles;
    }

    /**
     * Set the value of vehicles
     *
     * @return  self
     */ 
    public function setVehicles($vehicles)
    {
        $this->vehicles = $vehicles;

        return $this;
    }

    /**
     * Get the value of starships
     */ 
    public function getStarships()
    {
        return $this->starships;
    }

    /**
     * Set the value of starships
     *
     * @return  self
     */ 
    public function setStarships($starships)
    {
        $this->starships = $starships;

        return $this;
    }

    /**
     * Get the value of movies
     */ 
    public function getMovies():array
    {
        $films = [];
        foreach($this->movies as $movie){
            $films[] = $movie;
        }
        return $films;
    }

    /**
     * Set the value of movies
     *
     * @return  self
     */ 
    public function setMovies(array $movies)

    {
        $this->movies = $movies;

        return $this;
    }

    /**
     * Get the value of picture
     */ 
    public function getPicture()
    {
        return $this->picture;
    }

    /**
     * Set the value of picture
     *
     * @return  self
     */ 
    public function setPicture($picture)
    {
        $this->picture = $picture;

        return $this;
    }
}