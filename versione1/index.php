<?php

include "./db/index.php"

    ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>

    <header>
        <img src="./spotify-logo-png-7053.png" alt="">
    </header>
    <main>
        <div class="container col-8 p-2"">
            <div class="row d-flex flex-wrap justify-content-between">
                <?php foreach ($database as $valore) { ?>
                <div class="card  h-25 cardgrey p-0" style="width: 1rem;">
                    <img src="<?php echo $valore["poster"] ?>" class="card-img-top" alt="...">
                    <div class="card-body p-1">
                        <h5 class="card-title  text-light fonts">
                            <?php echo $valore["title"] ?>
                        </h5>
                        <h2 class="fonts">
                            <?php echo $valore["author"] ?>
                        </h2>
                        <h2 class="fonts">
                            <?php echo $valore["year"] ?>
                        </h2>
                    </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </main>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
</body>

</html>