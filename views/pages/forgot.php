<div class="container">
<div class="row">

    <div class="col-md-6 col-md-offset-3">
        <h3>Reset Your Password:</h3>
        <form method="post">

            <div class="form-group">
                <label for="username"><?= $message ?></label>
                <input type="text" name="username" id="username" placeholder="Username or Email" class="form-control"/>
            </div>

            <input type="submit" class="btn btn-success btn-block" value="Get Reset Link">
        </form>
        <a href="login">Login</a>
        <a href="register">Register</a>
    </div>

</div>
</div>
