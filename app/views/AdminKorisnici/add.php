<?php include 'app/views/_global/beforeContentHead.php'; ?>

    <body>
        <div class="forma">
        <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" method="POST">
                    <fieldset>
                        <legend class="text-center header">Dodaj</legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                            <label for="ime">Ime</label>
                            <input name="username" type="text" class="form-control" id="ime" placeholder="Unesite korisnicko">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                            <label for="lozinka">Lozinka</label>
                            <input name="password" type="text" class="form-control" id="lozinka" placeholder="Unesite lozinku">
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                        <button name="addBtn" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
        </div>
        <div>
            <?php if(isset($DATA['message'])): ?>
            <p class="alert alert-warning"><?php echo $DATA['message']; ?></p>
            <?php endif; ?>
        </div>
    </body>
</html>