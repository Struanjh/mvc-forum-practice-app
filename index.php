<?php
//---------------ROUTER----------------//

//Scenarios: 
//1) Action not set - display list
//2) Action not found - display error
//3) 


$action = isset($_GET['action']) ? $_GET['action'] : 'list';

//VALID ACTIONS ['post', 'list']
// Use scandir() to GET FILE NAMES DYNAMICALLY TO POPULATE ABOVE LIST......
//IF URL ACTION ATTR NOT IN LIST, then wrong URL.....
//IF URL ACTION NOT SET.... return home page?
//include('./controller/' . $action . 'php')

switch($action) {
    case "list":
        include 'controller/list.php';
        break;
    case "showpost":
        include 'controller/post.php';
        break;
    case "addcomment":
        include 'controller/comment.php';
        break;
    case "deleteComment":
        include 'controller/comment.php';
        break;
    default:
        echo 'Nope youve chosen an invalid route';
        break;
}

