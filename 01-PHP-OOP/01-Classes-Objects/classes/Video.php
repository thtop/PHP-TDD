<?php

class Video
{
  public $type;
  public $duration;
  public $published = false;
  public $title;

  public function play()
  {
    return $this->published ? "The video is playing" : "This video is not yet available";
  }

  public function pause()
  {
    return $this->published ? "The video is paused" : "";
  }
}

