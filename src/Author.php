<?php
class Author
{
    private $name;
    private $age;
    private $bio;
  
    public function __construct($name="", $age="", $bio=""){
        $this->name = $name;
        $this->age = $age;
        $this->bio = $bio;
    }
    
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = (String)$name;
        return $name;
    }
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age = (int)$age;
        return $age;
    }
    public function getBio(){
        return $this->bio;
    }
    public function setBio($bio){
        $this->bio = (String)$bio;
        return $bio;
    }
}
