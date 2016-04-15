<?php
//define variables
$result = null;

//----------------------------------------app1 - dayere
function dayere($_radius = 5)
{
  global $result;
  if (empty($_radius))
  {
    $result.= "<b>ERROR</b> Enter the radius";
    return;
  }
  $result .= "Diameter= ".$_radius*2 . "<br />";
  $result .= "Environment= ". $_radius*2*3.1416. "<br />";
  $result .= "Area= ". $_radius*$_radius*3.1416. "<br />";
  echo $result;
}

//-----------------------------------------app2 - zarb taghsim
function zarb_taqsim($_first_num =5 ,$_second_num = 5)
{
  global $result;
  if ($_first_num > 9999 || $_second_num > 9999)
  {
    $result .= "the number is big.";
  }
  else
  {
  if (empty($_first_num || $_second_num))
  {
  echo "<b>ERROR</b> Enter the number";
  return;
  }

  function division($_first_num , $_second_num)
  {
    global $result;
    $_count=$_first_num;
    $GLOBALS['x'] = 0;
    while ($_count - $_second_num >= 0)
    {
      $_count -= $_second_num;
      $GLOBALS['x']++;
    }
    $result .= "division= ". $GLOBALS['x']. "<br>";
  }
  division($_first_num , $_second_num);
  function multiplication($_first_num , $_second_num)
  {
    global $result;
    define("ZARB2", $_first_num);
    for ($i=0; $i < $_second_num -1; $i++)
    {
      $_first_num += constant("ZARB2");
    }
    $result .= "multiplication= ". $_first_num. "<br>";
  }
  multiplication($_first_num , $_second_num);
}
echo $result;
}
//----------------------------------------------app3
function look($_side1 = 5, $_side2 = 5, $_side3 = 5)
{
  if (empty($_side1 && $_side2 && $_side3))
    {
        $result = "Height is empty";
        return;
    }
  elseif ( ($_side1 + $_side2)>$_side3 && ($_side2 + $_side3)>$_side1 && ($_side1+$_side3)>$_side2 )
  {
    $result = "triangel is drawable...";
  }
  else
  {
    $result = "Teiangel is not drawable...!!!!";
  }
  echo $result;
}


//----------------------------------------------app4
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

//----------------------------------------------app5
function power_2($_a = 1, $_b = 1, $_z =1)
{
  if (empty($_a || $_b || $_z))
  {
      echo "Fill the top boxes";
      return;
  }

  define("P", $_a);
  for ($i=0; $i < $_b-1; $i++)
  {

    $_a *= constant("P");
  }
  $result = "power(a,b)+z= ".($_a + $_z);
  return $result;
}

//----------------------------------------------app6
function write_even($_a = 1, $_b = 1)
{
  global $result;
  $sum = 0;
  if (empty($_a || $_b))
  {
      $result .= "Fill the top boxes";
      return;
  }
  if ($_a%2 === 0)
  {
    while ($_a < $_b-2)
    {
      $_a += 2;
      $result .= $_a." - ";
      $sum += $_a;
    }
    $result .= "<br> sum = " . $sum;
  }
    else
    {
        $_a = $_a+1;
        $result .= $_a." _ ";
        while ($_a < $_b-1)
        {
          $_a += 2;
          $result .= $_a." _ ";
          $sum += $_a;
        }
        $result .= "<br> sum = " . $sum;
    }
    return $result;
}

//----------------------------------------------app7
function draw_triangle($_height = 5, $_width = 5, $_fill = true)
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

//----------------------------------------------app8
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
//----------------------------------------------app9

function draw_triangel($_side, $_fill = true, $_direction = 1, $_shape= "*")

{
  echo "<pre>";
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
          for ($j=$_side; $j >$i ; $j--)
          {
            if ($_fill)
            {
              echo "$_shape";
            }
              else
              {
              if($j === $_side || $j === $i+1 ||
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

//----------------------------------------------app10

function min_max($_num = 1, $_seprate = "*")
{
  str_replace($_num, '', '^a-z');
  preg_replace("/[^A-Za-z]/", '', $_num);
  echo $_num;
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

//----------------------------------------------app11

function draw_triangel_2($_side = 5, $_fill = true, $_shape= "*")
{
  if (strlen($_shape) > 1)
  {
    $_shape ='*';
  }
  echo "<pre>";
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
    echo "</pre>";
}

//----------------------------------------------app12

function maghsoom($_num = 6)
{
  global $result;
  if (strlen($_num) > 5)
  {
    $result.= "<p>" . T_("This is a big number") . "</p>"."<br>" ;
  }
  $s = 0;
  for ($i=1; $i <= ($_num/2); $i++)
  {
    $r = $_num % $i;
    if ($r===0)
    {
      $result.= "<p> ". $i . " - </p>";
      $s++;
    }
  }
  $result .= "<br>" . "<p class='rtl'>" ."تعداد مقسوم علیه های عدد برابر است با: " . $s . "</p>

  ";
  return $result;
}

//----------------------------------------------app13

function adad($_num , $_seprate )
{
  $answer = [];
  $arr = explode($_seprate, $_num);
  foreach ($arr as $key => $value)
  {
    if (is_numeric($value) && !in_array($value, $answer))
    {
      $answer[] = $value;
    }
  }
  sort($answer);
  $count = count($answer);


  echo "<br>" . "<p> کوچکترین مقادیر:‌ ";
  for ($j=0; $j < 3; $j++)
  {
    if (isset($answer[$j]))
    {
      echo $answer[$j] . " ";
    }
  }
  echo "<br>" . "<p> بزرگترین مقادیر:‌ ";

  for ($h=$count-1 ; $h >= ($count-3) ; $h--)
  {
    if (isset($answer[$h]))
    {
    echo $answer[$h] . " ";
    }
  }
}

//----------------------------------------------app14

function average($a, $b)
{
  $average = ($a + $b)/2;
  return "average= " . $average;
}

?>
