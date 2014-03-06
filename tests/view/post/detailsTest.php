<?php
class postDetailsViewTest extends PHPUnit_Framework_TestCase
{
  protected $post;

  public function setUp()
  {
    $this->post = $this->getMockBuilder('Post')
                     ->disableOriginalConstructor()
                     ->getMock();
  }

  public function testShowTitle()
  {
    $post = $this->post;
    $post->expects($this->any())
      ->method('getTitle')
      ->will($this->returnValue('Test titre2'));
    $this->expectOutputRegex("/<h2>Test titre2<\/h2>/");
    include(dirname(__FILE__)'/../src/view/post/details.phtml');
  }
  
  public function testShowContent()
  {
    $post = $this->post;
    $post->expects($this->any())
      ->method('getContent')
      ->will($this->returnValue('Test contenu'));
    $this->expectOutputRegex("/<h2>Test titre2<\/h2>/");
    $this->expectOutputRegex("/Test contenu/");
    include(dirname(__FILE__)'/../src/view/post/details.phtml');
  }
}
?>
