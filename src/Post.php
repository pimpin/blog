<?php
class Post
{
    private $title;
    private $content;
      
    public function __construct($title, $content)
    {
      $this->title = $title;
      $this->content = $content;
    }
  
    /**
    * Returns the title of this Post object.
    *
    * @return string
    */
    public function getTitle()
    {
      return $this->title;
    }
  
    /**
    * Returns the content of this Post object.
    *
    * @return string
    */
    public function getContent()
    {
      return $this->content;
    }
}