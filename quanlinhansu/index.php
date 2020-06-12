<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        td,th {
            border: 1px solid #ccc;
        }
        form {
            width: 350px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    include "employyee.php" ;
    include "employeemanager.php" ;

    session_start() ;
    if(isset($_SESSION['employeemanager'])) {
        $employeemanager = $_SESSION['employeemanager'] ;
    } else {
        $employeemanager = new EmployeeManager() ;
    }
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST['name'] ;
        $email = $_POST['email'] ;
        $address = $_POST['address'] ;
        $phone = $_POST['phone'] ;
        $employ = new Employee($name,$email,$address,$phone) ;
        $employeemanager->addEmployee($employ) ;
        $_SESSION['employeemanager'] = $employeemanager ;
        $datas = $employeemanager->getData() ;
    }


  ?>



  <h2>FORM</h2> 
  <form method="post">
    <fieldset>
        <legend>Details</legend>
        name : <input type="text" name="name">
        <br> <br>
        E-mail : <input type="email" name="email">
        <br> <br>
        ADDRESS : <input type="text" name="address">
        <br> <br>
        Phone : <input type="text" name="phone">
        <br> <br>
        <input type="submit" name="submit" value="Register">
    </fieldset>
  </form>

  <h2>List</h2>
  <table>
      <tr>
          <th>Name</th>
          <th>Email</th>
          <th>ADDRESS</th>
          <th>Phone</th>
      </tr>
      <tr>
          <?php foreach ($datas as $data ) ?>
      </tr>
      <tr>
          <td><?= $data->name ; ?></td>
          <td><?= $data->email ; ?></td>
          <td><?= $data->address ; ?></td>
          <td><?= $data->phone ; ?></td>
      </tr>
  </table>
</body>
</html>