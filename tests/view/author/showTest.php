<?php
include_once "/home/action/workspace/nicolas/blog/src/Author.php";
class showDetailsViewTest extends PHPUnit_Framework_TestCase
{
    //protected $name;

  public function setUp()
  {
    $this->name = $this->getMockBuilder('Name')
                     ->disableOriginalConstructor()
                     ->getMock();
  }

  public function testShowName()
  {
    $name = $this->name;
    $name->expects($this->any())
      ->method('getName')
      ->will($this->returnValue('Test Name'));
    $this->expectOutputRegex("/<h2>Test Name<\/h2>/");
    include('/home/action/workspace/nicolas/blog/src/view/author/show.phtml');
  }
}
?>