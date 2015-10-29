<div class="container">
<div class="row">

    <div class="col-md-6 col-md-offset-3">
        <h3>Login</h3>

        <form method="post" action="register">
            <div>
                <?= $message ?>
            </div>
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" name="name" id="name" placeholder="Your Full Name" class="form-control"
                value="<?= (isset($_POST['name'])) ? $_POST['name'] : ''?>"
                "/>
            </div>

            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" name="username" id="username" placeholder="Username" class="form-control"
                       value="<?= (isset($_POST['username'])) ? $_POST['username'] : ''?>"/>
            </div>


            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" name="email" id="email" placeholder="Email Address" class="form-control"
                       value="<?= (isset($_POST['email'])) ? $_POST['email'] : ''?>"/>
            </div>

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
        <a href="forgot">Forgot Password</a>
    </div>

</div>
</div>
