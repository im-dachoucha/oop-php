<?php
// require_once "./Personne.php";
class Etudiant extends Personne
{
    // done properties
    private $class, $date_integration, $notes;

    // todo constructor

    public function __construct(Personne $personne, $class, $date_integration)
    {
        parent::__construct($personne->get_nom(), $personne->get_date_naissance(), $personne->get_genre());
        $this->class = $class;
        $this->date_integration = $date_integration;
    }
    public function f($value)
    {
        $this->dd = $value;
    }

    // public static function avec_personne($personne, $class, $date_integration)
    // {
    //     parent::__construct($personne->nom, $personne->date_naissance, $personne->genre);
    // }


    // done getters
    public function get_class()
    {
        return $this->class;
    }
    public function get_date_integration()
    {
        return date_format($this->date_integration, "Y-m-d");
    }

    // done setters
    public function set_class($class)
    {
        $this->class = $class;
    }
    public function set_date_integration($date_integration)
    {
        $this->date_integration = date_create($date_integration);
    }
    public function set_notes(array $notes)
    {
        $this->notes = $notes;
    }
    // todo custom methods
    public function calculer_moyenne()
    {
        $som = 0;
        $coeff = 0;
        foreach ($this->notes as $note) {
            $som += $note[0] * $note[1];
            $coeff += $note[1];
            // var_dump($note);
        }
        return $som / $coeff;
    }
}
