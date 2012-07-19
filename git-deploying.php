<?php
$action = '';
//$basePath = "/www/sites/www.spruyt-hillen.nl/";
$basePath = "/www/cronjobs/tagtesting";
echo shell_exec("cd " . $basePath);


echo shell_exec('git pull');

?>