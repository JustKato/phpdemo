<style>
    /* Flex Fixing */
    .flex { display: flex; }

    .flex.row { flex-flow: row; }

    .flex.col { flex-flow: column; }

    .flex.center { align-items: center; justify-content: center; }

    .flex.left { align-items: left; }

    /*                      Containers*/
    .input-field {
        position: relative;
        margin: 1rem 1rem;
    }

    /*                      Labels */

    .input-field label {
        color: var(--late1);
        position: absolute;
        top: -0.7rem;
        left: 16.1px;
        background: #3a3f45;
        padding: 0rem .5rem;
        transition: 100ms ease-in-out;
    }

    /*                      Inputs */

    input, textarea {
        padding: 0.45rem 1.5rem;
        font-size: 1.1rem;

        background: none;
        border: 1px solid var(--late0);;
        color: var(--late0);;
        border-radius: .25rem;
    }

    input:focus {
        outline: none;
    }

    input:focus ~ label {
        color: var(--late0);
        top: -1.4rem;
    }

    input:-webkit-autofill,
    input:-webkit-autofill:hover, 
    input:-webkit-autofill:focus,
    textarea:-webkit-autofill,
    textarea:-webkit-autofill:hover,
    textarea:-webkit-autofill:focus,
    select:-webkit-autofill,
    select:-webkit-autofill:hover,
    select:-webkit-autofill:focus {
        border: 1px solid var(--late0);
        -webkit-text-fill-color: var(--late0);
        box-shadow: 0 0 0px 23230px #3a3f45 inset;
        -webkit-box-shadow: 0 0 0px 23230px #3a3f45 inset;
        background-color: black;
    }

    /*                      Form */

    form.middle {
        max-width: 40rem;
        background-color: #3a3f45;
        border: 1px solid rgba(0, 0, 0, 0.75);
        border-radius: .5rem;
        box-shadow: 0px 3px 10px rgba(0, 0, 0, 0.25);
        
        margin: 0 auto;
        padding: 1rem 1rem;
    }

    form .form-title {
        font-size: 2rem;
        font-weight: 300;
        text-align: center;
    }

    /*                      Buttons */

    .button {
        font-size: 1.4rem;
        padding: 0.45rem 1.2rem;

        background-color: #fff0;
        color: var( --late0);
        
        border: 1px solid var(--late1);
        border-radius: 32rem;

        cursor: pointer;
        transition: 100ms ease-in-out;
    }

    .button:hover {
        background-color: rgba(255, 255, 255, 0.1);
    }
</style>

<?php include '../headers/header.php'; ?>
<div class="main-wrapper center full">
    <form class="flex col center middle" action="/api/register.php" method="post">

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