<html>
<head>
  <meta charset="utf8">
  <link rel="stylesheet" type="text/css" href="http://static.dev/css/font-awesome.min.css">
  <link rel="stylesheet" type="text/css" href="http://static.dev/css/ermile.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta charset="utf8">
</head>
<body class="<?php echo $direction?>">
<div class="main">
  <header>
    <div class="mosalas"></div>

<?php
if ($CURRENTLANG == "fa")
{
  echo " <a href='?lang=fa' class='languages lang_active'>فا</a>
         <a href='?lang=en' class='languages'>en</a>";
}
else
{
 echo "<a href='?lang=fa' class='languages'>فا</a>
       <a href='?lang=en' class='languages lang_active'>en</a>";
}
?>
<div class="span3">
  <a href="<?php echo $CURRENT_URL;?>" class="home_keys">Home</a>
  <a href="?name=about" class="home_keys">About us</a>
</div>
  </header>
  <div class="row auto">