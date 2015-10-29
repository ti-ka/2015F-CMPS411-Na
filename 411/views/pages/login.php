<div class="container">
<div class="row">

    <div class="col-md-6 col-md-offset-3">
        <h1>Login</h1>
        <form action="login" method="post">
            <div>
                <?= $message ?>
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" placeholder="Username" class="form-control"/>
            </div>

            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" name="password" id="password" placeholder="Password" class="form-control"/>
            </div>

            <input type="submit" class="btn btn-success btn-block" value="Login">
        </form>
        <a href="forgot">Forgot Password?</a>
        <a href="register">Register</a>
    </div>

</div>
</div>
