<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>PHP CRUD TUTORIAL - CREATE A DATA</title>
  </head>
  <body>
    <div class="container">
        <h1 class="mt-5 text-center">CREATE DATA</h1>

        <?php require_once("./controllers/create.php"); ?>

     <form action="#" method="post" class="mt-5">
         <div class="form-group mt-3">
             <label for="username">Username</label>
             <input type="text" name="username" placeholder="Enter a username" class="form-control">
         </div>
         <div class="form-group mt-3">
             <label for="email">Email</label>
             <input type="email" name="email" placeholder="Enter an email" class="form-control">
         </div>
         <div class="form-group mt-3">
             <label for="password">Password</label>
             <input type="password" name="password" placeholder="Enter a password" class="form-control">
         </div>
         <div class="form-group mt-3">
             <label for="address">Address</label>
             <input type="text" name="address" placeholder="Enter an address" class="form-control">
         </div>
         <button type="submit" name="register" class="btn btn-primary form-control mt-3">Create</button>
     </form>

     <a href="/index.php" class="btn btn-secondary form-control mt-3">Back</a>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
</html>