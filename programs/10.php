
<div class="program span8">

<form method="post">
  <div class="inputs">
    <input type="text" name="num" placeholder=" " id="num">
    <label class="inputs-label" for="num">اعداد</label>
  </div>
  <br>
  <div class="inputs">
    <input type="text" name="seprate" placeholder=" " id="seprate">
    <label class="inputs-label" for="seprate">جدا کننده</label>
  </div>
  <br><br>
    <input type="submit" value="محاسبه" class="button">
    <hr>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $num = $_POST['num'];
    $seprate   = $_POST['seprate'];

    echo "<div class='answer'>";
    min_max($num , $seprate);
    echo "</p> </div>";
}
function min_max($_num = 1, $_seprate = "*")
{
  if (empty($_num)|| empty($_seprate) )
    {
        echo "Fill the box...";
        return;
    }

    $numbers = explode($_seprate, $_num);
    sort($numbers);
    echo "کمترین مقدار = " . $numbers[0] . "<br>";
    rsort($numbers);
    echo "بیشترین مقدار = " . $numbers[0];
}
?>
</div>