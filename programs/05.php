
<div class="program span8">
<h3 class="ltr">(a^b) +z =</h3>
<form method="post">
  <div class="inputs">
    <input type="number" name="a" placeholder=" " >
    <label class="inputs-label" for="a">a</label>
  </div>
  <br>
  <div class="inputs">
    <input type="number" name="b" placeholder=" " >
    <label class="inputs-label" for="b">b</label>
  </div>
  <br>
  <div class="inputs">
    <input type="number" name="z" placeholder=" ">
    <label class="inputs-label" for="z">z</label>
  </div>
    <input type="submit" value="محاسبه" class="button">
  <hr>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    // collect value of input field
    $a = $_POST['a'];
    $b   = $_POST['b'];
    $z   = $_POST['z'];
    echo '<div class="answer"> <p>';
    power($a, $b);
    echo "</p> </div>";
}

function power($_a = 1, $_b = 1, $_z =1)
{
  if (empty($_a || $_b || $_z))
  {
      echo "Fill the top boxes";
      return;
  }

  define("P", $_a);
  for ($i=0; $i < $_b-1; $i++)
  {

    $_a *= constant("P");
  }
  echo "power(a,b)+z= ".($_a+$_z);
}

?>
</div>