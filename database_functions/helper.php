<?php
/**
 * Created by PhpStorm.
 * User: ocean
 * Date: 5/12/17
 * Time: 6:29 AM
 */

function display_bookmarked_urls($urls){
    foreach($urls as $url){
        echo"<tr>";
        echo "<td><a href='".$url."'>".$url."</a></td>";
        echo"<td><input type='checkbox' name='del_me[]' class='form-control' value='".htmlspecialchars($url)."'></td>";
        echo"</tr>";
    }
}