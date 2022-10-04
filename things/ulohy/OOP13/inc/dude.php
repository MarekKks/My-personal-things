<?php


class Dude {

    protected $who;
    protected $wat;
    protected $comments = 0;

    public function __construct( $who, $wat, $comments)
    {
        $this->who      = $who;
        $this->wat      = $wat;
        $this->comments = $comments;
    }

    public function getWho()
    {
        return $this->who;
    }
    
    public function setWho($who)
    {
        $this->who = $who;
    }

    public function getWat()
    {
        return $this->wat;
    }

    public function setWat($wat)
    {
        $this->who = $wat;
    }

    public function getComments()
    {
        return $this->comments;
    }

    public function setComments($comments)
    {
        $this->who = $comments;
    }

}


?>