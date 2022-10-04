<?php
require_once ('EntityModel.php');
require_once ('EntityList.php');
require_once ('Users.php');

$allUsers = Users::where([])->select();
$firstUser= $allUsers->first();
echo $firstUser->birthday;

foreach($allUsers as $user){
    echo $user->birthday;
}