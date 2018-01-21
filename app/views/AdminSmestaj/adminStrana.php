<?php include 'app/views/_global/beforeContentHead.php'; ?>

    <body>
        <ul class="nav nav-tabs">
            <li role="presentation" class="active"><a href="#">Smeštaji</a></li>
            <li role="presentation"><a href="#">Rezervacije</a></li>
            <li role="presentation"><a href="app/views/AdminKorisnici/adminStrana.php">Korisnici</a></li>
        </ul>
        <div class="table table-responsive">
            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th>Broj</th>
                        <th>Naziv</th>
                        <th>Zemlja</th>
                        <th>Mesto</th>
                        <th>Cena/Noć</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>

                    <?php
                    foreach ($DATA['smestaj'] as $smestaj):
                    ?>
                    <tr>
                        <td><?php echo htmlspecialchars($smestaj->smestaj_id); ?></td>
                        <td><?php echo htmlspecialchars($smestaj->naziv); ?></td>
                        <td><?php echo htmlspecialchars($smestaj->zemlja); ?></td>
                        <td><?php echo htmlspecialchars($smestaj->mesto); ?></td>
                        <td><?php echo htmlspecialchars($smestaj->cena); ?></td>
                        <td><a href="<?php echo Misc::link('izmenasmestaja/' . $smestaj->smestaj_id); ?>" class="btn btn-warning">Izmeni <span class="glyphicon glyphicon-pencil"></span></a></td>
                        <td>
                            <form method="POST">
                                <input type="hidden" name="smestaj_id" value="<?php echo htmlspecialchars($smestaj->smestaj_id); ?>">
                                <input name="confirmed" value="1" type="hidden">
                                <button type="submit" name="delBtn" onclick="return confirm('Da li ste sigurni da želite da obrišete ovaj zapis?');" class="btn btn-danger">Obrisi <span class="glyphicon glyphicon-trash"></span></button>
                            </form>
                        </td>
                    </tr> 
                    <?php
                    endforeach;
                    ?>
                </tbody>
            </table>
        </div>
        <a href="<?php echo Misc::link('dodavanjesmestaja'); ?>" class="btn btn-success col-md-1">Dodaj <span class="glyphicon glyphicon-plus"> </span></a>
        <a href="<?php echo Misc::link('adminstrana'); ?>" class="btn btn-info col-md-1">Izađi <span class="glyphicon glyphicon-arrow-left"> </span></a>
    </body>
</html>