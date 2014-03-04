<?php
include_once "/home/action/workspace/pierre/blog/src/Post.php";
class detailsViewTest extends PHPUnit_Framework_TestCase
{
  public function testShowTitle()
  {
    $post = new Post('Test titre2','Test contenu');
    $this->expectOutputRegex("/<h2>Test titre2<\/h2>/");
    include('/home/action/workspace/pierre/blog/src/view/post/details.phtml');
  }
  
    public function testShowContent()
  {
    $post = new Post('Test titre2','Test contenu');
    $this->expectOutputRegex("/Test contenu/");
    include('/home/action/workspace/pierre/blog/src/view/post/details.phtml');
  }
}
?>