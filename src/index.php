<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Home</title>
</head>

<body>

    <!-- Including the header -->


    <?php include('./view/Header.php');?>


    <main>


        <section>
            <h1> Pagina Home</h1>

            <ul>
                <li><a href="../index.php">Home</a></li>
                <li><a href="./view/Feed.php">Feed</a></li>
                <li><a href="./view/FeedWithGrid.php">Feed com Grids</a></li>
                <li><a href="./view/FeedWithFlex.php">Feed com Flex</a></li>
                <li><a href="#">Quem Somos</a></li>
                <li><a href="#">Contato</a></li>
                <li><a href="./view/User_View.php">Outros</a></li>

            </ul>

        </section>

    </main>

    <?php include('./view/Footer.php'); ?>

</body>

</html>