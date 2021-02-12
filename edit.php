<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Nevenin leksikon</title>
    </head>
    <body style="background-image: url('img/theme-3.jpg'); background-repeat: no-repeat; background-size: cover;">
        <ul class="nav justify-content-center" style="text-align: center; color: white; font-family: Papyrus, fantasy">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Pocetna</a>
            </li> 
            <li class="nav-item">
                <a class="nav-link active" href="fillform.php">Upisi se u leksikon</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="journal.php">Vidi leksikon</a>
            </li> 
        </ul>

        <div class="container">
            <div class="row">
                <div class="col-md-12 mt-5">
                    <h1 class="text-center" style="color: white; font-family: Papyrus, fantasy">NEVENIN LEKSIKON</h1>
                    <hr style="height: 1px;color: white;background-color: white;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mx-a" style="margin-left:auto;margin-right:auto;">

                    <?php
                    
                    include 'model.php';
                    $model = new Model();
                    $id = $_REQUEST['id'];
                    $row = $model->edit($id);

                    if (isset($_POST['update'])) {
                        if (isset($_POST['name']) && isset($_POST['nick']) && isset($_POST['phone']) && isset($_POST['place']) && isset($_POST['siblings']) && isset($_POST['birth']) && isset($_POST['friend']) && isset($_POST['note'])) {
                            if (!empty($_POST['name']) && !empty($_POST['nick']) && !empty($_POST['phone']) && !empty($_POST['place']) && !empty($_POST['siblings']) && !empty($_POST['birth']) && !empty($_POST['friend']) && !empty($_POST['note'])) {
                                
                                $data['id'] = $id;
                                $data['name'] = $_POST['name'];
                                $data['nick'] = $_POST['nick'];
                                $data['phone'] = $_POST['phone'];
                                $data['place'] = $_POST['place'];
                                $data['siblings'] = $_POST['siblings'];
                                $data['birth'] = $_POST['birth'];
                                $data['friend'] = $_POST['friend'];
                                $data['note'] = $_POST['note'];

                                $update = $model->update($data);

                                if ($update) {
                                    echo "<script>alert('Uspesno izmenjeni podaci');</script>";
                                    echo "<script>window.location.href = 'journal.php';</script>";
                                }else {
                                    echo "<script>alert('Nije uspesno izmenjeno');</script>";
                                    echo "<script>window.location.href = 'journal.php';</script>";
                                }

                            }else{
                                echo "<script>alert('Prazno je :(');</script>";
                                header("Location: edit.php?id=$id");
                            }
                        }
                    }

                    ?>

                    <form name="forma" action="" method="post">
                        <div class="form-group">
                            <label for="" style="color: white; font-family: Papyrus, fantasy">Ime i Prezime</label>
                            <input type="text" name="name" value="<?php echo $row['name'];?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" style="color: white; font-family: Papyrus, fantasy">Da li imas nadimak?</label>
                            <input type="text" name="nick" value="<?php echo $row['nick'];?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" style="color: white; font-family: Papyrus, fantasy">Broj telefona</label>
                            <input type="text" name="phone" value="<?php echo $row['phone'];?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" style="color: white; font-family: Papyrus, fantasy">Odakle si?</label>
                                <?php
                                    $conn = $model->ret();
                                    $query = "SELECT * FROM places";
                                    $pl = $conn->query($query);
                                ?>
                            <select class="form-control" name="place" id="place">
                                <option disabled selected value><?php echo $row['pname'];?></option>
                                <!-- this disables the function of update if not changed -->
                                <?php
                                    while ($ch=$pl->fetch_array()) {
                                ?>
                                <option value="<?php echo $ch['id'];?>"><?php echo $ch['pname'];?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="" style="color: white; font-family: Papyrus, fantasy">Da li imas brata ili sestru?</label>
                            <input type="text" name="siblings" value="<?php echo $row['siblings'];?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" style="color: white; font-family: Papyrus, fantasy">Datum rodjenja</label>
                            <input type="text" name="birth" value="<?php echo $row['birth'];?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" style="color: white; font-family: Papyrus, fantasy">Kako ti se zove najbolji drug/drugarica?</label>
                            <input type="text" name="friend" value="<?php echo $row['friend'];?>" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" style="color: #37404f; font-family: Papyrus, fantasy"><b>Poruka za vlasnika leksikona</b></label>
                            <textarea name="note" id="" cols="" rows="" class="form-control"><?php echo $row['note'];?></textarea>
                        </div>
                        <div class="form-group">
                            <button type="update" name="update" class="btn btn-primary" style="color: white; font-family: Papyrus, fantasy">Izmeni</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="phone-numeric.js"></script>
    </body>
</html>