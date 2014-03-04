<?php
class postDetailsViewTest extends PHPUnit_Framework_TestCase
{
  protected $post;

  public function setUp()
  {
    
    $this->post = new Post('Test titre2','Test contenu');
  }

  public function testShowTitle()
  {
    $post = $this->$this->getMockBuilder('Post')
                     ->disableOriginalConstructor()
                     ->getMock();
    $this->expectOutputRegex("/<h2>Test titre2<\/h2>/");
    include('/home/action/workspace/pierre/blog/src/view/post/details.phtml');
  }
  
  public function testShowContent()
  {
    $post = $this->post;
    $this->expectOutputRegex("/Test contenu/");
    include('/home/action/workspace/pierre/blog/src/view/post/details.phtml');
  }
}
?>