<?php
$CURRENT_URL = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
$CURRENT_URL = strtok($CURRENT_URL, "?");

if(isset($_GET['lang']))
{
  $CURRENTLANG = $_GET['lang'];
}
elseif(isset($_COOKIE['lang']))
{
  $CURRENTLANG = $_COOKIE['lang'];
}
else
{
  $CURRENTLANG = 'en';
}
setcookie('lang', $CURRENTLANG, time() + (2169549 * 30));


// require current lang file
if(file_exists("Languages/$CURRENTLANG.php"))
{
  require_once "Languages/$CURRENTLANG.php";
  $txt_list = texts();
}

// set screen direction
if ($CURRENTLANG == "fa")
{
  $direction = "rtl";
}
elseif($CURRENTLANG == "en")
{
  $direction = "ltr";
}
// find translated text
function T_($_txt)
{
  global $txt_list;
  if(isset($txt_list[$_txt]))
  {
    return $txt_list[$_txt];
  }
  return $_txt;
}

$input_num = 1;
     $appname =
    [
      '01' =>[ 'title' => T_("calculation of circle"),                             'desc' => T_("enter te radius") ],
      '02' =>[ 'title' => T_("multiplication and division"),                       'desc' => T_("enter two numbers") ],
      '03' =>[ 'title' => T_("triangel drawing test"),                           'desc' => T_("enter three numbers") ],
      '04' =>[ 'title' => T_("power of numbers"),                       'desc' => T_("enter two numbers") ],
      '05' =>[ 'title' => T_("power + third number"),                            'desc' => T_("enter three number, (1s^2nd)+3rd") ],
      '06' =>[ 'title' => T_("print even numbers"),                            'desc' => T_("printing even numbers between 2 numbers") ],
      '07' =>[ 'title' => T_("draw Rectangular"),                             'desc' => T_("enter height an width to draw") ],
      '08' =>[ 'title' => T_("draw square"),                                 'desc' => T_("enter height to draw square") ],
      '09' =>[ 'title' => T_("draw triangular"),                                'desc' => T_("enter a number for triangular side") ],
      '10' =>[ 'title' => T_("calculate min & max"),                          'desc' => T_("enter several numbers then we will show min & max") ],
      '11' =>[ 'title' => T_("draw lozi"),                                  'desc' => T_("enter a number") ],
      '12' =>[ 'title' => T_("divided numbers"),                       'desc' => T_("enter a number") ],
      '13' =>[ 'title' => T_("3 small an 3 large numbers"),                  'desc' => T_("enter several numbers") ],
      '14' =>[ 'title' => T_("average of two numbers"),                  'desc' => T_("enter two numbers") ],
    ];


function print_list()
{
  global $appname;
  $result = "";
  foreach ($appname as $key => $value)
  {
    $value_title = $value['title'];
    if (isset($_GET['name']) && $key == $_GET['name']) {
      $result .= "<a href='?name=$key' class='active'>$value_title</a>";
    }
    else
    {
      $result .= "<a href='?name=$key'>$value_title</a>";
    }
  }
  return $result;
}

function print_home()
{
  global $appname;
  $result = "";
  foreach ($appname as $key => $value)
  {
      $value_title = $value['title'];
      $result .= "<a href='?name=$key' class='btn'>$value_title</a>";
  }
  return $result;
}

function print_detail()
{
  global $appname;
  if ( isset($_GET['name']) && isset($appname[$_GET['name']]))
  {
    return $appname[$_GET['name']];
  }
}

// create form elements
function inputs_creat($_type, $_title = null, $_name = null, $_place ='', $_max =10)
{

  switch ($_type) {
    case 'number':
      $element =
        "<div class='inputs'>
          <input type='number' name='$_name' id='$_name' placeholder=' ' value='$_place' required title='$_title' max=$_max  />
          <label for='$_name' class='inputs-label'>$_title</label>
        </div>
        <br>";
      break;

    case 'text':
      $element =
        "<div class='inputs'>
          <input type='text' name='$_name' id='$_name' placeholder=' ' value='$_place' required title='$_title' maxlength=$_max  />
          <label for='$_name' class='inputs-label'>$_title</label>
        </div>
        <br>";
      break;

    case 'radio':
      $element=
        "<div class='inputs'>
          <input type='radio' name='$_name' id='$_title' value='$_place' cheked required />
          <label for='$_title' >$_title</label>
        </div>
        <br>";
      break;
    case 'submit':
      $element = "<input type='submit' value='$_title' class='button' name='$_name'>";
      break;


    default:
      break;
  }
  echo $element;
}

function call_app($_app_name)
{
    global $result;
    echo "<form method='post'>";
  switch ($_app_name) {
    case '01':
    if (isset($_POST['radius']))
    {
      inputs_creat('number', T_('radius'), 'radius',$_POST['radius'], '999');
    }
    else
    {
      inputs_creat('number', T_('radius'), 'radius', '' ,'999');
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
      $radius = $_POST['radius'];
    }
      break;

    case '02':
    if (isset($_POST['first_num']) && isset($_POST['second_num']))
    {
     inputs_creat('number', T_('first num'), 'first_num', $_POST['first_num'], '999999');
     inputs_creat('number', T_('second num'), 'second_num', $_POST['second_num'], '999999');
   }
   else
   {
      inputs_creat('number', T_('first num'), 'first_num', '' ,'999999');
      inputs_creat('number', T_('second num'), 'second_num', '' ,'999999');
   }

      if ($_SERVER["REQUEST_METHOD"] == "POST")
      {
          $first_num = $_POST['first_num'];
          $second_num = $_POST['second_num'];
      }
      break;
    case '03':
    if (isset($_POST['side1']) && isset($_POST['side2']) && isset($_POST['side3']))
    {
      inputs_creat('number', T_('first side'), 'side1', $_POST['side1'], '999999');
      inputs_creat('number', T_('second side'), 'side2', $_POST['side2'], '999999');
      inputs_creat('number', T_('third side'), 'side3', $_POST['side3'], '999999');
    }
    else
    {
      inputs_creat('number', T_('first side'), 'side1', '' ,'999999');
      inputs_creat('number', T_('second side'), 'side2', '' ,'999999');
      inputs_creat('number', T_('third side'), 'side3', '' ,'999999');
    }

      if ($_SERVER["REQUEST_METHOD"] == "POST")
      {
        // collect value of input field
        $side1 = $_POST['side1'];
        $side2   = $_POST['side2'];
        $side3   = $_POST['side3'];
      }
      break;
    case '04':
     if (isset($_POST['a']) && isset($_POST['b']))
    {
      inputs_creat('number', T_('first num'), 'a', $_POST['a'], '999999');
      inputs_creat('number', T_('second num'), 'b', $_POST['b'],'10');
    }
    else
    {
      inputs_creat('number', T_('first num'), 'a','', '99999');
      inputs_creat('number', T_('second num'), 'b','', '20');
    }
     if ($_SERVER["REQUEST_METHOD"] == "POST")
      {
        $a = $_POST['a'];
        $b   = $_POST['b'];
      }
      break;
    case '05':
      if (isset($_POST['a']) && isset($_POST['b']) && isset($_POST['z']))
      {
        inputs_creat('number', T_('first side')  , 'a', $_POST['a'], '99999999');
        inputs_creat('number', T_('second side')  , 'b', $_POST['b'], '99999999');
        inputs_creat('number', T_('third side'), 'z', $_POST['z'], '99999999');
      }
      else
      {
        inputs_creat('number', T_('first side'), 'a', '', '99999999');
        inputs_creat('number', T_('second side'), 'b', '', '99999999');
        inputs_creat('number', T_('third side'), 'z', '', '99999999');
      }

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
          $a = $_POST['a'];
          $b = $_POST['b'];
          $z = $_POST['z'];
        }
        break;
    case '06':
      if (isset($_POST['a']) && isset($_POST['b']))
      {
        inputs_creat('number', T_('first num')  , 'a', $_POST['a'], '9999999');
        inputs_creat('number', T_('second num')  , 'b', $_POST['b'], '9999999');
      }
      else
      {
        inputs_creat('number', T_('first num'), 'a', '', '9999999');
        inputs_creat('number', T_('second num'), 'b', '', '9999999');
      }

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
          $a = $_POST['a'];
          $b = $_POST['b'];
        }
        break;
    case '07':
      if (isset($_POST['height']) && isset($_POST['width']))
      {
        inputs_creat('number', T_('first num')  , 'height', $_POST['height'],'80');
        inputs_creat('number', T_('second num')  , 'width', $_POST['width'],'80');
        echo "<div class='radios span3'>";
        inputs_creat('radio', T_('fill')  , 'fill', 1);
        inputs_creat('radio', T_('empty')  , 'fill', 0);
        echo "</div>";
      }
      else
      {
        inputs_creat('number', T_('first num'), 'height', '', '80');
        inputs_creat('number', T_('second num'), 'width', '', '80');

        inputs_creat('radio', T_('fill'),'fill', 1);
        inputs_creat('radio', T_('empty'),'fill', 0);
      }

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
          $height = $_POST['height'];
          $width = $_POST['width'];
          $fill = $_POST['fill'];
        }
        break;
    case '08':
      if (isset($_POST['height']) && isset($_POST['fill']))
      {
        inputs_creat('number', T_('height')  , 'height', $_POST['height'],'90');
        inputs_creat('radio', T_('fill')  , 'fill', 1);
        inputs_creat('radio', T_('empty')  , 'fill', 0);
      }
      else
      {
        inputs_creat('number', T_('height'), 'height','','90');
        inputs_creat('radio', T_('fill'),'fill', 1);
        inputs_creat('radio', T_('empty'),'fill', 0);
      }

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
          $height = $_POST['height'];
          $fill = $_POST['fill'];
        }
        break;
    case '09':
      if (isset($_POST['height']) && isset($_POST['shape']))
      {
        inputs_creat('number', 'height'  , 'height', $_POST['height'],'90');
        inputs_creat('text', T_('shape')  , 'shape', $_POST['shape'] ,'1');

        inputs_creat('radio', T_('fill')  , 'fill', 1);
        inputs_creat('radio', T_('empty')  , 'fill', 0);
        echo "<br>";
        // echo "
        // <select>
        // <option value = '1'>shape1</option>
        // <option value = '2'>shape2</option>
        // <option value = '3'>shape3</option>
        // <option value = '4'>shape4</option>
        // </select>";
        inputs_creat('radio', T_('shape1'),'direction', 1);
        inputs_creat('radio', T_('shape2'),'direction', 2);
        inputs_creat('radio', T_('shape3'),'direction', 3);
        inputs_creat('radio', T_('shape4'),'direction', 4);
      }
      else
      {
        inputs_creat('number', 'height', 'height','','90');
        inputs_creat('text', T_('shape') ,'shape','','1');

        inputs_creat('radio', T_('fill'),'fill', 1);
        inputs_creat('radio', T_('empty'),'fill', 0);
        echo "<br>";
        //         echo "
        // <select>
        // <option value = '1'>shape1</option>
        // <option value = '2'>shape2</option>
        // <option value = '3'>shape3</option>
        // <option value = '4'>shape4</option>
        // </select>";
        inputs_creat('radio', T_('shape1'),'direction', 1);
        inputs_creat('radio', T_('shape2'),'direction', 2);
        inputs_creat('radio', T_('shape3'),'direction', 3);
        inputs_creat('radio', T_('shape4'),'direction', 4);
      }

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
          $height = $_POST['height'];
          $direction = $_POST['direction'];
          $shape = $_POST['shape'];
          $fill = $_POST['fill'];
        }
        break;
    case '10':
      if (isset($_POST['num']) && isset($_POST['seprate']))
      {
        inputs_creat('text', T_('num')  , 'num', $_POST['num'], '30');
        inputs_creat('text', T_('seprate')  , 'seprate', $_POST['seprate'],'5');
      }
      else
      {
        inputs_creat('text', T_('num'), 'num', '', '30');
        inputs_creat('text', T_('seprate')  , 'seprate','','5');
      }

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
          $num = $_POST['num'];
          $seprate = $_POST['seprate'];
        }
        break;
    case '11':
      if (isset($_POST['side']) && isset($_POST['shape']))
      {
        inputs_creat('number', T_('side')  , 'side', $_POST['side'],'90');
        inputs_creat('text', T_('shape')  , 'shape', $_POST['shape'],'1');
        inputs_creat('radio', T_('fill'),'fill', 1);
        inputs_creat('radio', T_('empty'),'fill', 0);
      }
      else
      {
        inputs_creat('number', T_('side'), 'side','','90');
        inputs_creat('text', T_('shape')  , 'shape','','1');
        inputs_creat('radio', T_('fill'),'fill', 1);
        inputs_creat('radio', T_('empty'),'fill', 0);
      }

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
          $side = $_POST['side'];
          $shape = $_POST['shape'];
          $fill = $_POST['fill'];
        }
        break;
    case '12':
      if (isset($_POST['num']))
      {
        inputs_creat('number', T_('num')  , 'num', $_POST['num'],'999999');
      }
      else
      {
        inputs_creat('number', T_('num'), 'num','','999999');
      }

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
          $num = $_POST['num'];
        }
        break;
    case '13':
      if (isset($_POST['num']))
      {
        inputs_creat('text', T_('num') , 'num', $_POST['num'],'40');
        inputs_creat('text', T_('seprate') , 'seprate', $_POST['seprate'],'2');
      }
      else
      {
        inputs_creat('text', T_('num'), 'num','','40');
        inputs_creat('text', T_('seprate'), 'seprate','','2');
      }

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
          $num = $_POST['num'];
          $seprate = $_POST['seprate'];
        }
        break;
    case '14':
      if (isset($_POST['num']))
      {
        inputs_creat('number', T_('first num') , 'a', $_POST['a'],'9999999');
        inputs_creat('number', T_('second num') , 'b', $_POST['b'],'9999999');
      }
      else
      {
        inputs_creat('number', T_('first num'), 'a','','9999999');
        inputs_creat('number', T_('second num'), 'b','','9999999');
      }

        if ($_SERVER["REQUEST_METHOD"] == "POST")
        {
          $a = $_POST['a'];
          $b = $_POST['b'];
        }
        break;

    default:
      break;
  }
  inputs_creat('submit', T_('calculate'), 'null');
  echo "<hr>";
  echo "</form>";

  if ($_SERVER["REQUEST_METHOD"] == "POST")
  {
    echo '<div class="answer"> <p>';
    switch ($_app_name)
    {
      case '01':
        echo dayere($radius);
        break;
      case '02':
        echo zarb_taqsim($first_num, $second_num);
        break;
      case '03':
        echo look($side1, $side2, $side3);
        break;
      case '04':
        echo power($a, $b);
        break;
      case '05':
        echo power_2($a , $b , $z);
        break;
      case '06':
        echo write_even($a ,$b);
        break;
      case '07':
        echo draw_triangle($height, $width, $fill);
        break;
      case '08':
        echo draw_square($height , $fill);
        break;
      case '09':
        echo draw_triangel($height, $fill ,$direction, $shape);
        break;
      case '10':
        echo min_max($num, $seprate);
        break;
      case '11':
        echo draw_triangel_2($side, $fill, $shape);
        break;
      case '12':
        echo maghsoom($num);
        break;
      case '13':
        echo adad($num , $seprate);
        break;
      case '14':
        echo average($a, $b);
        break;


      default:
        break;
    }
    echo '</p> </div>';
  }

}

?>