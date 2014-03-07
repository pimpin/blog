<?php

class Place {

    private $name;
    private $adresse;
    private $ville;

    public function __construct($name, $adresse, $ville) {
        if (strlen($name) > 40) {
            throw new InvalidArgumentException('$name must be under 40 characteres');
        }

        $this->name = $name;
        $this->adresse = $adresse;
        $this->ville = $ville;
    }

    public function getName() {
        return $this->name;
    }

    public function getadresse() {
        return $this->adresse;
    }

    public function getVille() {
        return $this->ville;
    }

}
