<?php include '/headers/header'; echo "a"; ?>

<form action="/api/register.php" method="post">

    <div class="flex row">
        <div class="flex row input-field">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email">
        </div>

        <div class="flex row input-field">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
        </div>
    </div>

    <div class="flex row">
        <div class="flex row input-field">
            <label for="password">Password</label>
            <input type="password" name="password" id="password">
        </div>

        <div class="flex row input-field">
            <label for="password_check">Password Check</label>
            <input type="password_check" name="password_check" id="password_check">
        </div>
    </div>

    <br>

    <input type="submit" value="Submit">

</form>

<?php include '/headers/footer'; ?>