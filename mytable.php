<?php
function createTable($top, $data, $button)
{
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

    $table .= '<tr>';
    $table .= '<td style="text-align: center;" colspan="2">' . $button . '</td>';
    $table .= '</tr>';

    $table .= '</table>';

    // Output the table HTML
    echo $table;
}
