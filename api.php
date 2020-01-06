<?php
include_once 'includes/database.php';

if(isset($_GET['search'])){
    $places = DB::selectWhere('places', "title", $_POST['search']);
    echo json_encode($places);
}else if(isset($_GET['contact'])){
    echo json_encode(DB::insert('contact', $_POST, true));
}if(isset($_GET['login'])){
    echo json_encode(DB::login($_POST));
}else if(isset($_GET['editPlace'])){
    $r = DB::edit('places',$_POST);
    header('location: places-index.php');
}else if(isset($_GET['createPlace'])){
    if(isset($_FILES['picture'])){
        $name_file = Date('yms') . $_FILES['picture']['name'];
        $_POST['picture'] = 'imgs/'.$name_file;

        $sql = DB::insert('places', $_POST);

        if($sql == true){
            move_uploaded_file($_FILES['picture']['tmp_name'],'imgs/' . $name_file);
        }
    }
    header('location: index.php');
}else if(isset($_GET['logout'])){
    session_start();
    unset($_SESSION['USER']);
    session_destroy();
    header('location: index.php');
}else if(isset($_GET['p'])){
    $places = DB::paginate(['places', ($_GET['p'] - 1) * 9], 9);
    echo json_encode($places);
}


