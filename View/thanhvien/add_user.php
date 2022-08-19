<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm thành viên - Quản lý thành viên</title>
</head>
<body>
    <div class="content">
    <div class="dangkythanhvien">
        <h3>Thêm mới thành viên</h3>
        <form action="" method="POST">
            <table>
                <tr>
                    <td>Tên thành viên : </td>
                    <td><input type="text" name="hoten" placeholder="Tên thành viên"></td>
                </tr>
                <tr>
                    <td>Năm sinh :</td>
                    <td><input type="text" name="namsinh" placeholder="Năm sinh"></td>
                </tr>
                <tr>
                    <td>Quê quán :</td>
                    <td><input type="text" name="quequan" placeholder="Quê quán"></td>
                </tr>
                <tr>
                    <td>&nbsp;</td>
                    <td><input type="submit" name="add_user" value="Thêm mới"></td>
                </tr>
            </table>
            
        </form>
        <?php
            if(isset($thanhcong) && in_array('add_success', $thanhcong)){
                echo "<p style='color: rgb(64, 179, 141); font-size: 25px ; text-align:center; font-weight: 700; margin-bottom: 20px;'>Thêm thành công</p>";
            }
        ?>
        <a href="index.php?controller=thanhvien&action=list" class="list"> Xem danh sách &#x2192;</a>
        </div>
    </div>
</body>
</html>