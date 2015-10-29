<div class="container">
<div class="row">

    <div class="col-md-6 col-md-offset-3">
        <h3>Reset Password:</h3>
        
        <form method="post" action="<?= $action ?>">
            <div>
                <?= $message ?>
            </div>


            <input type="hidden" name="oauth" value="<?= $oauth ?>">
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Password" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="rpassword">Re-enter Password:</label>
                <input type="password" name="rpassword" id="rpassword" placeholder="Re-enter Password" class="form-control"/>
            </div>

            <input type="submit" class="btn btn-success btn-block" value="Login">
        </form>
        <a href="login">Login</a>
        <a href="register">Register</a>
    </div>

</div>
</div>
