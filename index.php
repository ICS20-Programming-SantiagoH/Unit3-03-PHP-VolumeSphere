<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="Volume of a Sphere">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Santiago Hewett">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>Volume of a Sphere</title>
  </head>
  <body>
    <!-- php echo to print the html to the page -->
<?php 
echo "<h1>Volume of a Sphere</h1>";
echo "<h3>This program will calculate the volume of a sphere.</h3>";
?>
<!-- form to get the measurements from the user -->
    <form action="./results.php" method="post" target="results">
      <label for=lblRadius">Radius (cm):</label>
      <input type="text" id="radius" placeholder="Enter the radius" name="radius"><br><br>
      <input type="submit" value="Calculate">
    </form>
    
    <!-- iframe for the results to show on the web page. -->
    <iframe id="results" name="results">			
      The volume of the sphere is " + $volume + "cm³"
    </iframe>
  </body>
</html>