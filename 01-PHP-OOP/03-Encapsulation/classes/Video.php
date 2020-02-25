<?php

class Video
{
  private $type;
  private $duration;
  private $published = false;
  private $title;
  private $playStatus;

  public function setPublished(bool $state)
  {
    $this->published = $state;
  }

  private function getPublished() 
  {
    return $this->published;
  }

  public function setTitle(String $title) {
    $this->title = $title;
  }

  public function getTitle() {
    return $this->title;
  }

  public function play()
  {

    if($this->getPublished()) {
      $this->playStatus = true;
      return "The video is playing";
    }

    return "This video is not yet available";
  }

  public function pause()
  {
    return $this->playStatus ? "The video is paused" : "";
  }

}

