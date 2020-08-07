<?php

session_start();
include "services/connect-database.php";
include "services/logout.php";
include "services/validate-input.php";

?>

<?php include "sections/head.php";?>
    <div class="container">
        <div class="display-3 text-danger">The Dark Diary</div>
        <div class="display-4">Keep your darkness <b>secrets</b> here</div>
        <p><i>(I will not tell anyone!)</i></p>
        <br>

        <!-- SIGN UP FORM -->
        <div id="signUpForm">
            <form action="" method="post">
                <div class="form-group">
                    <input type="email" name="email" id="email" placeholder="Enter email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Enter password"
                        class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="passwordConfirm" id="passwordConfirm" placeholder="Confirm password"
                        class="form-control">
                </div>
                <div class="form-group">
                    <input type="checkbox" name="stayLoggedIn" id="stayLoggedIn">
                    <label for="stayLoggedIn">Remember me</label>
                </div>
                <input type="submit" name="submit" class="btn btn-success" value="Sign up">

                <!-- Create hidden field to distinguish between sign up and sign in -->
                <input type="hidden" name="signUp" value="1">
            </form>

            Already have an account? <a class="toggleForms text-primary"> Sign in</a>
        </div>

        <!-- SIGN IN FORM -->
        <div id="signInForm">
            <form action="" method="post">
                <div class="form-group">
                    <input type="email" name="email" id="email" placeholder="Enter email" class="form-control">
                </div>
                <div class="form-group">
                    <input type="password" name="password" id="password" placeholder="Enter password"
                        class="form-control">
                </div>
                <div class="form-group">
                    <input type="checkbox" name="stayLoggedIn" id="stayLoggedIn">
                    <label for="stayLoggedIn">Remember me</label>
                </div>

                <input type="submit" name="submit" class="btn btn-primary" value="Sign in">

                <!-- Create hidden field to distinguish between sign up and sign in -->
                <input type="hidden" name="signIn" value="1">
            </form>
            Don't have an account? <a class="toggleForms text-primary"> Sign up</a>
        </div>
    </div>
    <?php include "sections/script-entries.php";