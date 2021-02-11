<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <title>Nevenin leksikon</title>
    </head>
    <body style="background-image: url('img/theme-5.jpg'); background-repeat: no-repeat; background-size: cover;">
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
                    <h1 class="text-center" style="color: #37404f; font-family: Papyrus, fantasy"><b>NEVENIN LEKSIKON</b></h1>
                    <hr style="height: 1px;color: #ba7d3e;background-color: #ba7d3e;">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 mx-auto" style="margin-left:auto;margin-right:auto;">

                    <?php
                    
                        include 'model.php';
                        $model = new Model();
                        $id = $_REQUEST['id'];
                        $row = $model->fetch_single($id);
                        if(!empty($row)){
                    
                    ?>

                    <div class="card">
                        <div class="card-header" style="background: #cccdd1">
                            <p class="text-center" style="color: #37404f; font-family: Papyrus, fantasy; font-size: 28px"><?php echo $row['id']; ?>. <?php echo $row['name'];?></p>
                        </div>
                        <div class="card-body text-center" style="background: #fef7ef; color: #37404f; font-family: Papyrus, fantasy; font-size: 20px">
                            <p><b>Ime i prezime:</b> <?php echo $row['name']; ?></p>
                            <p><b>Nadimak:</b> <?php echo $row['nick']; ?></p>
                            <p><b>Broj telefona:</b> <?php echo $row['phone']; ?></p>
                            <p><b>Odakle si:</b> <?php echo $row['pname']; ?></p>
                            <p><b>Braca/sestre:</b> <?php echo $row['siblings']; ?></p>
                            <p><b>Datum rodjenja:</b> <?php echo $row['birth']; ?></p>
                            <p><b>Najbolji drug/drugarica:</b> <?php echo $row['friend']; ?></p>
                            <p><b>Poruka za vlasnika leksikona:</b> <?php echo $row['note']; ?></p>
                        </div>
                    </div>
                    <?php
                        }else{
                            echo "Nema podataka :(";
                        }
                    ?>
                </div>
            </div>
        </div>

        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>