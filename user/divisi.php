<h1 class="h3 mb-4 text-gray-800">Divisi</h1>



<div class="row">
    <div class="col-lg-6">
        <form action="prosesUpdate.php" method="post">
            <div class="form-group">
                <label for="bagian">Bagian</label>
                <input type="text" class="form-control" id="bagian" name="bagian" placeholder="Fulll Name" value="<?= $user['bagian'] ?>">
            </div>

            <div class="form-group">
                <label for="bagian">departemen</label>
                <input type="text" class="form-control" id="dept" name="dept" placeholder="Fulll Name" value="<?= $user['dept'] ?>">
            </div>

            <div class="form-group">
                <label for="bagian">Section</label>
                <input type="text" class="form-control" id="section" name="section" placeholder="Fulll Name" value="<?= $user['section'] ?>">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Save</button>
            </div>
        </form>
    </div>
</div>