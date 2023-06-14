<?php
include "../config/bd.php";
$id = $_GET["id"];
$sql = "DELETE FROM `registro_nuevo` WHERE id = $id";
$result = mysqli_query($conexion, $sql);

if ($result) {
  header("Location: index.php?msg=Data deleted successfully");
} else {
  echo "Failed: " . mysqli_error($conn);
}