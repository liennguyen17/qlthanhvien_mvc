<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="danhsach mt-5 container ">
        <h2>Danh sách thành viên</h2>
    <table class="table table-hover mt-3 ">
  <thead>
    <tr class="table-primary">
      <th scope="col">STT</th>
      <th scope="col">Tên thành viên</th>
      <th scope="col">Năm sinh</th>
      <th scope="col">Quê quán</th>
      <th scope="col">Hành động</th>
    </tr>
  </thead>
  <tbody>
    <?php
        $stt = 1;
            foreach($data as $value){
    ?>
    <tr>
      <th scope="row"><?php echo $stt; ?></th>
      <td><?php echo $value['hoten'] ?></td>
      <td><?php echo $value['namsinh'] ?></td>
      <td><?php echo $value['quequan'] ?></td>
      <td>
        <a class="me-2" href="index.php?controller=thanhvien&action=edit&id=<?php echo $value['id']; ?>"><button type="button" class="btn btn-outline-primary">Chỉnh sửa</button></a>
        <a onclick="return confirm('Bạn có chắc chắn muốn xóa không ?')" href="index.php?controller=thanhvien&action=delete&id=<?php echo $value['id']; ?>"><button type="button" class="btn btn-outline-danger">Xóa</button></a>
      </td>
    </tr>
    <?php
        $stt++;
            }
    ?>
    </tbody>
</table>
    </div>
        <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>