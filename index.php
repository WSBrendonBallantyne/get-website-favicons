<?php

$sites = array(
    array("title" => "eBay", "url" => "https://www.ebay.com/
", ),
    array("title" => "Amazon", "url" => "https://www.amazon.com/
", ),
    array("title" => "Walmart", "url" => "https://www.walmart.com/
", ),
    array("title" => "Wish", "url" => "https://www.wish.com/
", ),
    array("title" => "Ali Express", "url" => "https://www.aliexpress.com/
", ),
);

echo '<h3>Website Favicons</h3>';
echo '<table>';
foreach ($sites as $site) {
    /* print_r($site);
    echo $site['url']; */
    $imgurl = "https://www.google.com/s2/favicons?domain=" . $site['url'];
    echo '<tr><td>' . $site['title'] . '</td><td>' . '<img src="' . $imgurl . '" width="16" height="16" />' . '</td><td><a href="' . $site['url'] . '" target="blank">' . $site['url'] . '</a></td></tr>';

}
echo '</table>';
/*  */
