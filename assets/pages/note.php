<?php
require_once '../php/config.php';
session_start();

$id=$_GET['id'];
$_SESSION['id']=$id;

?>

<!doctype html>
<html lang="en">
    <head>
        <title>Note</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />
    </head>

    <body>
       

      <div class="container mt-5">
<form action="../php/note.php" method="post">
      <div class="row">
        <div class="col-12 text-center mb-2">

        <?php
$sql='select * from students where id='.$id;
$res=mysqli_query($db,$sql);
$row=mysqli_fetch_assoc($res);

?>
            <h2><?php echo $row['nom']." ".$row['prenom'];   ?></h2>
        </div>
        <div class="col-6">
             <div class="input-group mb-3">
       <select   class="form-control" name="matieres"   aria-describedby="basic-addon1" id="matiers">
        <option selected disabled>Matiers</option>
      </select>
      </div>
       </div>
       <div class="col-6">
        <input type="number" name="note" id="" min=0 max=20 step=0.10  class="form-control" placeholder="Note">
       </div>
       <div class="col-12 text-center">
        <button type="submit" class="btn btn-success">Valider</button>

       </div>


      </div>
      </form>
      </div> 









<script src="../js/matiers.js"></script>
        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>
    </body>
</html>
