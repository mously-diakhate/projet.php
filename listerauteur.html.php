<div class="conteneur">
        <h3>lister les auteurs</h3>
        <table>
            <tr>
                <th>code</th>
                <th>nom</th>
                <th>prenom</th>
                <th>profession</th>
            </tr>
            <?php foreach ($aut as $val):  ?>
                        <tr>
                            <td><?=$val["code"]  ?> </td>
                            <td><?=$val["nom"]  ?> </td>
                            <td><?=$val["prenom"]  ?> </td>
                            <td><?=$val["profession"]  ?> </td>
                        </tr>
            <?php endforeach ?>
        </table>
    </div>