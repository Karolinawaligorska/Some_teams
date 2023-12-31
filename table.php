<?php

require __DIR__ . ("/data.php");


?>
<!-- table-, city-, and team.php all go in this class so i can apply flex-box styling-->
<div class="container">

    <table>
        <tr>
            <th>Team-name</th>
            <th>League</th>
            <th>Last-time-champions</th>
            <th>City</th>
            <th>Url</th>
        </tr>

        <?php
        // Collecting the team-names.
        foreach ($teams as $key => $team) : ?>

            <tr>
                <td>
                    <?= $key; ?>
                </td>

                <td>
                    <?= $team['league']; ?>
                </td>

                <td>
                    <?= $team['last-time-champions'];
                    if ($team['last-time-champions'] == null) {

                        echo "The team has won no championships.";
                    }


                    ?>
                </td>

                <td>
                    <?= $team['city']; ?>
                </td>


                <td>
                    <a href=<?= $team['url']; ?>>Click here to learn more about <?= $key; ?></a>
                </td>
            </tr>

        <?php endforeach;  ?>

    </table>