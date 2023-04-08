<?php
    function createTable($top, $data) {
    // Define the table HTML here
    $table = '<table>';
    $table .= '<tr>';
    $table .= '<th colspan="2">' . $top . '</th>';
    $table .= '</tr>';

    foreach ($data as $row) {
        $table .= '<tr>';
        foreach ($row as $cell) {
            $table .= '<td>' . $cell . '</td>';
        }
        $table .= '</tr>';
    }

    $table .= '</table>';

    // Output the table HTML
    echo $table;
    }

?>