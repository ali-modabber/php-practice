
<div class="program span8">
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
    <input type="submit" value="محاسبه" class="button">
  <hr>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    // collect value of input field
    $a = $_POST['a'];
    $b   = $_POST['b'];
    echo '<div class="answer"> <p>';
    write($a, $b);
    echo '</p> </div>';
}

function write($_a = 1, $_b = 1)
{
  if (empty($_a || $_b))
  {
      echo "Fill the top boxes";
      return;
  }
  if ($_a%2 === 0)
  {
    while ($_a < $_b-2)
    {
      $_a += 2;
      echo $_a." - ";
    }
  }
    else
    {
        $_a = $_a+1;
        echo $_a." _ ";
        while ($_a < $_b-1)
    {
      $_a += 2;
      echo $_a." _ ";
    }
    }

}

?>
</div>
