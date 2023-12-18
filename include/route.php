<?php
include($_SERVER['DOCUMENT_ROOT'].'/blog/include/function.php');
include($_SERVER['DOCUMENT_ROOT'].'/blog/database/db.php');
include($_SERVER['DOCUMENT_ROOT'].'/blog/admin/controller/CategoryController.php');
include($_SERVER['DOCUMENT_ROOT'].'/blog/admin/controller/SubCategoryController.php');
<<<<<<< HEAD
$category= new  CategoryController($conn);
$sub_category= new  SubCategoryController($conn);
$route = $_GET['route'];
switch($route){
=======
$category = new CategoryController($conn);
$sub_category = new SubCategoryController($conn);

$route = $_GET['route'];

switch ($route) {
>>>>>>> 0655cc176beb39123deeb0192095c1b471a17906
    case "delete_category":
        return $category->delete();
    break;
    case "delete_sub_category":
        return $sub_category->delete();
    break;
<<<<<<< HEAD
default:
    echo false;
}
=======
    default:
      echo false;
  }
>>>>>>> 0655cc176beb39123deeb0192095c1b471a17906
