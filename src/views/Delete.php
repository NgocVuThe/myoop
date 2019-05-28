<?php
    require('../controller/Student.php');
    $id = $_GET['id'];
    $student = Student::delete();
?>