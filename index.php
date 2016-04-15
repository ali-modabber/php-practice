<?php
require_once 'function_app.php';
require_once "function.php";
require_once 'Page-Sections/header.php';
if (isset($_GET['name']))
{
  if($_GET['name'] === 'about')
  {
    require_once 'Page-Sections/about_us.php';
  }
  else
  {
  require_once 'Page-Sections/aside.php';
  echo "<div class='program span8'>";
  echo "<p>";
  $app = print_detail("desc");
  echo $app["desc"];
  echo "</p>";
  call_app($_GET['name']);
  echo "</div>";
  }
}
else
{
  require_once 'Page-Sections/home.php';
}
  require_once 'Page-Sections/footer.php';
?>
  </div>
</div>
</body>
</html>