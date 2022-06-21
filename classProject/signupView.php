   <?php

    use function PHPSTORM_META\elementType;

    session_start();
    include 'users.php';


    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

        $newUser = new users();
        $newUser->name = $_POST['name'];
        $newUser->email =  $_POST['email'];
        $newUser->password =  $_POST['password'];
        $newUser->conf_pass =  $_POST['conf_pass'];
        $newUser->phone =  $_POST['phone'];
        $newUser->designation = $_POST['desi'];
        $newUser->role =  $_POST['role'];
        $newUser->doValidate();

        if (empty($newUser->getErr())) {
            $newUser->doRegister();
            header("Location: loginView.php");
            exit();
        } else {

            foreach ($newUser->getErr() as $err) {
                echo '<label class="form-label text-danger"><b> ' . $err . ' </b></label><br>';
            }
        }
    }

    if (isset($_POST['name'])) {
        $name = $_POST['name'];
    } else {
        $name = '';
    }
    if (isset($_POST['email'])) {
        $email = $_POST['email'];
    } else {
        $email = '';
    }
    if (isset($_POST['password'])) {
        $password = $_POST['password'];
    } else {
        $password = '';
    }
    if (isset($_POST['conf_pass'])) {
        $conf_pass = $_POST['conf_pass'];
    } else {
        $conf_pass = '';
    }
    if (isset($_POST['phone'])) {
        $number = $_POST['phone'];
    } else {
        $number = '';
    }
    if (isset($_POST['desi'])) {
        $desi = $_POST['desi'];
    } else {
        $desi = '';
    }

    ?>
   <html>

   <head>
       <title>Registration</title>
       <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

   </head>

   <body>
       <section class="vh-100" style="background-color: #eee;">
           <div class="container h-100">
               <div class="row d-flex justify-content-center align-items-center h-100">
                   <div class="col-lg-10 col-xl-11">
                       <div class="card text-black" style="border-radius: 25px;">
                           <div class="card-body p-md-4">
                               <div class="row justify-content-center">
                                   <div class="col-md-10 col-lg-5 col-xl-5 order-2 order-lg-1">

                                       <p class="text-center h2 fw-bold mb-4 mx-1 mx-md-4 mt-2">Sign up</p>

                                       <form class="mx-1 mx-md-4" method="POST">
                                           <div class="d-flex flex-row align-items-center mb-3">
                                               <i class="fa fa-user fa-lg me-3 fa-fw"></i>
                                               <div class="form-outline flex-fill mb-0">
                                                   <input type="text" id="form3Example1c" name="name" placeholder="Name" value="<?php echo $name; ?>" class="form-control" />

                                               </div>
                                           </div>

                                           <div class="d-flex flex-row align-items-center mb-3">
                                               <i class="fa fa-envelope fa-lg me-3 fa-fw"></i>
                                               <div class="form-outline flex-fill mb-0">
                                                   <input type="email" id="form3Example3c" name="email" placeholder="Email" value="<?php echo $email; ?>" class="form-control" />
                                               </div>
                                           </div>

                                           <div class="d-flex flex-row align-items-center mb-3">
                                               <i class="fa fa-lock fa-lg me-3 fa-fw"></i>
                                               <div class="form-outline flex-fill mb-0">
                                                   <input type="password" id="form3Example4c" name="password" placeholder="Password" value="<?php echo $password; ?>" class="form-control" />
                                               </div>
                                           </div>

                                           <div class="d-flex flex-row align-items-center mb-3">
                                               <i class="fa fa-key fa-lg me-3 fa-fw"></i>
                                               <div class="form-outline flex-fill mb-0">
                                                   <input type="password" id="form3Example4cd" name="conf_pass" placeholder="Confirm Password" value="<?php echo $conf_pass; ?>" class="form-control" />
                                               </div>
                                           </div>

                                           <div class="d-flex flex-row align-items-center mb-3">
                                               <i class="fa fa-phone fa-lg me-3 fa-fw"></i>
                                               <div class="form-outline flex-fill mb-0">
                                                   <input type="number" id="form3Example4cd" placeholder="Phone No." name="phone" value="<?php echo $phone; ?>" class="form-control" />
                                               </div>
                                           </div>
                                           <div class="d-flex flex-row align-items-center mb-3">
                                               <i class="fa fa-level-up fa-lg me-3 fa-fw"></i>
                                               <div class="form-outline flex-fill mb-0">
                                                   <input type="text" id="form3Example4cd" placeholder="Designation" name="desi" value="<?php echo $desi; ?>" class="form-control" />
                                               </div>
                                           </div>
                                           <div class="d-flex flex-row align-items-center mb-3">

                                               <h6 class="mb-2">Select Role: </h6>

                                               <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" name="role" id="admin" value="Admin" required />
                                                   <label class="form-check-label" for="admin">Admin</label>
                                               </div>

                                               <div class="form-check form-check-inline">
                                                   <input class="form-check-input" type="radio" name="role" id="visitor" value="Visitor" />
                                                   <label class="form-check-label" for="visitor">Visitor</label>
                                               </div>
                                           </div>
                                           <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-3">
                                               <button type="submit" class="btn btn-primary btn-lg">Register</button>
                                           </div>
                                           <p class="text-center text-muted mt-2 mb-0">Have already an account? <a href="loginView.php" class="fw-bold text-body"><u>Login here</u></a></p>

                                       </form>

                                   </div>

                               </div>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </section>



   </body>

   </html>