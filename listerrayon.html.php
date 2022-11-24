
<div class="conteneur">
        <h3>LISTE les rayons</h3>
        <table>
            <tr>
                <th>code</th>
                <th>nom</th>
                <th>nombre d'exemplaire</th>
                <th>nombre d'ouvrages</th>
            </tr>
            <?php foreach ($rayon as $val):  ?>
                        <tr>
                            <th><?php echo($val["code"]); ?> </th>
                            <th> <?php echo($val["nom"]); ?></th>
                            <th><?php echo($val["nombre d'exemplaire"]); ?></th>
                            <th><?php echo($val["nombre d'ouvrages"]); ?></th>
                        </tr>
            <?php endforeach ?>
        </table>
    </div>