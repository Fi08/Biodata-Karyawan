<h1 class="h3 mb-4 text-gray-800">Change Password</h1>

<div class="row">
    <div class="col-lg-6">
        <form action="prosesUpdate.php" method="post">
            <div class="form-group">
                <label for="current_password">Current Password</label>
                <input type="password" class="form-control" id="current_password" name="current_password" required>
            </div>

            <div class="form-group">
                <label for="new_password1">New Password</label>
                <input type="password" class="form-control" id="new_password1" name="new_password1" required>
            </div>


            <div class="form-group">
                <label for="new_password2">Repeat New Password</label>
                <input type="password" class="form-control" id="new_password2" name="new_password2" required>
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Change Password</button>
            </div>
        </form>
    </div>
</div>