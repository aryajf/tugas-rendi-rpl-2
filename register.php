<?php
    // ternary operator
    isset($_COOKIE['error_register']) ? $error = $_COOKIE['error_register'] : $error = null;
?>
<?php require_once('components/header.php') ?>
    <div class="container-fluid">
        <div class="row">
        <?php require_once('components/nav.php') ?>

            <div class="col-10 my-3">
                <h2>Register</h2>
                <form action="proses/register.php" method="post">
                    <div class="mb-3">
                        <label for="exampleInputNama1" class="form-label">Nama</label>
                        <input type="text" class="form-control" id="exampleInputNama1" aria-describedby="NamaHelp" name="nama">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword2" class="form-label">Konfirmasi Password</label>
                        <input type="password" class="form-control" id="exampleInputPassword2" name="confirm_password">
                    </div>
                    <?php if ($error) { ?>
                        <div class="alert alert-danger"><?php echo $error; ?></div>
                    <?php } ?>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
<?php require_once('components/footer.php') ?>