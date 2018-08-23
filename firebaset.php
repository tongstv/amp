<?php
set_time_limit(0);
require __DIR__.'/vendor/autoload.php';

use Kreait\Firebase\Factory;
use Kreait\Firebase\ServiceAccount;

use Kreait\Firebase\Firebase;
use Kreait\Firebase\Query;



// This assumes that you have placed the Firebase credentials in the same directory
// as this PHP file.
$serviceAccount = ServiceAccount::fromJsonFile(__DIR__.'/google-service-account.json');

$firebase = (new Factory)
    ->withServiceAccount($serviceAccount)
    // The following line is optional if the project id in your credentials file
    // is identical to the subdomain of your Firebase project. If you need it,
    // make sure to replace the URL with the URL of your project.
    ->withDatabaseUri('https://stvdb-1b7a7.firebaseio.com')
    ->create();

$database = $firebase->getDatabase();


$reference = $firebase->getReference('simso/');
$reference = $firebase->simso;

$data = $reference->getData();

print_r($data);

/*
$newPost->getKey(); // => -KVr5eu8gcTv7_AHb-3-
$newPost->getUri(); // => https://my-project.firebaseio.com/blog/posts/-KVr5eu8gcTv7_AHb-3-

$newPost->getChild('title')->set('Changed post title');
$newPost->getValue(); // Fetches the data from the realtime database



$db = new mysqli('timsim.com','slave2','@hyn210686','timsim_home') or die(mysql_info());



function sync($limit)
{
    ob_start();
    global $db, $database;
    
    if(!isset($bg)) $bg=0;
    else
    {
        $bg = $bg +$limit;
    }
    
    $query = $db->query("SELECT * FROM sim limit $bg,$limit");


while($row = $query->fetch_array(MYSQLI_ASSOC))
{
  
  $newPost = $database
    ->getReference('simso')
    ->push($row);
  
  echo $bg;
  
}
ob_end_flush();
if($query->num_rows >= $limit)
{
  sync($limit);   
}
}

sync(5000);
*/