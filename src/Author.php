<?php
class Author
{
    private $name;
    private $age;
    private $bio;
  
    public function __construct($name="", $age="", $bio=""){
        
        if (strlen($name)>40) {
            throw new InvalidArgumentException('$name must be under 40 characteres');
      }
        
        $this->name = $name;
        $this->age = $age;
        $this->bio = $bio;
    }
    
    /**
    * Returns the name of this Author object.
    *
    * @return string
    */
    public function getName(){
        return $this->name;
    }
    public function setName($name){
        $this->name = (String)$name;
        return $name;
    }
    /**
    * Returns the age of this Author object.
    *
    * @return int
    */
    public function getAge(){
        return $this->age;
    }
    public function setAge($age){
        $this->age = (int)$age;
        return $age;
    }
    /**
    * Returns the bio of this Author object.
    *
    * @return string
    */
    public function getBio(){
        return $this->bio;
    }
    public function setBio($bio){
        $this->bio = (String)$bio;
        return $bio;
    }
}
