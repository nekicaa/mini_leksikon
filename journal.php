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
                <div class="col-md-12 mx-a" style="margin-left:auto;margin-right:auto;">

                    <table class="table" style="color: #ba7d3e">
                        <thead>
                            <tr>
                                <th class="text-center"style="color: #ba7d3e; font-family: Papyrus, fantasy">Ime i prezime</th>
                                <th class="text-center"style="color: #ba7d3e; font-family: Papyrus, fantasy">Da li imas nadimak?</th>
                                <th class="text-center"style="color: #ba7d3e; font-family: Papyrus, fantasy">Broj telefona</th>
                                <th class="text-center"style="color: #ba7d3e; font-family: Papyrus, fantasy">Da li imas brata ili sestru?</th>
                                <th class="text-center"style="color: #ba7d3e; font-family: Papyrus, fantasy">Datum rodjenja</th>
                                <th class="text-center"style="color: #ba7d3e; font-family: Papyrus, fantasy">Kako ti se zove najbolji drug/drugarica?</th>
                                <th class="text-center"style="color: #ba7d3e; font-family: Papyrus, fantasy">Poruka za vlasnika leksikona</th>
                                <th class="text-center"style="color: #ba7d3e; font-family: Papyrus, fantasy">Akcije za upravljanje</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            
                                include 'model.php';
                                $model = new Model();
                                $rows = $model->fetch();
                                $i = 1;
                                if (!empty($rows)) {
                                    foreach ($rows as $row) {
                                        
                            ?>
                            <tr>
                                <td style="color: #37404f"><?php echo $row['name']; ?></td>
                                <td style="color: #37404f"><?php echo $row['nick']; ?></td>
                                <td style="color: #37404f"><?php echo $row['phone']; ?></td>
                                <td style="color: #37404f"><?php echo $row['siblings']; ?></td>
                                <td style="color: #37404f"><?php echo $row['birth']; ?></td>
                                <td style="color: #37404f"><?php echo $row['friend']; ?></td>
                                <td style="color: #37404f"><?php echo $row['note']; ?></td>
                                <td>
                                    <a style="color: white" href="read.php?id=<?php echo $row['id']; ?>">Vidi</a><br>
                                    <a style="color: white" href="delete.php?id=<?php echo $row['id']; ?>">Obrisi</a><br>
                                    <a style="color: white" href="edit.php?id=<?php echo $row['id']; ?>">Izmeni</a>
                                </td>
                            </tr>
                            <?php
                        
                                    }
                                } else {
                                    echo "Niko se nije upisao :(";
                                }
                        
                            ?>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>