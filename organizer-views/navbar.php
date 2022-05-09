<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a href="dashboard.php" class="navbar-brand">
            Homepage
        </a>
        <div class="navbar-nav ms-auto">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        Hello <?php echo $_SESSION['name']  ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="events.php" class="nav-link">
                        Events
                    </a>
                </li>
                <li class="nav-item">
                    <a href="logout.php" class="nav-link">
                        Logout
                    </a>
                </li>
            </ul>
        </div>
    </div>

</nav>