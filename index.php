<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css" type="text/css">
    <link href="css/styles.css" rel="stylesheet" type="text/css">
    <title>greetings</title>
  </head>
  <body>
    <div class="container">
      <h1>Fill in your infomation and get a card!<h1>
      <form action="greeting_card.php">
        <div class="form-group">
          <label for="sender">Your name</label>
          <input id="sender" name="sender" class="form-control" type="text" required>
        </div>
        <div class="form-group">
          <label for="recipient">Your friend's name</label>
          <input id="recipient" name="recipient" class="form-control" type="text" required>
        </div>
        <div class="form-group">
          <label for="weather">Weather today</label>
          <input id="weather" name="weather" class="form-control" type="text" required>
        </div>
        <div class="form-group">
          <label for="location">Your location</label>
          <input id="location" name="location" class="form-control" type="text" required>
        </div>
        <div class="form-group">
          <label for="first_number">Enter random first number</label>
          <input id="first_number" name="first_number" class="form-control" type="number" required>
        </div>
        <div class="form-group">
          <label for="second_number">Enter random second number</label>
          <input id="second_number" name="second_number" class="form-control" type="number" required>
        </div>
        <button type="submit" class="btn">Check my card!</button>
      </form>
    </div>
  </body>
</html>
