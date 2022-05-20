
<!DOCTYPE html>
<html class="h-100">
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Projecte M6</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Press+Start+2P" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <style>
            .retro { font-family: 'Press Start 2P', cursive;}
        </style>
    </head>
    <body class="d-flex flex-column h-100">
        <main role="main" class="flex-shrink-0">
            <div class="container text-center ">
                <h1>Projecte M6</h1>
            </div>
            <div class="album py-5 bg-light">
                <div class="container">
                    <div class="card-deck" id="dataContent">
                                <div class="card shadow-sm col-sm-4 mb-4 p-0">
                                    <div class="text-center m-3">
                                        <?php
                                        foreach($result as $row) {
                                        echo "<img class='bd-placeholder-img img-fluid' src=' " . $row['Imatge'] . ">";
                                        echo "</div>";
                                        echo "<div class='card-body text-center'>";
                                        echo "<h4>" . $row['Nom'] . "</h4>";
                                        echo "<span class='badge text-white bg-success'>" . $row['Stock'] . "</span>";
                                        echo "</div>";
                                        echo "<div class='card-footer'>";
                                        echo "<div class='d-flex justify-content-between align-items-center'>";
                                        echo "<div class='btn-group'>";
                                                echo "<a class='btn btn-primary' role='button' href='?action=showproduct&id=" . $row['id'] . "'>Més detalls</a>";
                                        echo "</div>";
                                        echo "<h4 class='text-muted'><span class='text-primary'>" . $row['Preu'] . "</span></h4>";
                                        }
                                            ?>
                                        </div>
                                    </div>
                                </div><div class="w-100 d-none d-md-block"></div>                        
                    </div>
                </div>
            </div>
        </main>
        <footer class="footer fixed-bottom mt-auto py-3 px-3 bg-light text-right">
            <a href="?action=login" class="btn btn-secondary btn-sm" tabindex="-1" role="button" aria-disabled="true">Login</a>
        </footer>
    </body>
</html>