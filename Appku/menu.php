<div class="row">
    <div class="col-md-12 mt-1">
        <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
            <a class="navbar-brand" href="index.php"><img src="img/1.png" alt="LOGO" style="width:70px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?hal=home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?hal=aboutUs">About us</a>
                    </li>
                </ul>
                    <?php
                    $member = $_SESSION['MEMBER'];
                    if (!isset($member)) {
                    ?>
                        <ul class="navbar-nav" style="display:inline;">
                            <li class="nav-item">
                                <a class="nav-link" href="index.php?hal=login">Login</a>
                            </li>
                        </ul>
                    <?php
                    } else {
                    ?>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Menu Data
                                </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="index.php?hal=dataPegawai">Pegawai</a>
                            </div>
                            </li>
                        </ul>
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <?= $member['fullname']; ?>
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="#">Profile</a>
                                <a class="dropdown-item" href="#">Users</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="logout.php">Keluar</a>
                            </div>
                        </li>
                    </ul>
                    <?php
                    }
                    ?>

            </div>
        </nav>
    </div>
</div>