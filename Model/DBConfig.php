<?php
    class Database{
        private $hostname = 'localhost';
        private $username = 'root';
        private $pass = '';
        private $dbname = 'qlthanhvien_mvc';

        private $conn = NULL;
        private $result = NULL;

        public function connect()
        {
            $this->conn = new mysqli($this->hostname, $this->username, $this->pass, $this->dbname);
            if(!$this->conn){
                echo "Kết nối thất bại";
                exit();
            }
            else{
                mysqli_set_charset($this->conn, 'utf8');
            }
            return $this->conn;
        }

        //truy van
        public function execute($sql)
        {
            $this->result = $this->conn->query($sql);
            return $this->result;
        }

        //lay du lieu
        public function getData()
        {
            if($this->result){
                $data = mysqli_fetch_array($this->result);
            }
            else{
                $data = 0;
            }
            return $data;
        }

        //lay toan bo du lieu
        public function getAllData($table)
        {
            $sql = "SELECT * FROM $table";
            $this->execute($sql);
            if($this->num_rows()==0){
                $data = 0;
            }
            else{
                while($datas = $this->getData()){
                    $data[] = $datas;
                }
            }
            return $data;
        }

        //dem so ban ghi
        public function num_rows()
        {
            if($this->result){
                $num = mysqli_num_rows($this->result);
            }
            else{
                $num = 0;
            }
            return $num;
        }

        //them du lieu
        public function InsertData($hoten, $namsinh, $quequan)
        {
            $sql = "INSERT INTO thanhvien(id, hoten, namsinh, quequan) VALUES(null, '$hoten', '$namsinh', '$quequan')";
            return $this->execute($sql);
        }

        //sua du lieu
        public function UpdateData($id,  $hoten, $namsinh, $quequan)
        {
            $sql = "UPDATE thanhvien SET hoten = '$hoten', namsinh = '$namsinh', quequan = '$quequan' WHERE id = '$id'";
            return $this->execute($sql);
        }

        //xoa du lieu
        public function Delete($id)
        {
            $sql = "DELETE FROM thanhvien WHERE id='$id'";
            return $this->execute($sql);
        }

    }
?>