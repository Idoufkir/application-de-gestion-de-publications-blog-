<?php include "includes/header.php" ?>
<?php include "includes/navigation.php" ?>
    <?php
    include('database/connexion.php');
    if(isset($_POST["email"]) && isset($_POST["password"])){

        $email = $_POST["email"];
        $password = $_POST["password"];
        $query = "SELECT * FROM `utilisateurs`";
        $result = $conn->query($query);
        $data = $result->fetchAll();


        if (isset($_POST["submit"])) {
          // code...
          for ($i=0; $i<count($data);$i++) {
              if($email==$data[$i]["email"] && $password == $data[$i]["password"]){

               $_SESSION["user"] = $email;
               $$_SESSION["nom"] = $data[$i]["nom"];

               header('location:Home.php');
              }
          }
        }

    }
    ?>
      <!-- Page Header -->
  <header class="masthead" style="background-image: url('img/contact-bg1.jpg')">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
          <div class="page-heading">
            <h1>Member Login</h1>
            <span class="subheading">Have questions? I have answers.</span>
          </div>
        </div>
      </div>
    </div>
  </header>

  <!-- Main Content -->
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-10 mx-auto">
        <p>Want to get in touch? Fill out the form below to send me a message and I will get back to you as soon as possible!</p>
        <!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
        <!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
        <!-- To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
    <form  method="POST">
    <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label for="email">Email Address</label>
              <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address."name="email">
              <p class="help-block text-danger"></p>
            </div>
          </div>
          <div class="control-group">
            <div class="form-group floating-label-form-group controls">
              <label for="password">Email Address</label>
              <input type="password" class="form-control" placeholder="Password" id="email" required data-validation-required-message="Please enter your password."name="password">
              <p class="help-block text-danger"></p>
            </div>
          </div><br>
      <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
      </div><br>
      <button type="submit" class="btn btn-primary" name="submit">Submit</button>
    </form>



<?php include "includes/footer.php" ?>
