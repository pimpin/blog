<?php



class recetteCree {
protected $nomRecette;
protected $ingredients;
    
function __construct($nomRecette="", $ingredients="") {
    $this->nomRecette = $nomRecette;
    $this->ingredients = $ingredients;
}
public function voirIngredients(){
  return "L'ingredients de cette recette est ".$this->getIngredients();  
}


public function getNomRecette() {
    return $this->nomRecette;
}

public function getIngredients() {
    return $this->ingredients;
}

public function setNomRecette($nomRecette) {
    $this->nomRecette = $nomRecette;
    return $this;
}

public function setIngredients($ingredients) {
    $this->ingredients = $ingredients;
    return $this;
}




}