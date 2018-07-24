<?php
    // $my_name = "Qianqian!";
    $my_name_form = $_GET["sender"];//give the value of <input> field
    // $friend_name = "Maomao";
    $friend_name_form =$_GET["recipient"];//The $_GET part is a special kind of variable called a superglobal
    $weather_form = $_GET["weather"];
    $location_form = $_GET["location"];
    $first_number = $_GET["first_number"];
    $second_number = $_GET["second_number"];
    $solution = $first_number + $second_number;
    $card_header = $my_name_form . " and " . $friend_name_form . "'s ";
    $bold_missing = str_repeat(strtoupper($friend_name_form). ", ", $solution);
    $code = nameAndLocationReverseCapitalize($my_name_form, $location_form);

    function nameAndLocationReverseCapitalize($name, $location)
    {
      $reversed_name = strrev($name);
      $reversed_location = strrev($location);
      $capitalized_name_location = strtoupper($reversed_name.$reversed_location);
      return $capitalized_name_location;
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>greeting card</title>
  </head>
  <body>
    <div class="container">
      <p><?php echo $card_header ?>card draft</p>
      <h1>Hi Dear <?php echo $friend_name_form ?>,</h1> <br>
      <p>This is from <?php echo $location_form ?> and today is so <?php echo $weather_form ?>.</p>
      <p><?php echo $friend_name_form ?>, I hope you were here!</p>
      <p>Hey, today my lucky number is <?php echo $solution ?>, try to find something related!</p>
      <p><?php echo $bold_missing ?>This is a code for you: <?php echo $code; ?></p><br>
      <p>Cheers,</p><br>
      <h1><?php echo $my_name_form  ?></h1>
    </div>
  </body>
</html>
