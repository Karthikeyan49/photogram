<main class="form-signup w-100 m-auto">
    <form method="post" action="login.php">
        <img class="mb-4" src="assets\brand\bootstrap-logo.svg" alt="" width="72" height="57">
        <h1 class="h3 mb-3 fw-normal">Please sign up</h1>

        <div class="form-floating">
            <input name="username" type="text" class="form-control" id="floatingInput" placeholder="sample" required>
            <label for="floatingInput">Username</label>
        </div>
        <div class="form-floating">
            <input name="pass" type="password" class="form-control" id="floatingPassword" placeholder="sample" required>
            <label for="floatingPassword">Password</label>
        </div>
        <div class="form-floating">
            <input name="emailid" type="email" class="form-control" id="floatingemail"placeholder="sample" required>
            <label for="floatingemail">Email Address</label>
        </div>
        <div class="form-floating">
            <input name="phone" type="tel" class="form-control" id="floatingphone" pattern="[7-9]{1}[0-9]{9}" placeholder="sample" required>
            <label for="floatingphone">Phone</label>
        </div>

        <button class="w-100 btn btn-lg btn-primary" type="submit">Sign Up</button>
    </form>
</main>