<html>
<head>
    <title>Afficher le tableau de multiplication</title>
    <style type="text/css">
        table th{
            background-color:yellow;
            color:black;
        }
        table td{
            background-color:red;
            color:white;
            text-align:center;
        }
    </style>
</head>
<body>

<table border=1 width="400">

<tr>
    <th>X</th>
        <?php
        for ($j=1; $j<=9; $j++)
        {
            ?>
            <th><?php echo $j; ?></th> <!--remplir la premiere ligne-->
            <?php
        }
        ?>
    </tr>

    <?php
    // remplir les lignes suivantes
    for ($i=1; $i<=9; $i++)
    {
        ?>
        <tr>
            <?php
            for ($j=1; $j<=9; $j++)
            {
                // remplir la 1ere colonne (colonne 0)
                if ($j==1)
                {
                    ?>
                    <th><?php echo $i; ?></th>
                    <?php
                }
                // remplir les colonnes suivantes i*j
                ?>
                <td>
                    <?php
                    echo $i*$j;
                    ?>
                </td>
                <?php
            }
            ?>
        </tr>
        <?php

    }
    ?>

</table>

</body>
</html>

