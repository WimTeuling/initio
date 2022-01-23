<!DOCTYPE html>
<html lang="EN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="english language">
    <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

    <title>Our website - Right Sidebar</title>

    <link rel="shortcut icon" href="assets/images/gt_favicon.png">

    <!-- Bootstrap -->
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
    <!-- Icon font -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- Fonts -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
    <!-- Custom styles -->
    <link rel="stylesheet" href="assets/css/styles.css">

    <!--[if lt IE 9]> <script src="assets/js/html5shiv.js"></script> <![endif]-->
</head>

<body>

    <header id="header">
        <div id="head" class="parallax" parallax-speed="1">
            <h1 id="logo" class="text-center">
                <span class="title">Anthony Russel</span>
                <span class="tagline">A mystery person<br>
				<a href="">anthony.russel42@example.com</a></span>
            </h1>
        </div>

        <?php include 'partials/mainnav.php'; ?>
    </header>

    <main id="main">

        <div class="container">

            <div class="row topspace">

                <!-- Article main content -->
                <article class="col-sm-8 maincontent">
                    <header class="page-header">
                        <h1 class="page-title">Lorem ipsum dolor sit amet, consectetur.</h1>
                    </header>

                    <p><img src="assets/images/s2.jpg" alt=""></p>

                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil
                        nesciunt unde veniam magnam repudiandae sapiente.</p>
                    <h3>Necessitatibus</h3>
                    <p>Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti
                        quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
                    <blockquote>Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti
                        quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</blockquote>
                    <p>Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti
                        quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
                    <ul>
                        <li>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus!</li>
                        <li>Laboriosam, aliquam totam asperiores nam velit voluptatum non quidem.</li>
                        <li>Voluptatem, libero quia voluptatum ab modi facere dolore assumenda?</li>
                        <li>Expedita, officia tenetur doloremque nulla temporibus ab voluptates adipisci.</li>
                        <li>Nostrum, nesciunt, inventore amet temporibus officia perferendis doloremque nulla.</li>
                        <li>Dolorum, ex earum maiores perspiciatis modi sequi odit mollitia.</li>
                    </ul>

                </article>
                <!-- /Article -->

                <!-- Sidebar -->
                <aside class="col-md-4 sidebar sidebar-left">

                    <div class="widget">
                        <h4>Lorem ipsum dolor sit</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facere, ratione delectus reiciendis nulla nisi pariatur molestias animi eos repellat? Vel.</p>
                    </div>
                    <div class="widget">
                        <h4>Lorem ipsum dolor sit</h4>
                        <ul>
                            <li><a href="">Lorem ipsum </a>dolor sit amet.</li>
                            <li>Nostrum, dolores labore tempore error.</li>
                            <li>Qui esse impedit vitae repellat.</li>
                            <li>Aliquam, laborum corporis molestiae nihil.</li>
                            <li>Voluptate, labore non adipisci nihil!</li>
                        </ul>
                    </div>

                </aside>
                <!-- /Sidebar -->

            </div>
        </div>
        <!-- /container -->

    </main>

<?php include 'partials/footer.php'; ?>