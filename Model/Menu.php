<?php

include_once '../Database.php';

class Menu extends Database
{
    public function getMenu()
    {
        $sql = "SELECT `name`, `link` FROM `menu` WHERE 1";
        $menuArray = $this->select($sql);

        print '<nav>';
        foreach ($menuArray as $button){
            print'<a class="menu-link" name="' . $button['name'] . '" href="' . $button['link'] .'">' . $button['name'] . '</a>';
        }
        print '</nav>';
    }

}
