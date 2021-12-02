<html>
    <head>
        <title>Kundenprofil</html>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <header>Ihr Kundenprofil</header>

        <div id="kunde" class="container">
            <h1> 
                <?php
                include 'api.php';
                print get_name(1);
                ?>
            </h1>
            <p>
                <?php
                include 'api.php';
                print get_email(1);
                ?>
            </p>
            <p>
                <?php
                include 'api.php';
                print get_adress_data(1);
                ?>
            </p>
</html>