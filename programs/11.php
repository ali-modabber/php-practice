
<div class="program span8">

<form method="post">
  <div class="inputs">
    <input type="number" name="side" placeholder=" " id="side">
    <label class="inputs-label" for="side">ضلع</label>
  </div>
  <br>
  <div class="inputs">
    <input type="text" name="shape" placeholder=" " id="shape">
    <label class="inputs-label" for="shape">شکل</label>
  </div>
  <br>
  <input type="radio" name="fill" value=1 checked>
  <label for="side">پر</label>
  <input type="radio" name="fill" value=0>
  <label for="side">خالی</label>
  <br><br>
    <input type="submit" value="Draw" class="button">
    <hr>
</form>
<pre>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $side = $_POST['side'];
    $fill   = $_POST['fill'];
    $shape = $_POST['shape'];
    echo "<div class='answer'>";
    draw_triangel($side, $fill, $shape);
    echo "</p> </div>";
}
function draw_triangel($_side = 5, $_fill = true, $_shape= "*")
{
  if (empty($_side))
    {
        echo "Enter a number in box...";
        return;
    }
  if ($_fill) {
    for ($row=1; $row <= $_side; $row++)
    {
      for ($col=$_side; $col >= $row; $col--)
      {
        echo(" ");
      }
      for ($col=1; $col <= $row; $col++)
      {
        echo "$_shape";

      }
      for ($col=1; $col <= $row; $col++)
      {
        echo "$_shape";
      }
      echo("<br>");
    }

    ////////////////////////////////////////////////

    for ($row=1; $row <= $_side; $row++)
    {
      for ($col=1; $col <= $row; $col++)
      {
        echo " ";
      }
      for ($col=$_side; $col >= $row; $col--)
      {
         echo "$_shape";
      }
      for ($col=$_side; $col >= $row ; $col--)
      {
        echo "$_shape";
      }
      echo "<br>";
    }
      }

  else
  {
      for ($row=1; $row <= $_side; $row++)
      {
        for ($col=$_side; $col >= $row; $col--)
        {
          echo(" ");
        }
        for ($col=1; $col <= $row; $col++)
        {
          if ($col === 1)
          {
          echo "$_shape";
          }
          else {
            echo " ";
          }

        }
        for ($col=1; $col <= $row; $col++)
        {
          if ($col == $row) {
            echo "$_shape";
          }
          else
          {
            echo " ";
          }
        }
        echo("<br>");
      }
      /////////////////////////////////////////////
      for ($row=1; $row <= $_side; $row++)
      {
        for ($col=1; $col <= $row; $col++)
        {
          echo " ";
        }
        for ($col=$_side; $col >= $row; $col--)
        {
          if ($col === $_side)
          {
            echo "$_shape";
          }
          else
          {
            echo " ";
          }
        }
        for ($col=$_side; $col >= $row ; $col--)
        {
          if ($col === $row)
          {
            echo "$_shape";
          }
          else
          {
            echo " ";
          }

        }
        echo "<br>";
      }
        }

}

?>
</pre>
</div>