<?php

    include 'model.php';
    $model = new Model();
    $id = $_REQUEST['id'];
    $delete = $model->delete($id);

    if ($delete) {
        echo "<script>alert('Uspesno ste obrisali podatke.');</script>";
        echo "<script>window.location.href = 'journal.php';</script>";
    }

?>