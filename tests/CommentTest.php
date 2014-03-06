<?php
include_once "/home/action/workspace/malik/blog/src/Comment.php";
class CommentTest extends PHPUnit_Framework_TestCase
{
  public function testGetComment()
  {
    $comment = new Comment('Comment test', '', '');
    $this->assertEquals($comment->getComment(), 'Comment test');
  }
  
  public function testGetNickName()
  {
    $comment = new Comment('', 'Nick name test','');
    $this->assertEquals($comment->getNickName(), 'Nick name test');
  }
  
  public function testGetDatePub()
  {
    $comment = new Comment('', '', 'Date publication test');
    $this->assertEquals($comment->getDatePub(), 'Date publication test');
  }
  
  public function testExceptionOnTooLongComment()
  {
    $this->setExpectedException('InvalidArgumentException');
    
    $comment_too_long = 'Too long comment that is not accepted by business which ask to limit our title size';
    $comment = new Comment($comment_too_long,'Comment test', '','');
  }
  
  public function testExceptionOnTooLongCommentHasRightMessage()
  {
    $this->setExpectedException(
      'InvalidArgumentException', '$comment must be under 40 characteres'
    );
    $comment_too_long = 'Too long comment that is not accepted by business which ask to limit our title size';
    $comment = new Comment($comment_too_long,'Comment test', '','');  
  }
  
}
?>