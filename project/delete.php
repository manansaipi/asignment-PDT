<?php 
session_start();
if (!isset($_SESSION["login"])){
  header("location: login.php");
  exit;
}
require 'functions.php';

$id = $_GET["id"];

if(delete($id)>0){
    echo "  <script>
                alert('Data deleted!')
                document.location.href = 'centerPage.php'
            </script>";

} else {
    echo "<script>alert('erorr!') document.location.href = 'centerPage.php'</script>";
}