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
                <a class="nav-link active" href="index.php">Upisi se u leksikon</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="predstave.php">Vidi leksikon</a>
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
                <div class="col-md-4 mx-a" style="margin-left:auto;margin-right:auto;">

                    <form action="" method="post">
                        <div class="form-group">
                            <label for="" style="color: white; font-family: Papyrus, fantasy">Ime i Prezime</label>
                            <input type="text" name="name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" style="color: white; font-family: Papyrus, fantasy">Nadimak</label>
                            <input type="text" name="nick" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" style="color: white; font-family: Papyrus, fantasy">Broj telefona</label>
                            <input type="text" name="phone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="" style="color: white; font-family: Papyrus, fantasy">Address</label>
                            <textarea name="address" id="" cols="" rows="" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" name="submit" class="btn btn-primary" style="color: white; font-family: Papyrus, fantasy">Submit</button>
                        </div>
                    </form>

                </div>
            </div>
        </div>

        
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>