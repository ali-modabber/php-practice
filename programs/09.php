
<div class="program span8">

<form method="post">
<div class="inputs">
    <input type="number" name="side" placeholder=" " id="side">
    <label class="inputs-label" for="side">ضلع</label>
  </div>
  <br>
    <input type="radio" name="fill" value=1 checked>
    <label>پر</label>
    <input type="radio" name="fill" value=0>
    <label>خالی</label>
  <br>
  <div class="inputs">
    <input type="text" name="shape" placeholder=" " id="shape">
    <label class="inputs-label" for="shape">کاراکتر</label>
  </div>
  <br><br>
  <input type="radio" name="direction" value=1 checked>
  <label>1</label>
  <input type="radio" name="direction" value=2>
  <label>2</label>
  <input type="radio" name="direction" value=3>
  <label>3</label>
  <input type="radio" name="direction" value=4>
  <label>4</label>
    <input type="submit" value="Draw" class="button">
    <hr>
</form>
<pre>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    $side = $_POST['side'];
    $fill   = $_POST['fill'];
    $direction = $_POST['direction'];
    $shape = $_POST['shape'];
    echo "<div class='answer'>";
    draw_triangel($side, $fill ,$direction, $shape);
    echo "</p> </div>";
}
echo "<pre>";
function draw_triangel($_side = 5, $_fill = true, $_direction = 1, $_shape= "*")
{
  if (empty($_side))
    {
        echo "Enter a number in box...";
        return;
    }
    if ($_direction == 1)
    {
      for ($i=1; $i < $_side; $i++)
      {
          for ($j=1; $j <$i ; $j++) {
            if ($_fill)
            {
              echo "$_shape";
            }
        else
        {
          if($j === 1 || $j === $i-1 ||
            $i === 1 ||$i === $_side-1
            )
          {
            echo "$_shape";
          }
          else
          {
            echo " ";
          }
        }
      }
          echo('<br />');
      }
    }
    elseif ($_direction == 2)
    {
      for ($i=1; $i < $_side; $i++)
      {
          for ($j=10; $j >$i ; $j--)
          {
            if ($_fill)
            {
              echo "$_shape";
            }
              else
              {
              if($j === 10 || $j === $i+1 ||
              $i === 1 ||$i === $_side-1
              )
            {
              echo "$_shape";
            }
            else
            {
              echo " ";
            }
            }
          }
          echo('<br />');
      }
    }

    elseif ($_direction == 3)
    {
      for ($i=1; $i < $_side; $i++)
      {
          for ($j=$_side; $j >$i ; $j--) {
            echo " ";
          }
          for ($k=0; $k < $i; $k++) {
            if ($_fill)
            {
              echo "$_shape";
            }
            else
            {
              if ($i===1 || $i===$_side-1 ||
                  $k===$i-1 || $k=== 0) {
                echo "$_shape";
              }
              else {
                echo " ";
              }
            }

          }
          echo('<br />');
      }
    }

    elseif ($_direction == 4)
    {
      for ($i=1; $i < $_side; $i++)
      {
          for ($j=1; $j <$i ; $j++) {
            echo " ";
          }
          for ($k=$_side; $k > $i; $k--) {
            if ($_fill)
            {
              echo "$_shape";
            }
            else
            {
              if ($i===1 || $i===$_side-1 ||
                $k===$_side || $k===$i+1)
              {
                echo "$_shape";
              }
              else
              {
                echo " ";
              }
            }

          }
          echo('<br />');
      }
    }
  echo('</pre>');
}

?>

</pre>
</div>