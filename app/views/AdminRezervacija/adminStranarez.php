<?php include 'app/views/_global/beforeContentHead.php'; ?>

    <body>
        <ul class="nav nav-tabs">
            <li role="presentation"><a href="<?php echo Misc::link('app/views/AdminSmestaj/adminStrana.php'); ?>">Smeštaji</a></li>
            <li role="presentation" class="active"><a href="#">Rezervacije</a></li>
            <li role="presentation"><a href="#">Korisnici</a></li>
        </ul>
        <div class="table table-responsive">
            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th>Broj</th>
                        <th>Broj Rezervacije</th>
                        <th>Datum polaska</th>
                        <th>Datum odlaska</th>
                        <th>Broj osoba</th>
                        <th>Ime</th>
                        <th>Prezime</th>
                        <th>E-mail</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                   
                        <?php 
                        foreach($DATA['rezervacija'] as $rezervacija):
                        ?>
                    <tr>
                        <td><?php echo htmlspecialchars($rezervacija->rezervacija_id);?></td>
                        <td><?php echo htmlspecialchars($rezervacija->broj);?></td>
                        <td><?php echo htmlspecialchars($rezervacija->datum_polaska);?></td>
                        <td><?php echo htmlspecialchars($rezervacija->datum_odlaska);?></td>
                        <td><?php echo htmlspecialchars($rezervacija->broj_osoba);?></td>
                        <td><?php echo htmlspecialchars($rezervacija->ime);?></td>
                        <td><?php echo htmlspecialchars($rezervacija->prezime);?></td>
                        <td><?php echo htmlspecialchars($rezervacija->email);?></td>
                        <td><a href="<?php echo Misc::link('izmenarezervacija/' . $rezervacija->rezervacija_id); ?>" class="btn btn-warning">Izmeni <span class="glyphicon glyphicon-pencil"></span></a></td>
                        <td>
                        <form method="POST">
                                    <input type="hidden" name="rezervacija_id" value="<?php echo htmlspecialchars($rezervacija->rezervacija_id); ?>">
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
            <a href="<?php echo Misc::link('adminstrana'); ?>" class="btn btn-info col-md-1">Izađi <span class="glyphicon glyphicon-arrow-left"> </span></a>
    </body>
</html>