<?php

if (isset($_POST['pass']) and isset($_POST['emailid']) && isset($_POST['username']) && isset($_POST['phone'])) {
    if (user::signup($_POST['username'], $_POST['pass'], $_POST['emailid'], $_POST['phone'])) {
        ?>
        <main class="form-signin w-100 m-auto">
            <form method="post" action="login.php">
                <img class="mb-4" src="assets\brand\bootstrap-logo.svg" alt="" width="72" height="57">
                <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

                <div class="form-floating">
                    <input name="username" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                    <label for="floatingInput">Userename</label>
                </div>
                <div class="form-floating">
                    <input name="pass" type="password" class="form-control" id="floatingPassword" placeholder="Password" requied>
                    <label for="floatingPassword">Password</label>
                </div>

                <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
            </form>
        </main>
    <?php
    } else { ?>
        <script>
            window.location = "signup.php"
        </script>
    <?php }
    } elseif (isset($_POST['username']) and isset($_POST['pass'])) {
        if (user::login($_POST['username'], $_POST['pass'])) {
            echo "<h1 class=\"hello\"> <strong> welcome $_POST[username] </strong></h1>";
        } else {
            echo <<<END
        <style>
        .button1 {
            margin-left:200px;
            margin-right:60px;
            padding:30px 320px;
        }
        </style>
        <h1 class="hello"><strong>login again</strong></h1>
        <button class="button1" onclick="hello()" type="submit">login in</button>
        <script>
        function hello(){
            window.location = "login.php"
        }
        </script>
        END;
        }
    } else {
        ?>
    <main class="form-signin w-100 m-auto">
        <form method="post" action="login.php">
            <img class="mb-4" src="assets\brand\bootstrap-logo.svg" alt="" width="72" height="57">
            <h1 class="h3 mb-3 fw-normal">Please sign in</h1>

            <div class="form-floating">
                <input name="username" type="text" class="form-control" id="floatingInput" placeholder="name@example.com" required>
                <label for="floatingInput">Username</label>
            </div>
            <div class="form-floating">
                <input name="pass" type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>

            <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div>
            <button class="w-100 btn btn-lg btn-primary" type="submit">Sign in</button>
        </form>
    </main>
<?php
    }
?>