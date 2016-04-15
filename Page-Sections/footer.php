</div>
<footer>
  <a href="?name=about"><?php echo T_("Designed by Ali Modabber"); ?></a>
<?php
if (date('y') == 16)
{
  echo "&copy " . T_((2000 + date('y')));
}
else
{
echo " &copy" . T_(2016) ."-". T(date('y'));
}
?>
</footer>
</div>
</body>
</html>