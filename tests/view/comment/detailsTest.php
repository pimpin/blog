<?php
include_once "/home/action/workspace/malik/blog/src/Comment.php";
class postDetailsViewTest extends PHPUnit_Framework_TestCase
{
  protected $comment;

  public function setUp()
  {
    $this->comment = $this->getMockBuilder('Comment')
                     ->disableOriginalConstructor()
                     ->getMock();
  }

  public function testShowComment()
  {
    $comment = $this->comment;
    $comment->expects($this->any())
      ->method('getComment')
      ->will($this->returnValue('Test Comment'));
    $this->expectOutputRegex("/<h2>Test Comment<\/h2>/");
    include('/home/action/workspace/malik/blog/src/view/comment/details.phtml');
  }
  
  public function testShowNickName()
  {
    $comment = $this->comment;
    $comment->expects($this->any())
      ->method('getNickName')
      ->will($this->returnValue('Test Nick Name'));
    $this->expectOutputRegex("/<h2>Test Nick name<\/h2>/");
    $this->expectOutputRegex("/Test Nick name/");
    include('/home/action/workspace/malik/blog/src/view/comment/details.phtml');
  }
  
  public function testShowDatePub()
  {
    $comment = $this->comment;
    $comment->expects($this->any())
      ->method('getDatePub')
      ->will($this->returnValue('Test Date Pub'));
    $this->expectOutputRegex("/<h2>Test Date Pub<\/h2>/");
    $this->expectOutputRegex("/Test Date Pub/");
    include('/home/action/workspace/malik/blog/src/view/comment/details.phtml');
  }
}
?>