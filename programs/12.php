
<div class="program span8">

<form method="post">
  <div class="inputs">
    <input type="number" name="num" placeholder=" ">
    <label class="inputs-label" for="num">عدد</label>
  </div>
  <br><br>
    <input type="submit" value="Calculate" class="button">
    <hr>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $num = $_POST['num'];
    echo '<div class="answer"> <p>';
    maghsoom($num);
    echo "</p> </div>";
}
// echo "<pre>";
function maghsoom($_num = 6)
{
  $s = 0;
  for ($i=1; $i <= ($_num/2); $i++)
  {
    $r = $_num % $i;
    if ($r===0)
    {
      echo "<p>". $i . " </p>";
      $s++;
    }
  }
  echo "<br>" . "<p class='rtl'>" ."تعداد مقسوم علیه های عدد برابر است با: " . $s . "</p>

  ";
}

?>
</div>
