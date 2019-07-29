<?php 
    

// $file = scandir('data', SCANDIR_SORT_DESCENDING);
$file = preg_grep('/^([^.])/', scandir('data', SCANDIR_SORT_DESCENDING));

$path = __DIR__ . "/Data/" . $file[0];
echo $path;
if(filesize($path) < 10737418240){

    $data = file_get_contents($path);
    print_r($data);
    $responses = json_decode($data);    
    array_push($responses,$_POST);

    $db = fopen($path, 'w') or die("Database connection error, contact admin");
    fwrite($db, json_encode($responses));
    
    

} 

print_r($db);





// fwrite($fp, json_encode($response));

//read content of data.json
//save it in a variable
//add the new data to it
//return back to json file

// return success page