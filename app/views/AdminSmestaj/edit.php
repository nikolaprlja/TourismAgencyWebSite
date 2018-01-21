<?php include 'app/views/_global/beforeContentHead.php'; ?>

    <body>
        <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" method="POST">
                    <fieldset>
                        <legend class="text-center header">Izmeni</legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <label for="naziv">Naziv</label>
                                <input value="<?php echo $DATA['smestaj']->naziv; ?>" name="naziv" type="text" class="form-control" id="naziv" placeholder="Unesite naziv">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <label for="zemlja">Zemlja</label>
                                <input value="<?php echo $DATA['smestaj']->zemlja; ?>" name="zemlja" type="text" class="form-control" id="zemlja" placeholder="Unesite zemlju">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <label for="mesto">Mesto</label>
                                <input value="<?php echo $DATA['smestaj']->mesto; ?>" name="mesto" type="text" class="form-control" id="Mesto" placeholder="Unesite mesto">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <label for="cena/noc">Cena/Noc</label>
                                <input value="<?php echo $DATA['smestaj']->cena; ?>" name="cena" type="text" class="form-control" id="cena/noc" placeholder="Unesite cenu po nocenju">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <select name="vrsta">
                                    <?php foreach ($DATA['vrstaSmestaja'] as $vrsta): ?>
                                        <option value="<?php echo $vrsta->vrsta_smestaja_id; ?>" <?php if ($DATA['smestaj']->vrsta_smestaja_id == $vrsta->vrsta_smestaja_id) echo 'selected'; ?>><?php echo $vrsta->naziv; ?></option>
                                    <?php endforeach; ?>    
                                </select>
                            </div>
                        </div>
                        <div class="col-md-12 text-center">
                        <button name="editBtn" type="submit" class="btn btn-primary">Izmeni</button>
                        </div>
                        </fieldset>
                </form>
            </div>
        </div>
    </body>
</html>