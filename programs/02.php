<div class="program span8">
<form method="post">
<div class="span12">
<?php
  inputs_creat('number', 'عدد اول', 'first_num');
  inputs_creat('number', 'عدد دوم', 'second_num');
  inputs_creat('submit', 'محاسبه', 'null');
?>
<!--     <div class="inputs">
      <input type="number" name="first_num" id="first_num" placeholder=" ">
      <label class="inputs-label" for="first_num">عدد اول</label>
    </div>
    <br />
    <div class="inputs">
      <input type="number" name="second_num" id="second_num" placeholder=" ">
      <label class="inputs-label" for="second_num">عدد دوم</label>
    </div>
    <input type="submit" value="محاسبه" class="button"> -->
  </div>
  <hr>
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
	$first_num = $_POST['first_num'];
	$second_num = $_POST['second_num'];
  echo '<div class="answer">' . "<p>";
	zarb_taqsim($first_num, $second_num);
  echo "</p>" . "</div>";
}

function zarb_taqsim($_first_num =5 ,$_second_num = 5)
{
  if (empty($_first_num || $_second_num))
  {
	echo "<b>ERROR</b> Enter the number";
	return;
  }

  function division($_first_num , $_second_num)
  {
  	$_count=$_first_num;
  	$GLOBALS['x'] = 0;
  	while ($_count - $_second_num >= 0)
  	{
  		$_count -= $_second_num;
  		$GLOBALS['x']++;
   	}
   	echo "division= ". $GLOBALS['x']. "<br>";
  }
  division($_first_num , $_second_num);

  function multiplication($_first_num , $_second_num)
  {
    define("ZARB2", $_first_num);
  	for ($i=0; $i < $_second_num -1; $i++)
  	{

  		$_first_num += constant("ZARB2");

   	}
   	echo "multiplication= ". $_first_num. "<br>";
  }
  multiplication($_first_num , $_second_num);
}
?>
</div>