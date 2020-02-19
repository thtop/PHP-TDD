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


// Objects
header('Content-Type:text/plain', true);
$video = new Video();
$video->published = true;
$video->author = 'Lexa';
echo $video->play(), PHP_EOL, $video->pause(), PHP_EOL, $video->author, PHP_EOL;

$video2 = new Video();
echo $video2->play(), PHP_EOL, $video2->pause(), PHP_EOL;

var_dump($video);
