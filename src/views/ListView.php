<?php
    use App\Student\StudentController;
    // require 'src/controller/Student.php';
    $student = Student::all();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <h3 class="text-center">Student List</h3>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>STT</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Age</th>
                <th>Adress</th>
                <th>City</th>
                <th>
                    <a class="btn btn-sm btn-success" href="">Create</a>
                </th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($student as $key => $student): ?>
            <tr>
                <td><?= $key+1; ?></td>
                <td><?=$student->first_name?></td>
                <td><?= $student->last_name; ?> </a></td>
                <td><?= $student->age; ?></td>
                <td><?= $student->adress ; ?></td>
                <td><?= $student->city ; ?></td>
                <td>
                    <a class="btn btn-sm btn-primary" href="edit.php?id=<?=$student->id ?>">Sua</a>
                    <a class="btn btn-sm btn-danger" href="./delete.php?id=<?=$student->id?>">Xoa</a>
                </td>
            </tr>
            
        <?php endforeach ?>

        </tbody>
    </table>
</div>
</body>
</html>