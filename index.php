<?php
require_once ('EntityModel.php');
require_once ('EntityList.php');
require_once ('Users.php');

$allUsers = Users::where([])->select();

//Successfully infers type
$firstUser= $allUsers->first();
echo $firstUser->birthday;

//Does not infer type on the iteration
foreach($allUsers as $user){
    echo $user->birthday;
}