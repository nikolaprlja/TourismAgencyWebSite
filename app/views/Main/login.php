<?php include 'app/views/_global/beforeContent.php'; ?>

<div class="container">
    <form role="form" method="post" class="col-md-6 col-md-offset-3">

        <div class="form-group">
            <label class="control-label" for="Ime">Korisnicko ime</label>
            <input id="Ime" type="text" placeholder="Ime" class="form-control" required
                   pattern="^[A-z0-9_\-\.]{4,32}$" name="username">
        </div>

        <div class="form-group">
            <label class="control-label" for="pswd">Lozinka</label>
            <input id="pswd" type="password" placeholder="Lozinka" class="form-control" required
                   pattern="^.{6,255}$" name="password">
        </div>

        <button type="submit" class="btn btn-primary">Prijavi se</button>
    </form>
</div>

<?php if (isset($DATA['message'])): ?>
    <p><?php echo htmlspecialchars($DATA['message']); ?></p>
<?php endif; ?>

<?php include 'app/views/_global/afterContent.php'; ?>