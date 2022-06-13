<?php
include('database_connection.php');
session_start();
?>

<?php
  $area_code = '91355';

    $sql = "SELECT * FROM login WHERE area_code='$area_code'";
    $sql2 = "SELECT * FROM requests WHERE area_code='$area_code'";
    $sql3 = "SELECT * FROM offers WHERE area_code='$area_code'";
    $results = mysqli_query($link, $sql);
    $results2 = mysqli_query($link, $sql2);
    $results3 = mysqli_query($link, $sql3);
    $queryResult = mysqli_num_rows($results);
    $queryResult2 = mysqli_num_rows($results2);
    $queryResult3 = mysqli_num_rows($results3);

  if ($queryResult>0){
      
    while ($row = mysqli_fetch_assoc($results)){
       if ($queryResult2>0){ 
      
      $to      = $row['username'];
      $subject = 'Nearby Requests';
      $message = 'There are '.$queryResult2.' new request(s) and '.$queryResult3.' new offer(s) in your area. Visit supplyneighbor.com to view these requests/offers.';
      $headers = 'From: Supply Neighbor <contact@supplyneighbor.com>' . PHP_EOL .
      'Reply-To: Supply Neighbor <contact@supplyneighbor.com>' . PHP_EOL .
      'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
      
  }
  }
  }
?>


<?php
  $area_code = '91387';

    $sql = "SELECT * FROM login WHERE area_code='$area_code'";
    $sql2 = "SELECT * FROM requests WHERE area_code='$area_code'";
    $sql3 = "SELECT * FROM offers WHERE area_code='$area_code'";
    $results = mysqli_query($link, $sql);
    $results2 = mysqli_query($link, $sql2);
    $results3 = mysqli_query($link, $sql3);
    $queryResult = mysqli_num_rows($results);
    $queryResult2 = mysqli_num_rows($results2);
    $queryResult3 = mysqli_num_rows($results3);

  if ($queryResult>0){
      
    while ($row = mysqli_fetch_assoc($results)){
       if ($queryResult2>0){ 
      
      $to      = $row['username'];
      $subject = 'Nearby Requests';
      $message = 'There are '.$queryResult2.' new request(s) and '.$queryResult3.' new offer(s) in your area. Visit supplyneighbor.com to view these requests/offers.';
      $headers = 'From: Supply Neighbor <contact@supplyneighbor.com>' . PHP_EOL .
      'Reply-To: Supply Neighbor <contact@supplyneighbor.com>' . PHP_EOL .
      'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
      
  }
  }
  }
?>

<?php
  $area_code = '91354';

    $sql = "SELECT * FROM login WHERE area_code='$area_code'";
    $sql2 = "SELECT * FROM requests WHERE area_code='$area_code'";
    $sql3 = "SELECT * FROM offers WHERE area_code='$area_code'";
    $results = mysqli_query($link, $sql);
    $results2 = mysqli_query($link, $sql2);
    $results3 = mysqli_query($link, $sql3);
    $queryResult = mysqli_num_rows($results);
    $queryResult2 = mysqli_num_rows($results2);
    $queryResult3 = mysqli_num_rows($results3);

  if ($queryResult>0){
      
    while ($row = mysqli_fetch_assoc($results)){
       if ($queryResult2>0){ 
      
      $to      = $row['username'];
      $subject = 'Nearby Requests';
      $message = 'There are '.$queryResult2.' new request(s) and '.$queryResult3.' new offer(s) in your area. Visit supplyneighbor.com to view these requests/offers.';
      $headers = 'From: Supply Neighbor <contact@supplyneighbor.com>' . PHP_EOL .
      'Reply-To: Supply Neighbor <contact@supplyneighbor.com>' . PHP_EOL .
      'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
      
  }
  }
  }
?>