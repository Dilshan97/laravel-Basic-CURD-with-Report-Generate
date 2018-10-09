<!DOCTYPE HTML>

<html>
    <head>
        <title>Food city වගේ </title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link rel="stylesheet" href="assets/css/main.css" />
    </head>
    <body>

        <!-- Header -->
            <header id="header" class="alt">
                <div class="logo"><i class="fas fa-cookie-bite"></i> Food City වගේ </div>
                <a href="#menu">Menu</a>
            </header>

        <!-- Nav -->
            <nav id="menu">
                <ul class="links">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="generic.html">Contact Us</a></li>
                    <li><a href="elements.html">About Us</a></li>
                </ul>
            </nav>

        <!-- Banner -->
            <section id="banner">
                <div class="inner">
                    <header>
                        <h1>Food City වගේ</h1>
                        <p><br /></p>
                    </header>
                    <a href="{{ route('deliveries.index') }}" class="button big scrolly">Add /Edit Delivery</a>
                    <a href="#main" class="button big scrolly">Review Your Delivery</a>
                    <a href="#main" class="button big scrolly">Delivery log</a>
                </div>
            </section>

        

        <!-- Footer -->
            <footer id="footer">
                <div class="copyright">
                    <ul class="icons">
                        <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
                        <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
                        <li><a href="#" class="icon fa-instagram"><span class="label">Instagram</span></a></li>
                        <li><a href="#" class="icon fa-snapchat"><span class="label">Snapchat</span></a></li>
                    </ul>
                    <p>&copy; Copyright 2018. All rights reserved. &nbsp;<a href="">Food City වගේ</a>.</p>
                </div>
            </footer>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js"></script>
            <script src="assets/js/jquery.scrolly.min.js"></script>
            <script src="assets/js/jquery.scrollex.min.js"></script>
            <script src="assets/js/skel.min.js"></script>
            <script src="assets/js/util.js"></script>
            <script src="assets/js/main.js"></script>

    </body>
</html>