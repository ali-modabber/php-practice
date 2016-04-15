
<div class="program span8">
<form method="post">
  <div class="inputs">
    <input type="number" name="side1" placeholder=" " id="side1">
    <label for="side1" class="inputs-label">ضلع اول</label>
  </div>
  <br />
  <div class="inputs">
    <input type="number" name="side2" placeholder=" " id="side2">
    <label for="side2" class="inputs-label">ضلع دوم</label>
  </div>
  <br />
  <div class="inputs">
    <input type="number" name="side3" placeholder=" " id="side3">
    <label for="side3" class="inputs-label">ضلع سوم</label>
  </div>
    <input type="submit" value="بررسی" class="button">
  <hr>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    // collect value of input field
    $side1 = $_POST['side1'];
    $side2   = $_POST['side2'];
    $side3   = $_POST['side3'];
    echo '<div class="answer"> <p>';
    look($side1, $side2, $side3);
    echo '</p> </div>';
}

function look($_side1 = 5, $_side2 = 5, $_side3 = 5)
{
  if (empty($_side1 && $_side2 && $_side3))
    {
        echo "Height is empty";
        return;
    }
  elseif ( ($_side1 + $_side2)>$_side3 && ($_side2 + $_side3)>$_side1 && ($_side1+$_side3)>$_side2 )
  {
    echo "triangel is drawable...";
  }
  else
  {
    echo "Teiangel is not drawable...!!!!";
  }

}


?>
</div>
