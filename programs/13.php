
<div class="program span8">
<form method="post">
  <div class="inputs">
    <input type="text" name="num" placeholder=" " id="num">
    <label class="inputs-label" for="num">عدد اول</label>
  </div>
  <br>
  <div class="inputs">
    <input type="text" name="seprate" placeholder=" " id="seprate">
    <label class="inputs-label" for="seprate">جدا کننده</label>
  </div>
    <br><br>
    <input type="submit" value="Calculate" class="button">
    <hr>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $num = $_POST['num'];
    $seprate = $_POST['seprate'];
    echo '<div class="answer"> <p>';
    adad($num , $seprate);
    echo "</p> </div>";
}

function adad($_num = 6, $_seprate =" ")
{
  $arr = explode($_seprate, $_num);
  sort($arr);
  $count = count($arr);


  echo "<br>" . "<p> کوچکترین مقادیر:‌ ";
  for ($j=0; $j < 3; $j++)
  {
    echo $arr[$j] . " ";
  }
  echo "<br>" . "<p> بزرگترین مقادیر:‌ ";

  for ($h=$count-1 ; $h >= ($count-3) ; $h--)
  {
    echo $arr[$h] . " ";
  }
}

?>
</div>
