<?php


if(isset($_POST['edit_info_game']) && isset($_POST['game_id']))
{   
    $game_id=$_POST['game_id']; 


    $arr = array('game_image_url' => "https://steamcdn-a.akamaihd.net/steam/apps/400940/header_292x136.jpg?t=1560862004", 
                 'game_url' => "null", 
                 'game_name' => "para", 
                 'game_info' => "asd");

    echo json_encode($arr);
}
// if(isset($_POST['earn_info_game']) && isset($_POST['game_id']))
// {   
//     $game_id=$_POST['game_id']; 




//     echo json_encode($arr);
// }



?>