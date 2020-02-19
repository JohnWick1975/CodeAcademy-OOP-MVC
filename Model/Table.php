<?php

class Table
{
    public function printUserData($arrayObj)
    {
        print '<table style="border:3px solid black; border-collapse: collapse">';
        foreach ($arrayObj as $value) {
            print '<tr>';
            foreach ($value as $userData) {
                print '<td style="border:3px solid black; border-collapse: collapse">' . $userData . '</td>';
            }
        }
        print '</tr>';
        print '</table>';
    }

    public function printOneUserData($object)
    {
        print '<table style="border:3px solid black; border-collapse: collapse">';
        foreach ($object[0] as $value) {
            print '<td style="border:3px solid black; border-collapse: collapse">' . $value . '</td>';
        }
        print '</table>';
    }
}
