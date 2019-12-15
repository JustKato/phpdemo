<?php include '../headers/header.php'; ?>
<div class="main-wrapper center full">
    <div class="bg_img"></div>
    <form class="flex col center right modal" action="/api/register.php" method="post">

        <div class="form-title">Login</div>
        <hr style="width: 80%; border-bottom: none; border-left: none; border-right: none;">
        <br>
        <div class="flex row">
            <div class="flex col input-field">
                <input required type="text" name="user" id="user">
                <label for="user">Username/Email</label>
            </div>
        </div>
        <div class="flex row">
            <div class="flex col input-field">
                <input required type="password" name="password" id="password">
                <label for="password">Password</label>
            </div>
        </div>
        <br>

        <input class="button" type="submit" value="Login">
        <p>Looking to <a href="/page/register">Sign Up</a>?</p>
    </form>

    <?php include '../headers/footer.php'; ?>
</div>