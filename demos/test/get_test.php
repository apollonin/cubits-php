<?php
  require_once('../../lib/Cubits.php');
  require_once('../credentials.php');
  require_once('../configure.php');

  $cubits = Cubits::withApiKey($_API_KEY, $_API_SECRET);

  $params = array(
    'variable' => "value"
  );

  $temp = $cubits->getTest($params);

  echo $temp->status;
?>
