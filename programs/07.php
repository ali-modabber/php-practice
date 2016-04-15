
<div class="program span8">
<form method="post">

  <div class="inputs">
    <input type="number" name="height" placeholder=" " id="height">
    <label for="height" class="inputs-label">adad</label>
  </div>
  <br>
  <div class="inputs">
    <input type="number" name="width" placeholder=" " id="width">
    <label for="width" class="inputs-label">adad</label>
  </div>
  <br>
    <input type="radio" name="fill" value=1 checked>
    <label for="fill">پر</label>

    <input type="radio" name="fill" value=0>
    <label for="fill">خالی</label>

    <input type="submit" value="رسم" class="button">
    <hr>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    // collect value of input field
    $height = $_POST['height'];
    $width = $_POST['width'];
    $fill   = $_POST['fill'];
    draw_square($height, $width, $fill);
}

function draw_square($_height = 5, $_width = 5, $_fill = true)
{
  if (empty($_height) && empty($_width))
    {
        echo "boxes are empty...<br>Fill them !!!";
        return;
    }
  elseif (empty($_height)) {
    $_height=$_width;
  }
  elseif (empty($_width)) {
    $_width=$_height;
  }

  echo('<pre>');
  for ($row=0; $row < $_height ; $row++)
  {
    for ($col=0; $col < $_width ; $col++)
    {
      if($_fill)
      {
        echo "*";
      }
      else
      {
        if($col === 0 || $col === $_width-1 ||
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
