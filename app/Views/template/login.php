
<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://www.google.com/recaptcha/api.js? async defer"></script>
    </head>
    <body style="background-color: snowwhite;">
        <div class="container">
           <form action= "<?php echo base_url('users/authenticate'); ?>" method="post">
            <!--<form action="/" method="POST">-->
                <select class="academic">
                    <option value="">Academic Session</option>
                    <option value="2020">2019-2020</option>
                    <option value="2019">2018-2019</option>
                    <option value="2018">2017-2018</option>
                </select> <br><br>

                <label class="labels">Enter Email</label><br>
                <input class="input-field" type="email" placeholder="Email"><br><br>
                <label class="labels">Enter Password</label><br>
                <input class="input-field" type="password" placeholder="Password"><br><br>
                <div class="g-recaptcha" data-sitekey="6LfnDtQZAAAAADj-RARneB6OfeAgPyRzE5Yx7wPv">
                <!--<script>
                        grecaptcha.ready(function() {
                        grecaptcha.execute('6LfnDtQZAAAAADj-RARneB6OfeAgPyRzE5Yx7wPv', {action: 'submit'}).then(function(token) {
                            // Add your logic to submit to your backend server here.
                        });
                        });
                    }
                </script>-->
                </div><br/>
                <input class="btn btn-primary" type="submit" name="submit"><br>
                <a class="account" href="/register">Don't have an account yet?</a>
                </div>
                <!--<script>
                    grecaptcha.ready(function() {
                        grecaptcha.execute('6Ld4CNQZAAAAAJTqb_VpLIkvh8QR6kFajZIihLVy', {action: 'submit'}).then(function(token) {
                                console.log(token);
                                document.getElementById("token").value=token;
                            });
                        });
                </script>-->
            </form>
        </div>
    </body>
</html>

<style>
.container {
    background-color: silver;
}

.labels {
    padding:10px;
}

.account {
    font-size: 16px;
}

.input-field {
    color:#959191;
}


</style>