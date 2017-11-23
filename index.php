<?php
require_once 'Controller/Page.class.php';

if(isset($_GET['url']))
  Page::getView($_GET['url']);

else
  header('Location: ?url=index');

?>