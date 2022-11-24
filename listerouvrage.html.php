<div class="conteneur">
        <h3>LISTE les ouvrages</h3>
        <table>
            <tr>
                <th>code</th>
                <th>titre</th>
                <th>date</th>
                <th>auteur</th>
            </tr>
            <?php foreach ($ouvrages as $val):  ?>
                        <tr>
                            <th><?php echo($val["code"]); ?> </th>
                            <th> <?php echo($val["titre"]); ?></th>
                            <th><?php echo($val["date"]); ?></th>
                            <th><?php echo($val["auteur"]); ?></th>
                        </tr>
            <?php endforeach ?>
        </table>
    </div>