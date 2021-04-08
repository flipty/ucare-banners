<?php

$set1textDelay = 100;
$set1frame1 = 0;
$set1frame2 = 1000;//1500
$set1frame3 = 2000;//2500
$set1finalFrame = 4500;//4000
$set1finalFrameSpeed = 500;//500
$set1sparkDelayAfterFinalDrop = 1000;//1000
$set1logoDelay = $set1finalFrame + $set1sparkDelayAfterFinalDrop; //when the spark flies in
$set1logoReveal = 2500;//500
$set1sparkSpeed = 500;//500

$set2textDelay = 100;
$set2coverup = 1000;
$set2finalFrame = 3500;//4000
$set2finalFrameSpeed = 500;//500
$set2sparkDelayAfterFinalDrop = 1000;//1000
$set2logoDelay = $set2finalFrame + $set2sparkDelayAfterFinalDrop; //when the spark flies in
$set2logoReveal = 2500;//500
$set2sparkSpeed = 500;//500

if ($hideFrames === "HIDE") {
  $set1finalFrame = 0;
  $set1logoDelay = $set1sparkDelayAfterFinalDrop;
  $set2finalFrame = 0;
  $set2logoDelay = $set2sparkDelayAfterFinalDrop;
}

?>
