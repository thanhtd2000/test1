<?php
include_once '../model/pdo.php';
include_once '../model/tour.php';
include "../views/block/header.php";
$selectCata = selectCata();
if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {

        case 'add':
            if (isset($_POST['add'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $file = $_FILES['image'];
                $image = $file['name'];

                $intro = $_POST['intro'];
                $description = $_POST['description'];
                $number_date = $_POST['number_date'];
                $price = $_POST['price'];
                $category_id = $_POST['category_id'];
                move_uploaded_file($file['tmp_name'], '../img/' . $image);
                add($name, $image, $intro, $description, $number_date, $price, $category_id);
                echo "<script> window.location.href='index.php?act=home'</script>";
            }
            include "../views/add.php";

            break;
        case 'home':
            $loadAlltour = selectAllTour();
            include "../views/home.php";
            break;
        case 'del':
            $id = $_GET['id'];
            deleTour($id);
            echo "<script> window.location.href='index.php?act=home'</script>";
            break;
        case 'edit':
            $id = $_GET['id'];
            $loadtour = selectTour($id);
            if (isset($_POST['add'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];
                $file = $_FILES['image'];
                $image = $file['name'];

                $intro = $_POST['intro'];
                $description = $_POST['description'];
                $number_date = $_POST['number_date'];
                $price = $_POST['price'];
                $category_id = $_POST['category_id'];
                move_uploaded_file($file['tmp_name'], '../img/' . $image);
                edit($id, $name, $image, $intro, $description, $number_date, $price, $category_id);
                echo "<script> window.location.href='index.php?act=home'</script>";
            }
            include "../views/edit.php";

            break;
        default:
            $loadAlltour = selectAllTour();
            include "../views/home.php";
            break;
    }
}
include "../views/footer.php";
