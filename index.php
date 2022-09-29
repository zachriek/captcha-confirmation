<?php
session_start();

if (isset($_POST['captcha'])) {
  if (strtolower($_POST['captcha_code']) === strtolower($_SESSION['captcha_code'])) {
    echo "<script>
    window.onload = function() {
      Swal.fire({
        icon: 'success',
        title: 'Success!',
        text: 'Captcha confirmation successfully!',
        showConfirmButton: false,
        timer: 1500
      });
    }
  </script>";
  } else {
    echo "<script>
    window.onload = function() {
      Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text: 'Captcha confirmation failed!',
        showConfirmButton: false,
        timer: 1500
      });
    }
  </script>";
  }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Captcha</title>
  <link rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N"
    crossorigin="anonymous">
</head>

<body>
  <section class="captcha my-5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-6 col-12">
          <div class="card">
            <div class="card-header bg-primary text-light">Captcha</div>
            <div class="card-body">
              <img class="img-thumbnail" src="captcha-gen.php" alt="captcha">
              <form action="" method="POST">
                <div class="form-group mt-3">
                  <label for="captcha_code">Confirm Captcha</label>
                  <input type="text" class="form-control" id="captcha_code"
                    name="captcha_code">
                </div>
                <button name="captcha" type="submit"
                  class="btn btn-primary shadow-sm">Confirm</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script
    src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct"
    crossorigin="anonymous"></script>
  <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>