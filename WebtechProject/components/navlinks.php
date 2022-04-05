<ul>
    <?php
        if ($_SESSION['current_user'] === 'ADMIN') {
            echo "<li>
                    <a href=\"../admin/adminHome.php\">Admin</a>
                </li>";
        }
    ?>
    <li>
        <a href="../auth/logout.php">Logout</a>
    </li>
    <li>
        <a href="../views/Product.php">Market Place</a>
    </li>
    <li>
        <a href="../others/deleteAcc.php?toDel=<?php echo $_SESSION['current_user']?>">Delete Account</a>
    </li>
</ul>