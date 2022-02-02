<?php

class Personne
{
    // DONE properties
    protected $nom, $date_naissance, $genre;

    // DONE constructor
    public function __construct($nom, $date_naissance, $genre)
    {
        $this->set_nom($nom);
        $this->set_date_naissance($date_naissance);
        $this->set_genre($genre);
    }

    // DONE getters
    public function get_nom()
    {
        return $this->nom;
    }

    public function get_date_naissance()
    {
        return date_format($this->date_naissance, "Y-m-d");
    }

    public function get_genre()
    {
        return $this->genre;
    }

    // DONE setters
    public function set_nom($nom)
    {
        if (trim(strlen($nom)) < 3)
            throw new Exception("This field should be at least 3 caracters long!!!!");
        $this->nom = $nom;
    }

    public function set_date_naissance($date_naissance)
    {
        $this->date_naissance = date_create($date_naissance);
    }

    public function set_genre($genre)
    {
        if (strtolower($genre) !== "male" && strtolower($genre) !== "female")
            throw new Exception("Choose either male or female!!");
        $this->genre = $genre;
    }


    // TODO methods
    private function get_age()
    {
        // $date_naissance = date_create($this->get_date_naissance());
        $date_naissance = $this->date_naissance;
        $current_date = date_create(date("Y-m-d"));

        $age = date_diff($date_naissance, $current_date);

        return $age->format("%Y");
    }

    public function to_string()
    {
        return "Hi, my name is  " . $this->nom . ", i'm " . $this->get_age() . " yo <br>";
    }

    // ! magic methods
    // function __get($prop)
    // {
    //     return $this->$prop;
    // }

    // function __set($name, $value)
    // {
    //     $this->$name = $value;
    // }
}
