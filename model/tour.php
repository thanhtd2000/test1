<?php
function selectAllTour()
{
    $sql = "SELECT * FROM tours";
    $loadAlltour = pdo_query($sql);
    return $loadAlltour;
}
function deleTour($id)
{
    $sql = "DELETE FROM tours WHERE id = $id";
    pdo_execute($sql);
}
function add($name, $image, $intro, $description, $number_date, $price, $category_id)
{
    $sql = "INSERT INTO tours( name, image, intro, description, number_date, price, category_id) VALUES ('$name','$image','$intro','$description','$number_date','$price','$category_id')";
    pdo_execute($sql);
}
function edit($id, $name, $image, $intro, $description, $number_date, $price, $category_id)
{
    if ($image != "") {
        $sql = "UPDATE tours SET name='$name',image='$image',intro='$intro',description='$description',number_date='$number_date',price='$price',category_id='$category_id' WHERE id = $id";
    } else {
        $sql = "UPDATE tours SET name='$name',intro='$intro',description='$description',number_date='$number_date',price='$price',category_id='$category_id' WHERE id = $id";
    }
    pdo_execute($sql);
}
function selectTour($id)
{
    $sql = "SELECT * FROM tours where id = $id";
    $loadtour = pdo_query_one($sql);
    return $loadtour;
}
function selectCata()
{
    $sql = "SELECT * FROM categories ";
    $selectCata = pdo_query($sql);
    return $selectCata;
}
