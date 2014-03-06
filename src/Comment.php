<?php 
class Comment
{
  private $comment;
  private $nick_name;
  private $datePub;
  
  public function __construct($comment="", $nick_name="", $datePub="")
  {
    if (strlen($comment)>40) {
            throw new InvalidArgumentException('$comment must be under 40 characteres');
      }
    $this->comment = $comment;
    $this->nick_name = $nick_name;
    $this->datePub = $datePub;
  }
  
  /**
    * Returns the comment of this Comment object.
    *
    * @return string
    */
    public function getComment()
    {
      return $this->comment;
    }
  
    /**
    * Returns the nick name of this Comment object.
    *
    * @return string
    */
    public function getNickName()
    {
      return $this->nick_name;
    }
  
    /**
    * Returns the date of this Comment object.
    *
    * @return string
    */
    public function getDatePub()
    {
      return $this->datePub;
    }
}
?>