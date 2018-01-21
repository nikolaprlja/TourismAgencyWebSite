<?php include 'app/views/_global/beforeContentHead.php'; ?>

    <body>
        <ul class="nav nav-tabs">
            <li role="presentation"><a href="#">Smeštaji</a></li>
            <li role="presentation"><a href="#">Rezervacije</a></li>
            <li role="presentation" class="active"><a href="#">Korisnici</a></li>
        </ul>
        <div class="table table-responsive">
            <table class="table table-striped table-responsive">
                <thead>
                    <tr>
                        <th>Broj</th>
                        <th>Korisnicko</th>
                        <th>Lozinka</th>
                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                   
                        <?php 
                        foreach($DATA['user'] as $user):
                        ?>
                    <tr>
                        <td><?php echo htmlspecialchars($user->user_id);?></td>
                        <td><?php echo htmlspecialchars($user->username);?></td>
                        <td><?php echo htmlspecialchars($user->password);?></td>
                        <td><a href="<?php echo Misc::link('izmenakorisnika/' . $user->user_id); ?>" class="btn btn-warning">Izmeni <span class="glyphicon glyphicon-pencil"></span></a></td>
                        <td>
                        <form method="POST">
                                    <input type="hidden" name="user_id" value="<?php echo htmlspecialchars($user->user_id); ?>">
                                    <input name="confirmed" value="1" type="hidden">
                                    <button type="submit" name="delBtn" onclick="return confirm('Da li ste sigurni da želite da obrišete ovog korisnika?');" class="btn btn-danger">Obrisi <span class="glyphicon glyphicon-trash"></span></button>
                        </form>
                        </td>
                    </tr>   
                        <?php
                        endforeach;                     
                        ?>
                </tbody>
            </table>
            </div>
            <a href="<?php echo Misc::link('dodavanjekorisnika'); ?>" class="btn btn-success col-md-1">Dodaj <span class="glyphicon glyphicon-plus"> </span></a>
            <a href="<?php echo Misc::link('adminstrana'); ?>" class="btn btn-info col-md-1">Izađi <span class="glyphicon glyphicon-arrow-left"> </span></a>
    </body>
</html>
