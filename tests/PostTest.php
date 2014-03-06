<?php

//include_once "/home/action/workspace/pierre/blog/src/Post.php";
class PostTest extends PHPUnit_Framework_TestCase {

    public function testGetTitle() {
        $post = new Post('Titre test', '');
        $this->assertEquals($post->getTitle(), 'Titre test');
    }

    public function testGetContent() {
        $post = new Post('', 'Contenu test');
        $this->assertEquals($post->getContent(), 'Contenu test');
    }

    public function testExceptionOnTooLongTitle() {
        $this->setExpectedException('InvalidArgumentException');

        $title_too_long = 'Too long title that is not accepted by business which ask to limit our title size';
        $post = new Post($title_too_long, 'Contenu test');
    }

    public function testExceptionOnTooLongTitleHasRightMessage() {
        $this->setExpectedException(
                'InvalidArgumentException', '$title must be under 40 characteres'
        );
        $title_too_long = 'Too long title that is not accepted by business which ask to limit our title size';
        $post = new Post($title_too_long, 'Contenu test');
    }

}

?>