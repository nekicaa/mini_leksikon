<?php

    Class Model{
        private $server = "localhost";
        private $username = "root";
        private $password;
        private $db = "journal";
        private $conn;

        public function __construct(){
            try {
                $this->conn = new mysqli($this->server,$this->username,$this->password,$this->db);
            } catch (Exception $e) {
                echo "connection failed" . e.getMessage();
            }
        }

        public function ret(){
            return $this->conn;
        }

        public function insert(){
            if (isset($_POST['submit'])) {
                if (isset($_POST['name']) && isset($_POST['nick']) && isset($_POST['phone']) && isset($_POST['place']) && isset($_POST['siblings']) && isset($_POST['birth']) && isset($_POST['friend']) && isset($_POST['note'])) {
                    if (!empty($_POST['name']) && !empty($_POST['nick']) && !empty($_POST['phone']) && !empty($_POST['place']) && !empty($_POST['siblings']) && !empty($_POST['birth']) && !empty($_POST['friend']) && !empty($_POST['note'])) {
                        
                        $name = $_POST['name'];
                        $nick = $_POST['nick'];
                        $phone = $_POST['phone'];
                        $place = $_POST['place'];
                        $siblings = $_POST['siblings'];
                        $birth = $_POST['birth'];
                        $friend = $_POST['friend'];
                        $note = $_POST['note'];

                        $query = "INSERT INTO records (name, nick, phone, place, siblings, birth, friend, note) VALUES ('$name','$nick','$phone','$place','$siblings','$birth','$friend','$note')";
                        if($sql = $this->conn->query($query)){
                            echo "<script>alert('Uspesno ste se upisali u Nevenin leksikon!');</script>";
                            echo "<script>window.location.href = 'index.php';</script>";
                        }else{
                            echo "<script>alert('Doslo je do greske :(');</script>";
                            echo "<script>window.location.href = 'fillform.php';</script>";
                        }
                    }else{
                        echo "<script>alert('Nije ispravno popunjeno');</script>";
                        echo "<script>window.location.href = 'fillform.php';</script>";
                    }
                }
            }
        }

        public function fetch(){
            $data = null;

            $query = "SELECT r.id, r.name, r.nick, r.phone, p.pname, r.siblings, r.birth, r.friend, r.note FROM records r JOIN places p ON r.place=p.id";
            if($sql = $this->conn->query($query)){
                while ($row = mysqli_fetch_assoc($sql)) {
                    $data[] = $row;
                }
            }
            return $data;
        }

        public function fetch_single($id){
            $data = null;
            
            $query = "SELECT r.id, r.name, r.nick, r.phone, p.pname, r.siblings, r.birth, r.friend, r.note FROM records r JOIN places p ON r.place=p.id WHERE r.id = '$id'";
            if ($sql = $this->conn->query($query)) {
                while ($row = $sql->fetch_assoc()) {
                    $data = $row;
                }
            }
            return $data;
        }

        public function delete($id){
            $query = "DELETE FROM records WHERE id = '$id'";
            if ($sql = $this->conn->query($query)) {
                return true;
            } else {
                return false;
            }
        }

        public function edit($id){
            $data = null;

            $query = "SELECT r.id, r.name, r.nick, r.phone, p.pname, r.siblings, r.birth, r.friend, r.note FROM records r JOIN places p ON r.place=p.id WHERE r.id = '$id'";
            if ($sql = $this->conn->query($query)) {
                while ($row = $sql->fetch_assoc()) {
                    $data = $row;
                }
            }
            return $data;
        }

        public function update($data){
            $query = "UPDATE records SET name='$data[name]', nick='$data[nick]', phone='$data[phone]', place='$data[place]', siblings='$data[siblings]', birth='$data[birth]', friend='$data[friend]', note='$data[note]' WHERE id='$data[id]'";
            if ($sql = $this->conn->query($query)) {
                return true;
            }else{
                return false;
            }
        }
    }

?>