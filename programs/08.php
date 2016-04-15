
<div class="program span8">
<form method="post">
  <div class="inputs">
    <input type="number" name="height" placeholder=" " id="height">
    <label class="inputs-label" for="height">height</label>
  </div>
  <br>
  <input type="radio" name="fill" value=1 checked class="radio">
  <label for="fill">پر</label>
  <input type="radio" name="fill" value=0 class="radio">
  <label for="fill">خالی</label>
  <input type="submit" value="Draw" class="button">
  <hr>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    // collect value of input field
    $height = $_POST['height'];
    $fill   = $_POST['fill'];

    draw_square($height, $fill);
}

function draw_square($_height = 5, $_fill = true)
{
  if (empty($_height))
    {
        echo "box is empty...<br>Fill it !!!";
        return;
    }

  echo('<pre>');
  for ($row=0; $row < $_height ; $row++)
  {
    for ($col=0; $col < $_height ; $col++)
    {
      if($_fill)
      {
        echo "*";
      }
      else
      {
        if($col === 0 || $col === $_height-1 ||
          $row === 0 ||$row === $_height-1
          )
        {
          echo "*";
        }
        else
        {
          echo " ";
        }
      }
    }
    echo('<br />');
  }
  echo('</pre>');
}


?>
</div>
