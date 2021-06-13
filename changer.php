<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calculator</title>
  </head>
  <body>
      <h1>Exchange Your Dollars Into EGP</h1>
      <form action="#" method="post">
        <label for="usd">USD:</label>
        <input type="text" name="usd" id="usd">
        <input type="submit" name="submit" value="Exchange">
      </form>
      <?php //php code start
        $tax = 15.64; // salary of one dollar
        $usd = $_POST["usd"]; //save data

        $ex = $usd*$tax;

        echo "Your Dollars Equals: ". $ex . " EGP";
       ?>
  </body>
</html>
