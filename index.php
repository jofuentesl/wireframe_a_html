<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="iso-8859-1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" contenet="Exercici HTML curs itAcademy itinerari Angular">
    <meta name="keywords" content="html5, Angular, itAcademy">
    <!-- Hoja de estilos principal-->
    <link rel="stylesheet" href="styles/main.css" type="text/css" media="screen">

    <!-- Importación de librerias de terceros-->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <title>Exercici HTML mòdul 2</title>
</head>
<body>
    <!--Importamos header.php-->
    <?php
    include 'layouts/header.php';
    ?>
    <!-- Contenido principal de la web-->
    <nav class="nav__main">
        <ul class="block__nav__main">
            <li class="block__nav__item"><a href="#">menú 1</a></li>
            <li class="block__nav__item"><a href="#">menú 2</a></li>
            <li class="block__nav__item"><a href="#">menú 3</a></li>
            <li class="block__nav__item"><a href="#">menú 4</a></li>
            <li class="block__nav__item"><a href="#">menú 5</a></li>
        </ul>
    </nav>
    <section class="block block__1">
        <article class="block__article block__article--1">
            <h2 class="block__article__item">Lorem ipsum</h2>
            <button class="block__article__item block__article__item--style block_article_btn">Lorem</button>
        </article>
        <article class="block__article block__article--2">
            <h2 class="block__article__item">Lorem ipsum</h2>
            <button class="block__article__item block__article__item--style block_article_btn">Lorem</button>
        </article>
        <article class="block__article block__article--3">
            <h2 class="block__article__item">Lorem ipsum</h2>
            <button class="block__article__item block__article__item--style block_article_btn">Lorem</button>
        </article>
    </section>
    <section class="block block__2">
        <article class="block2__item">
            <h2><i class="fa fa-bookmark font__awesome"></i>Lorem ipsum</h2>
                <img class="block2__item__img" src="images/main/img1.jpg" alt="Image edificio artículo uno"/>
                <p class="block2__item__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus dolorem vitae nisi veniam quisquam consequatur, itaque dolorum porro, autem mollitia accusamus repellat placeat quod, asperiores fugiat nobis aperiam corporis. Explicabo.</p>
                <button class="block__article__item block_article_btn">Lorem</button>
            </article>
            <article class="block2__item">
            <h2><i class="fa fa-bookmark font__awesome"></i>Lorem ipsum</h2>
                <img class="block2__item__img" src="images/main/img2.jpg" alt="Image edificio artículo dos"/>
                <p class="block2__item__p">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Doloribus dolorem vitae nisi veniam quisquam consequatur, itaque dolorum porro, autem mollitia accusamus repellat placeat quod, asperiores fugiat nobis aperiam corporis. Explicabo.</p>
                <button class="block__article__item block_article_btn">Lorem</button>
            </article>
           
    </section>
    <!-- Importamos footer.php -->
    <?php
        include 'layouts/footer.php';
    ?>
    </body>
</html>