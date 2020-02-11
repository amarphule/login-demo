<?php
    session_start();
    if (!isset($_SESSION["user_name"])) {
        header("location: index.php");
    }
    include "header.php"; 
?>
<body class="bg-light">
    <header>
        <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
            <a class="navbar-brand" href="#"><strong>Login Demo</strong></a>
            <div class="navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-item nav-link active" href="home.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" href="index.php">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item nav-link" href="logout.php">Logout</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>
    <section>
        <div class="container">
            <h1 class="text-center pt-5">User login with Remember me</h1>
            <div class="row p-5">
                <div class="col-lg-6">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam voluptatem ipsam quo atque
                        pariatur veritatis mollitia deleniti nisi dolorem fuga! Fugit porro laborum aspernatur libero
                        ea. Tempore et officia explicabo. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Ducimus, porro amet dolorem saepe provident doloremque eius placeat rem maxime error, id
                        nesciunt quaerat pariatur temporibus itaque cupiditate laudantium libero totam?</p>
                </div>
                <div class="col-lg-6">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam voluptatem ipsam quo atque
                        pariatur veritatis mollitia deleniti nisi dolorem fuga! Fugit porro laborum aspernatur libero
                        ea. Tempore et officia explicabo. Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Ducimus, porro amet dolorem saepe provident doloremque eius placeat rem maxime error, id
                        nesciunt quaerat pariatur temporibus itaque cupiditate laudantium libero totam?</p>
                </div>
            </div>
        </div>
    </section>
<?php
    include "footer.php"; 
?>