<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <title>Create Acconut</title>
</head>
<body>
    
<section class="vh-150" style="background-color: orange;">
  <div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-lg-12 col-xl-11">
        <div class="card text-black" style="border-radius: 100px;">
          <div class="card-body p-md-5">
            <div class="row justify-content-center">
              <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">

                <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>

                <form action="signupvalidate.php" method="POST" class="mx-1 mx-md-4">

                  <label class="form-label" for="age">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Enter Your Name</label>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-user fa-lg me-3 fa-fw"></i>&nbsp
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="name" placeholder="Enter Name here" id="name" class="form-control" />
                    </div>
                  </div>

                  <label class="form-label" for="age">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Enter Your Age</label>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-birthday-cake fa-lg me-3 fa-fw"></i>&nbsp
                    <div class="form-outline flex-fill mb-0">
                      <input type="number" name="age" placeholder="Enter Age here" id="age" class="form-control" />
                    </div>
                  </div>

                  <label class="form-label" for="age">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Enter Your Address</label>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-map-marked-alt fa-lg me-3 fa-fw"></i>&nbsp
                    <div class="form-outline flex-fill mb-0">
                      <input type="text" name="address" placeholder="Enter Address here" id="address" class="form-control">
                    </div>
                  </div>

                  <label class="form-label" for="age">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Enter Your Aadhar Card No.</label>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fa fa-address-card fa-lg me-3 fa-fw"></i>&nbsp
                    <div class="form-outline flex-fill mb-0">
                      <input type="number" name="aadhar" placeholder="Enter Aadhar card no. here" id="aadhar" class="form-control">
                    </div>
                  </div>

                  <label class="form-label" for="age">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Enter Your Email ID</label>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>&nbsp
                    <div class="form-outline flex-fill mb-0">
                      <input type="email" name = "email" placeholder="Enter Email ID here" id="email" class="form-control" />
                    </div>
                  </div>

                  <label class="form-label" for="age">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Enter Your Mobile no.</label>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-mobile-alt fa-lg me-3 fa-fw"></i>&nbsp
                    <div class="form-outline flex-fill mb-0">
                      <input type="number" name="mob" placeholder="Enter Mobile no. here" id="mob" class="form-control" />
                    </div>
                  </div>

                  <label class="form-label" for="age">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp  Set a Password for your Account</label>
                  <div class="d-flex flex-row align-items-center mb-4">
                    <i class="fas fa-lock fa-lg me-3 fa-fw"></i>&nbsp
                    <div class="form-outline flex-fill mb-0">
                      <input type="password" name="password" placeholder="Set Password here" id="password" class="form-control" />
                    </div>
                  </div>

                  <div class="form-check d-flex justify-content-center mb-5">
                    <input class="form-check-input me-2" type="checkbox" value="" id="abcd" />
                    <label class="form-check-label" for="abcd">
                    <br> I agree all statements in <a href="#!">Terms of service</a>
                    </label>
                  </div>

                  <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                    <button class="btn btn-primary btn-lg" type="submit" value="submit">Register</button>
                  </div>

                </form>

              </div>
              <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">

                <img src="images/signup.jpg"
                  class="img-fluid" alt="Sample image">

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