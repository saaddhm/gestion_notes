<!doctype html>
<html lang="en">
    <head>
        <title>Title</title>
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
        <link rel="stylesheet" href="assets/css/style.css">
    </head>

    <body class="bg-body-tertiary">
       <div class="container mt-5 p-2">
        <!-- add new student -->
       <form action="../php/update.php" method="post" class="mb-5">
      <div class="row">
        <div class="col-12 text-center">
            <h3>Update Student</h3>
        </div>
        <div class="col-4">
              <div class="input-group mb-3">
       <input type="text" class="form-control" name="nom" placeholder="Nom" aria-label="Nom" aria-describedby="basic-addon1" value="<?php  echo $_GET['nom'] ?>">
       </div>
        </div>
        <div class="col-4">
             <div class="input-group mb-3">
       <input type="text" class="form-control" name="prenom" placeholder="Prenom" aria-label="Prenom" aria-describedby="basic-addon1" value="<?php  echo $_GET['prenom'] ?>">
       </div>
        </div>
        <div class="col-4">
             <div class="input-group mb-3">
       <select   class="form-control" name="classe"   aria-describedby="basic-addon1" id="classes">
        <option value="<?php  echo $_GET['classe'] ?>" disabled><?php  echo $_GET['classe'] ?></option>
      </select>
      </div>
       </div>
       <div class="col-12 text-center ">
        <input type="hidden" name="ids" value="<?php  echo $_GET['id'] ?>">
        <button type="submit" class="btn btn-success " style="width: 100px;">Update</button>
       </div>
        </div>
    
       </form >


        <!-- all students table  -->

       </div>
        
       <script src="../js/script.js"></script>
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
