<!-- Begin Page Content -->
<?php include('nav.php') ?>
<div class="container-fluid">

    <div class=" justify-content-between mb-4">
        <?php
        if (!isset($_GET['page'])) {
            include "user.php";
        } else {
            include($_GET['page'] . ".php");
        }
        ?>

    </div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<?php include('footer.php') ?>