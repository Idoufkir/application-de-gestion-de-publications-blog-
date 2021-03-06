<?php  include "includes/header.php"; ?>

<?php include "includes/navigation.php" ?>

<?php
include('database/connexion.php');
if(isset($_POST["id_utilisateur"]) && isset($_POST["nom"]) && isset($_POST["email"]) && isset($_POST["password"])){
    $id_utilisateur = $_POST["id_utilisateur"] ;
    $nom = $_POST["nom"] ;
    $email = $_POST["email"] ;
    $password = $_POST["password"] ;
    //$admin = $_POST["admin"];
    $n = 0;

    $query="INSERT into utilisateurs values('".$id_utilisateur."','".$nom."','".$email."','".$password."')";

    $conn->query($query);
      header('location:login.php');

}
?>
<section class="page-section" id="contact">
    <div class="container">
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Créer un nouveau compte</h2>
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <form id="contactForm" name="sentMessage" novalidate="novalidate" method="post">
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Id_User</label><input class="form-control" name="id_utilisateur" type="hidden" placeholder="ID" required="required" data-validation-required-message="Please enter your id." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>User_Name</label><input class="form-control" name="nom" type="text" placeholder="Nom utilisateur" required="required" data-validation-required-message="Please enter your UserName ." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Email address</label><input class="form-control" name="email" type="email" placeholder="Email .." required="required" data-validation-required-message="Please enter your email address." />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Password</label><input class="form-control" name="password" type="password" placeholder="password" required="required" data-validation-required-message="Please enter your password.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <!-- <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Admin</label><input class="form-control" name="admin" type="number" placeholder="Enter 0 or 1"  data-validation-required-message="Please are you a Admin.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div> -->
                    <br />
                    <div id="success"></div>
                    <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Create</button></div>
                </form>
            </div>
        </div>
    </div>
</section>
