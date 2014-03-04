<?php
// include_once "/home/action/workspace/pierre/blog/src/Post.php";
class PostTest extends PHPUnit_Framework_TestCase
{
  public function testGetTitle()
  {
  $post = new Post('Titre test', '');
  $this->assertEquals($post->getTitle(), 'Titre test');
  }
  
  public function testGetContent()
  {
  $post = new Post('','Contenu test');
  $this->assertEquals($post->getContent(), 'Contenu test');
  }
}
?>