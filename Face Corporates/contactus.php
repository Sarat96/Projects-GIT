<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet"> 
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="style.css">
    <title>Contact Us | FACE Corporates</title>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light navbar-contactus" id="navbar-top">
        <a class="navbar-brand" href="index.html"><img src="images/facelogo.png" width="120px"/></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
          
          <ul class="nav navbar-nav ml-auto w-100 justify-content-end">
            <li class="nav-item">
                <a class="nav-link" href="products.html">Products</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="customers.html">Customers</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="company.html">Company</a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" href="#">Contact Us</a>
            </li>
        </ul>
        </div>
      </nav>

    <section id="contact-top-banner">
    <div class="wrapper">
      <div class="container">
        <h2>Talk to a Human</h2>
        <p>We are here to provide you with new information, answer any questions you may have, and create an effective solution for your training needs.</p>
      </div>
    </div>
   </section>
    </header>

   <section id="main-content-contact">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <h3>FACE strives to provide the best service possible with every contact.</h3>
          <p>We operate in an industry built on trust. This can only be achieved through communication and experienced support - from the first contact till we celebrate the fifth year of our partnership.<br><br>Whether you are looking to improve your training methods or initiate completely new ones, our Account Executives will help you make smart decisions that best meet your needs.<br><br>Have questions about our training solutions?<br>Our entire customer support team is geared to handle any doubts. From basic questions to complex inquiries, we are here to help! </p>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-5">
          <h3 class="address">Corporate Office</h3>
          <p class="address-details">FACE, No. 653, 23rd Main,<br>Parangi Palaya, Sector 2,<br>HSR Layout, Bengaluru,<br>Karnataka-560102.</p>
          <h3 class="address">Direct Contact</h3>
          <p class="address-details">Phone: +91 9884371824<br>Email: corporates@focusacademy.in </p>
        </div>
        </div>
      </div>
    </div>
   </section>

<?php 
include 'connect.php';


?>
   <section id="contact-form">
    <div class="container">
      <h2>Contact Us Today</h2>
      <form action="" method="post">
        <div class="row">
          <div class="col">
            <label for="firstname">First Name <span class="form-required">*</span></label>
            <input type="text" class="form-control" id="firstname" name="firstname" required autofocus>
          </div>
          <div class="col">
            <label for="lastname">Last Name <span class="form-required">*</span></label>
            <input type="text" class="form-control" id="lastname" name="lastname" required>
          </div>
        </div><br>
        <div class="row">
          <div class="col">
            <label for="email">Email <span class="form-required">*</span></label>
            <input type="email" class="form-control" id="email" name="email" required>
          </div>
          <div class="col">
            <label for="phonenumber">Phone Number <span class="form-required">*</span></label>
            <input type="text" class="form-control" id="phonenumber" pattern="[1-9]{1}[0-9]{9}" name="phone" required>
          </div>
        </div><br>
        <div class="row">
          <div class="col">
            <label for="company">Company <span class="form-required">*</span></label>
            <input type="text" class="form-control" id="company" name="company" required>
          </div>
          <div class="col">
            <label for="details">Details</label>
            <textarea class="form-control" id="details" name="details" rows="3"></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary mb-2 btn-lg">SUBMIT</button>
      </form>
    </div>
   </section>

<?php 
include 'connect.php';
$firstname = $_POST["firstname"];
$lastname = $_POST["lastname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$company = $_POST["company"];
$details = $_POST["details"];

  $sql = "INSERT INTO contact (firstname, lastname, email, phone, company, details) VALUES ('$firstname', '$lastname', '$email', $phone, '$company', '$details')";

if ($conn->query($sql) === TRUE) {
    ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert" style="text-align:center; margin-bottom:0;">
      <strong>Thank you for the details!</strong> Someone from our team will get in touch with you shortly.
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <?php 

    $EmailFrom = $_POST['email']; 
    $EmailTo = "aquib@tabdeel.in";
    $Subject = "New Contact Request";
        
    // prepare email body text
      $Body = "";
      $Body .= "First Name: ";
      $Body .= $firstname;
      $Body .= "\n";
      $Body .= "Last Name: ";
      $Body .= $lastname;
      $Body .= "\n";
      $Body .= "Email: ";
      $Body .= $email;
      $Body .= "\n";
      $Body .= "Phone Number: ";
      $Body .= $phone;
      $Body .= "\n";
      $Body .= "Company: ";
      $Body .= $company;
      $Body .= "\n";
      $Body .= "Details: ";
      $Body .= $details;
      $Body .= "\n";

      // send email 
      $success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

    if($success)
      http_response_code(200);
    
  }

$conn->close();
?>



    <footer id="footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-10">
            <p>Campus to Corporate Program | High Impact Workshops | Product and Process Training | Campus Hiring Solutions</p>
          </div>
          <div class="col-sm-2">
             <p>Terms & Privacy</p>
          </div>
        </div>
          <hr>
        <div class="row">
          <div class="col-sm-10">
          <p>FACE, Thottipalayam Pirivu, Coimbatore   9884371844   corporates@focusacademy.in</p>
          </div>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-12">
          <p style="text-align: center;">Developed by Sarat Chandra</p>
          </div>
          </div>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>