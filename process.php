<?php     

$file = preg_grep('/^([^.])/', scandir('data', SCANDIR_SORT_DESCENDING));
$path = __DIR__ . "/Data/" . $file[0];

file_put_contents($path, json_encode($_POST),FILE_APPEND);
file_put_contents("email.txt", $_POST['email']."\r\n",FILE_APPEND);

