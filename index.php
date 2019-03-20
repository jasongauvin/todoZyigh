<?php

require 'conf.php';
require 'pages/template.php';

echo '<table border>
    <tr>
        <th>TO DO</th>
        <th>GITHUB</th>
        <th>USER</th>
        <th>PRIORITY</th>
        <th>STATUS</th>
        <th>DELETE</th>
    </tr>';
while($donnee = $requete->fetch()){
    echo '<tr>
        <td>'.$donnee['name'].'</td>
        <td>'.$donnee['github'].'</td>
        <td>'.$donnee['user_name'].'</td>
        <td>'.$donnee['priorite'].'</td>
        <td>'.$donnee['done'].'</td>
    </tr>';
}
$requete -> closeCursor();
echo '</table>';