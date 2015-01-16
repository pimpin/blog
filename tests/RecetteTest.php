<?php

include_once "..\src\Recipe.php";

class RecipeTest extends PHPUnit_Framework_TestCase {

    public function testGetCategory() {
        $entree = new recetteCree("homard_mayonnais", "homard");
        $this->assertEquals($post->getTitle(), 'Titre test');
        
    }

    public function testGetIngrdients() {
        $post = new Post('', 'Contenu test');
        $entree = new recetteCree("homard_mayonnais", "homard");
    }

}

?>
