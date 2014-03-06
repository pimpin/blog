<?php
class Post
{
    private $title;
    private $content;
      
    public function __construct($title, $content)
    {
      if (strlen($title)>40) {
            throw new InvalidArgumentException('$title must be under 40 characteres');
      }
      
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