<?php
$Employee = mysqli_query($con, "SELECT * FROM user");


?>

<h1 class="h3 mb-4 text-gray-800">Search Data</h1>


<?php

if (isset($_SESSION['notif'])) {
?>
    <div class="alert alert-<?= $_SESSION['Tnotif'] ?>" role="alert">
        <?= $_SESSION['notif']  ?>
    </div>
<?php
    unset($_SESSION['Tnotif']);
    unset($_SESSION['notif']);
}
?>

<div class="table-responsive">
    <table class="table " id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th class="col-11">Name</th>
                <th class="col-1">Aksis</th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($Employee as $data) : ?>
                <tr>
                    <td> <a href="?page=biodata&id_as=<?= $data['email'] ?>"><?= $data['name']; ?></a>
                    </td>

                    <td>
                        <a href="?page=hapus&id_as=<?= $data['email'] ?>" class="badge badge-danger" onclick="return confirm('Apakah Anda Yakin?')">Hapus</a>

                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>