<nav class="navbar sticky-top navbar-expand-lg bg-dark">
    <div class="container">
        <a class="navbar-brand logo" href="#">
            <img class="image" src="../../src/image/logo.png" width="40px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto w-100 justify-content-end">
                <li class="nav-item active">
                    <a class="nav-link" href="../../loermy.php">Beranda<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../page/menu.php">Belajar</a>
                <li class="nav-item">
                    <a class="nav-link" href="../page/about.php">Tentang</a>
                <li class="nav-item">
                    <a class="nav-link" href="../page/contact.php">Kontak</a>
                </li>
                <li>
                    <?php 

                        if(isset($_SESSION['username'])) {
                        ?>
                    <div class="dropdown">
                        <a class="btn btn-secondary dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            <?php echo $_SESSION['username'] ?>
                        </a>

                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" style="color:#222 ;" href="../page/logout.php">Keluar</a></li>
                        </ul>
                    </div>

                    <?php
                        } else {
                        ?>
                <li class="nav-item">
                    <a class="nav-link" href="../page/login.php">Masuk</a>
                </li>
                <?php
                        }
                        
                    ?>

                </li>
            </ul>
        </div>
    </div>
</nav>