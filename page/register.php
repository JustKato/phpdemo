<?php include '../headers/header.php'; ?>
<div class="main-wrapper center full">
    <div class="bg_img"></div>
    <form class="flex col center right modal" action="/api/register.php" method="post">

        <div class="form-title"> Sign Up </div>
        <hr style="width: 80%; border-bottom: none; border-left: none; border-right: none;">
        <br>
        <div class="flex row">
            <div class="flex col input-field">
                <input required type="email" name="email" id="email">
                <label for="email">Email Address</label>
            </div>
        </div>

        <div class="flex row">
            <div class="flex col input-field">
                <input required type="text" name="username" id="username">
                <label for="username">Username</label>
            </div>
        </div>

        <div class="flex row">
            <div class="flex col input-field">
                <input required type="password" name="password" id="password">
                <label for="password">Password</label>
            </div>
        </div>
        <div class="flex row">
            <div class="flex col input-field">
                <input required type="password" name="password_check" id="password_check">
                <label for="password_check">Password Check</label>
            </div>
        </div>
        <br>

        <input onclick="register()" class="button" type="button" value="Sign Up">
        <p>Looking to <a href="/page/login">Log in</a>?</p>
        

    </form>

    <?php include '../headers/footer.php'; ?>
</div>

<script>
        function register() {
            let data = {};
            Array.from($(`input`)).forEach(field => { data[$(field).attr('name')] = $(field).val(); })

            if ( data.password.length < 6 ) {
                swal.fire({ icon : 'error', title: "Failed To Login", text : "Password must be at least 6 characters in length!" });
                return;
            }

            if ( data['password'] !== data['password_check'] ) {
                swal.fire({ icon : 'error', title: "Failed To Login", text : "Password and Password Check don't match!" });
                return;
            }

            $.ajax({
                url: `/api/register`,
                type: `POST`,
                data: data,
                success: msg => {
                    swal.fire({
                        icon: 'success',
                        title: "Successfully Registered!",
                        text: msg.message
                    }).then( result => { window.location.href = "/page/login"; });
                },
                error: msg => {
                    swal.fire({
                        icon : 'error',
                        title: "Failed To Create account",
                        text : "Account creation has failed, please try again!"
                    });
                }
            })
        }
    </script>