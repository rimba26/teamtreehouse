    <?php
        $name = "Muhammad Rimba";
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="asset/css/all.css">
        <title>Team Treehouse <?php echo $name; ?></title>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="slidebar col-lg-4 border bg-primary">
                    <div class="d-flex flex-coloumn m-5">
                        <img class="rounded mx-auto d-block" src="asset/image/illustration.png"  alt="logo" width="200px" >
                    </div>

                    <div class="d-flex flex-coloumn m-5">
                        <div class="d-flex align-self-center">
                            <p class="h2 text-light"><?php echo $name;?></p>
                        </div>
                    </div>
                </div>
                <div class="content col-lg-8 p-0 vh-100">
                    <div class="d-flex flex-column ">
                        <P class="h2 pt-4 pl-5">My First Page PHP</p>
                    </div>
                    <section class="pl-5">
                        <p class="h2">Units</p>
                        <?php include "inc/units.php";?>
                        <P class="lead"><?php echo celciusToFahrenheit(80); ?></p>
                        </section>

                        <section class="pl-5">
                        <p class="h2">String</p>
                        <?php include "inc/string.php";?>
                        <P class="lead"><?php echo askName("Muhammad Rimba");?></p>
                        </section>

                    </div>
                <div class="d-flex position-absolute fixed-bottom">
                <p class="font-weight-normal mx-auto flex-self-center">&copy; <?php echo $name; echo"Last Modified:"
                .date("F d Y H:i:s.", getlastmod());?>
                </p>
            </div>
        </div>
    <script src="asset/js/jquery-3.5.1.slim.min.js"></script>
    <script src="asset/js/popper.min.js"></script>
    <script src="asset/js/bootstrap.min.js"></script>
    </body>
    </html>