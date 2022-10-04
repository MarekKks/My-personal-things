<?php


class Adventure {

    protected $dudes = [];

    public function getdudes()
    {
        return $this->dudes;
    }

    public function addDude(dude $dude)
    {
        array_push($this->dudes, $dude);
    }

    public function dudeCount()
    {
        return count( $this->dudes );
    }

    public function commentCount()
    {
         $count = 0;

         foreach ( $this->dudes as $dude )
         {
             $count += $dude->getComments();
         }

         return $count;
    }
}

?>