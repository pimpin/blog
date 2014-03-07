<?php
//include_once "/home/action/workspace/pierre/blog/src/Post.php";
class PlaceTest extends PHPUnit_Framework_TestCase {

    public function testGetName() {
        $place = new Place('Nom test', '');
        $this->assertEquals($place->getName(), 'Nom test');
    }

    public function testGetAdresse() {
        $adresse = new Adresse('adresse test','');
        $this->assertEquals($adresse->getAdresse(), 'Adresse test');
    }

    public function testGetVille() {
        $ville = new Ville('ville test','');
        $this->assertEquals($ville->getVille(), 'Ville test');
    }
}

?>