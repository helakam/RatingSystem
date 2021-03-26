<?php
  $conn = new mysqli('localhost', 'root', '', 'ratingSystem');
  
  if (isset($_POST['save'])) {
    $uID = $conn->real_escape_string($_POST['uID']);
    $ratedIndex = $conn->real_escape_string($_POST['ratedIndex']);
    $ratedIndex++;

  if (!$uID) {
    $conn->query("INSERT INTO stars (rateIndex) VALUES ('$ratedIndex')");
    $sql = $conn->query("SELECT id FROM stars ORDER BY id DESC LIMIT 1");
    ratedIndex++; 
  }
>
