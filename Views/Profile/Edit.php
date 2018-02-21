<?php include 'Views/Layout/Header.php'; ?>
<div class="container">
    <div class="row">
        <div class="col-2">
            <form action="#" method="post" enctype="multipart/form-data">
                <h4>Login</h4>
                <input type="text" name="login" value="<?php echo $user['login'];?>"/>
                <h4>Password</h4>
                <input type="password" name="password"/>
                <h4>Email</h4>
                <input type="email" name="email" value="<?php echo $user['email'];?>"/> 
                <input type="submit" name="submit" value="Редактировать" />
            </form>
        </div>
    </div>
</div>
<?php include 'Views/Layout/Footer.php'; ?>

