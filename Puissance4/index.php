<HTML>
<HEAD>
    <STYLE type="text/css">
        h1 {
            font-weight: bold;
            text-decoration: underline;
            text-align: center
        }

        td {
            width: 50px;
            height: 50px;
            border: 1px solid black;
        }

        table {
            border-collapse: collapse;
        }
    </STYLE>
    <TITLE>Puissance 4</TITLE>
</HEAD>
<BODY style='background-color:#F0E0D0'>
<h1>Puissance 4</h1>

<TABLE>
    <?php

    /**
     * Title  : Puissance4
     * User   : Simon.CUANY
     * Date   : 29.11.2019
     * Time   : 14:41
     */

    for ($ligne = 0; $ligne < 8; $ligne++) //draw one line of the table
    {
        echo "<tr>";
        for ($colonne = 0; $colonne < 8; $colonne++)//draw one line of the table
        {
            if ($ligne == 7 && $colonne == 0) {
                echo "<td><img src='bleu.jpg'></td>";
            } else if ($ligne == 7 && $colonne == 6) {
                echo "<td><img src='rouge.JPG'></td>";
            } else {
                echo "<td></td>";
            }
        }
        echo "</tr>";
    }


    ?>


</TABLE>
</BODY>
</HTML>
