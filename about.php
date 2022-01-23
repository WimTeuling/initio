<!DOCTYPE html>
<html lang="EN">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="english language">
    <meta name="author" content="Sergey Pozhilov (GetTemplate.com)">

    <title>Our website - About page</title>

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

        <nav class="navbar navbar-default">
            <div class="container-fluid">

                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
                </div>

                <div class="navbar-collapse collapse">

                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li class="active"><a href="about.html">About</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">More Pages <b class="caret"></b></a>
                            <ul class="dropdown-menu">
                                <li><a href="sidebar-left.html">Left Sidebar</a></li>
                                <li><a href="sidebar-right.html">Right Sidebar</a></li>
                                <li><a href="single.html">Blog Post</a></li>
                            </ul>
                        </li>
                        <li><a href="blog.html">Blog</a></li>
                    </ul>

                </div>
                <!--/.nav-collapse -->
            </div>
        </nav>
    </header>

    <main id="main">

        <div class="container">

            <div class="row topspace">

                <!-- Sidebar -->
                <aside class="col-sm-4 sidebar sidebar-right">

                    <ul class="nav text-right nav-side">
                        <li class="active"><a href="#ui">UI design</a></li>
                        <li><a href="#frontend">Frontend development</a></li>
                        <li><a href="#backend">Backend development</a></li>
                        <li><a href="#projects">Side projects</a></li>
                    </ul>

                </aside>
                <!-- /Sidebar -->

                <!-- Article main content -->
                <article class="col-sm-8 maincontent">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eveniet, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam beatae soluta accusantium iusto nihil
                        nesciunt unde veniam magnam repudiandae sapiente.</p>
                    <p><img src="assets/images/mac.jpg" alt="" class="" width="100%"></p>
                    <h3>Necessitatibus</h3>
                    <p>Velit, odit, eius, libero unde impedit quaerat dolorem assumenda alias consequuntur optio quae maiores ratione tempore sit aliquid architecto eligendi pariatur ab soluta doloremque dicta aspernatur labore quibusdam dolore corrupti
                        quod inventore. Maiores, repellat, consequuntur eius repellendus eos aliquid molestiae ea laborum ex quibusdam laudantium voluptates placeat consectetur quam aliquam!</p>
                    <h3>Fugit, laboriosam</h3>
                    <p>Eum, quasi, est, vitae, ipsam nobis consectetur ea aspernatur ad eos voluptatibus fugiat nisi perferendis impedit. Quam, nulla, excepturi, voluptate minus illo tenetur sint ab in culpa cumque impedit quibusdam. Saepe, molestias quia
                        voluptatem natus velit fugiat omnis rem eos sapiente quasi quaerat aspernatur quisquam deleniti accusantium laboriosam odio id?</p>
                </article>
                <!-- /Article -->


            </div>
        </div>
        <!-- /container -->

    </main>

<?php include 'partials/footer.php'; ?>