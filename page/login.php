<?php
    session_start();
    if ( !empty($_SESSION['logged_in']) )
        header("Location: /page/dashboard/home");
?>

<?php include '../headers/header.php'; ?>
<div class="main-wrapper center full">
    <div class="bg_img"></div>
    <form class="flex col center right modal" action="/api/login.php" method="post">

        <div class="form-title">Admin Login</div>
        <hr style="width: 80%; border-bottom: none; border-left: none; border-right: none;">
        <br>
        <div class="flex row">
            <div class="flex col input-field">
                <input required type="text" name="username" id="username">
                <label for="username">Username/Email</label>
            </div>
        </div>
        <div class="flex row">
            <div class="flex col input-field">
                <input required type="password" name="password" id="password">
                <label for="password">Password</label>
            </div>
        </div>
        <br>

        <input name="submit" onclick="login();" class="button" type="button" value="Login">
        <p>Looking to <a href="/page/register">Sign Up</a>?</p>
    </form>

    <?php include '../headers/footer.php'; ?>
    
    <script>
        function login() {
            let data = {};
            Array.from($(`input`)).forEach(field => {
                data[$(field).attr('name')] = $(field).val();
            })

            $.ajax({
                url: `/api/login`,
                type: `POST`,
                data: data,
                success: msg => {
                    swal.fire({
                        icon: 'success',
                        title: "Success!",
                        text: msg.message
                    }).then( result => {
                        window.location.reload();
                    });
                },
                error: msg => {
                    swal.fire({
                        icon : 'error',
                        title: "Failed To Login",
                        text : "Incorrect account details!"
                    });
                }
            })
        }
    </script>

</div>