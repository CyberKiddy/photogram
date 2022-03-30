<section>

    <div class="card card-wid1 mt-5 " style=margin:auto;>

        <div class="card-title m-3">
            <h2 class="w3-text-theme">Sign Up:</h2>
        </div>
        <div class=" d-flex flex-column card-body justify-content-center">

            <form action="libs/classes/validation.php" method="POST">
                <div class=" p-3 row g-1 ">
                    <label for="name" class=" col-sm-1 col-form-label">
                        <h3><i class="bi bi-person-circle"></h3></i>
                    </label>
                    <div class="col-sm-8 pt-2">
                        <input id=" name" type="text" name="name" class="form-control blur"
                            placeholder="Enter your FullName:"><span class="error"> <?php echo $_SESSION['nameErr']; ?></span>
                    </div>
                </div>
                <div class=" p-3 row g-1 ">
                    <label for="Mail" class=" col-sm-1 col-form-label">
                        <h3><i class="bi bi-envelope-heart"></h3></i>
                    </label>
                    <div class="col-sm-8 pt-2">
                        <input id=" name" type="email" name="email" class="form-control blur "
                            placeholder="abcdefg@example.com"><span class="error"> <?php echo $_SESSION['emailErr']; ?></span>
                    </div>
                </div>
                <div class=" p-3 row g-2 ">
                    <label for="phone" class=" col-sm-1 col-form-label">
                        <h3><i class="bi bi-phone"></h3></i>
                    </label>
                    <div class="col-sm-8 pt-2">
                        <input id=" phone" type="tel" name="phone" class="form-control blur"
                            placeholder="phone Number"><span class="error"> <?php echo $_SESSION['phoneErr']; ?></span>
                    </div>
                </div>
                <div class=" p-3 row g-2 ">

                    <label for=" name" class=" col-sm-1 col-form-label">
                        <h3><i class="bi bi-key"></h3></i>
                    </label>
                    <div class="col-sm-8 pt-2">
                        <input id=" passwd" type="password" name="password" class="form-control blur"
                            placeholder="Enter your password"><span class="error">
                            <?php
                                    echo $_SESSION['passErr'];
                                    echo $_SESSION['passcheckErr'];
                                      echo $_SESSION['lengthErr'];
                                ?>
                        </span>
                    </div>
                </div>
                <div class=" p-3 row g-2 ">
                    <label for="passwd1" class=" col-sm-1 col-form-label">
                        <h3><i class="bi bi-key"></h3></i>
                    </label>
                    <div class="col-sm-8 pt-2">
                        <input id=" passwd1" type="password" name="retype" class="form-control blur"
                            placeholder="Re-type your password"><span class="error">
                            <?php echo $_SESSION['passErr'];
                             echo $_SESSION['passcheckErr'];
                                 echo $_SESSION['lengthErr'];
                                     
                            ?>
                        </span>
                    </div>
                </div>

                <div class="text-center mb-4">
                    <input type="submit" class="btn btn-lg w3-theme" value="submit">
                </div>
        </div>
    </div>
    </form>



</section>


<?php  session_destroy();
