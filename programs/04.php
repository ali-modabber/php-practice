

<div class="program span8">
<h2>power = a^b</h2>
<form method="post">
    <div class="inputs">
     <input type="number" name="a" placeholder=" " id="a">
     <label for="a" class="inputs-label">عدد اول</label>
    </div>
    <br>
    <div class="inputs">
     <input type="number" name="b" placeholder=" " id="b">
     <label for="b" class="inputs-label">عدد دوم</label>
    </div>
  <input type="submit" value="Calculate" class="button">
  <hr>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    // collect value of input field
    $a = $_POST['a'];
    $b   = $_POST['b'];
    power($a, $b);
}

function power($_a = 2, $_b = 2)
{
  if (empty($_a || $_b))
  {
      echo "Fill the top boxes";
      return;
  }

  define("P", $_a);
  for ($i=0; $i < $_b-1; $i++)
  {

    $_a *= constant("P");
  }
  echo "power= ".$_a;
}

?>
</div>