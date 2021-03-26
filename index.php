<?php
  $conn = new mysqli('localhost', 'root', '', 'ratingSystem');
  
  if (isset($_POST['save'])) {
    $uID = $conn->real_escape_string($_POST['uID']);
    $ratedIndex = $conn->real_escape_string($_POST['ratedIndex']);
    $ratedIndex++;

>
