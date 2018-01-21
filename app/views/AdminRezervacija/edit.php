<?php include 'app/views/_global/beforeContentHead.php'; ?>


    <body>
        <div class="col-md-6">
            <div class="well well-sm">
                <form class="form-horizontal" method="POST">
                    <fieldset>
                        <legend class="text-center header">Izmeni</legend>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <label for="broj">Broj rezervacije</label>
                                <input value="<?php echo $DATA['rezervacija']->broj; ?>" name="broj" type="number" class="form-control" id="broj" placeholder="Unesite broj rezervacije">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <label for="datum_polaska">Datum polaska</label>
                                <input value="<?php echo $DATA['rezervacija']->datum_polaska; ?>" name="datum_polaska" type="text" class="form-control" id="datum_polaska" placeholder="Unesite datum">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <label for="datum_odlaska">Datum odlaska</label>
                                <input value="<?php echo $DATA['rezervacija']->datum_odlaska; ?>" name="datum_odlaska" type="text" class="form-control" id="datum_odlaska" placeholder="Unesite datum">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <label for="broj_osoba">Broj osoba</label>
                                <input value="<?php echo $DATA['rezervacija']->broj_osoba; ?>" name="broj_osoba" type="text" class="form-control" id="broj_osoba" placeholder="Unesite broj osoba">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <label for="ime">Ime</label>
                                <input value="<?php echo $DATA['rezervacija']->ime; ?>" name="ime" type="text" class="form-control" id="ime" placeholder="Unesite broj osoba">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <label for="prezime">Prezime</label>
                                <input value="<?php echo $DATA['rezervacija']->prezime; ?>" name="prezime" type="text" class="form-control" id="prezime" placeholder="Unesite broj osoba">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-10 col-md-offset-1">
                                <label for="email">E-mail</label>
                                <input value="<?php echo $DATA['rezervacija']->email; ?>" name="email" type="email" class="form-control" id="email" placeholder="Unesite broj osoba">
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