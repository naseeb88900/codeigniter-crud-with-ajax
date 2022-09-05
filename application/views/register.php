
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/registration.css">
</head>

<body >
    <div class="register-photo">
        <div class="form-container">
            <div class="image-holder"></div>
            <form name="RegistrationForm" id="RegistrationForm"  action="<?php echo base_url(); ?>index.php/user/register" method="post">
                <h2 class="text-center">
                    <strong>Create</strong> an account.
                </h2>
                <div class="form-group">
                    <input class="form-control" type="text" name="fname" placeholder="Name" />
                </div>
                <div class="form-group">
                    <input class="form-control" type="email" name="email" placeholder="Email" />
                </div>
                <div class="form-group">
                    <input class="form-control" type="password" name="password" placeholder="Password" />
                </div>

                <div class="form-group">
                    <div class="form-check">
                        <label class="form-check-label">
                            <input class="form-check-input" type="checkbox" />I agree to the license terms.
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" placeholder="Sign Up" onclick = "validate()" />
                </div><a href="<?php echo base_url(); ?>index.php/user/login" class="already">Login</a>
            </form>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js" ></script>
    <script src="http://cdn.jsdelivr.net/npm/jquery-validation@1.19.5/dist/jquery.validate.js"></script>
	<script src="<?php echo base_url(); ?>js/registration.js"></script>
</body>

</html>