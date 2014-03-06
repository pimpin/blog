<?php
//include_once "/home/action/workspace/pierre/blog/src/Author.php";
class AuthorTest extends PHPUnit_Framework_TestCase
{
    public function testGetName()
    {
        $newAuthor = new Author ("Albert","");
        $this->assertEquals($newAuthor->getName(), "Albert");
    }
    public function testSetName()
    {
        $name = "Albert";
        $newAuthor = new Author();
        $newAuthor->setName($name);
        $this->assertEquals($newAuthor->getName(), $name);
    }
    public function testGetAge()    
    {
        $newAuthor = new Author ("",30);
        $this->assertEquals($newAuthor->getAge(), 30);
    }
    public function testSetAge()
    {
        $age = 25;
        $newAuthor = new Author();
        $newAuthor->setAge($age);
        $this->assertEquals($newAuthor->getAge(), $age);
    }
    public function testGetBio()
    {
        $newAuthor = new Author("","" ,"né en 1858");
        $this->assertEquals($newAuthor->getBio(),"né en 1858");
    }
    public function testSetBio()
    {
        $bio = "né en 1858";
        $newAuthor = new Author();
        $newAuthor->setBio($bio);
        $this->assertEquals($newAuthor->getBio(), $bio);
    }
}
?>