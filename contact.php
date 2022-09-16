<?php
  include_once('hms/include/config.php');
  if(isset($_POST['submit']))
  {
    $name=$_POST['fullname'];
    $email=$_POST['emailid'];
    $mobileno=$_POST['mobileno'];
    $dscrption=$_POST['description'];
    $query=mysqli_query($con,"insert into tblcontactus(fullname,email,contactno,message) value('$name','$email','$mobileno','$dscrption')");

    echo "<script>alert('Your information succesfully submitted');</script>";
    echo "<script>window.location.href ='contact.php'</script>";
  }
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="./bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="./fontawesome-free-5.9.0-web/css/all.min.css">
  <link rel="stylesheet" href="./css/style.css">
</head>

<body>
  <div class="container-fluid main">
    <div class="row my-2 d-flex justify-content-lg-between">
      <div class="col-lg-8 col-12 ">
        <p class="h2 text-primary">Hospital Management System</p>
      </div>
      <div class="col-lg-4 col-12 d-flex btn-group">
       <a href="index.php" class="btn btn-primary p-3 px-4">HOME</a>
                <a href="contact.php" class="btn btn-primary p-3 px-4">CONTACT</a>
      </div>
    </div>
    <div class="row d-flex justify-content-between">
      <div class="col-lg-4 ps-lg-5 p-2">
        <h4 class="text-secondary">Hospital Address:</h4>
        <p class="text-secondary">500 Lorem Ipsum Dolor Sit,
          22-56-2-9 Sit Amet, Lorem, <br>
          India <br>
          Phone: <a href="tel:(00)222666444" class="text-decoration-none">(00) 222 666 444</a><br>
          Fax: (000) 000 00 00 0<br>
          Email: <a href="mailto:info@mycompany.com" class="text-decoration-none">info@mycompany.com</a>
        </p>
      </div>
      <div class="col-lg-8">
        <h2 class="text-secondary mb-3">Contact Us</h2>
        <form method="post">
          <div class="mb-3 mt-3">
            <label for="fullname" class="form-label text-secondary">Name:</label>
            <input type="text" class="form-control" id="fullname" placeholder="Enter Name" name="fullname">
          </div>
          <div class="mb-3 mt-3">
            <label for="emailid" class="form-label text-secondary">Email:</label>
            <input type="email" class="form-control" id="emailid" placeholder="Enter email" name="emailid">
          </div>
          <div class="mb-3 mt-3">
            <label for="mobileno" class="form-label text-secondary">Contact no:</label>
            <input type="text" class="form-control" id="mobileno" placeholder="Enter Contact number" name="mobileno">
          </div>
          <div class="my-3">
            <label for="description" class="form-label text-secondary">Description:</label>
            <textarea class="form-control" rows="5" id="description" name="description"></textarea>
          </div>
          <button type="submit" name="submit" class="btn btn-primary" value="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>


  <script src="./bootstrap/js/bootstrap.min.js"></script>
  <script src="./js/script.js"></script>
</body>

</html>