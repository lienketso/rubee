<?php

header("Content-type: text/xml");
 
function xml_entities($string) {
    return str_replace(
            array("&", "<", ">", '"', "'"), array("&amp;", "&lt;", "&gt;", "&quot;", "&apos;"), $string
    );
}
  

$conn = mysqli_connect("localhost", "rubeevn_vn", "37xwp9LuJnu", "rubeevn_vn") or die("Khong the ket noi CSDL");
mysqli_set_charset($conn,"utf8");
$query = "SELECT * FROM products where cat_id =280 order by id LIMIT 20 ";
$result = mysqli_query($conn, $query);
 

$items = '';
while ($row = mysqli_fetch_array($result)) {
    $items .= '<item>';
        $items .= "<title>" . xml_entities($row['name']) . "</title>";
        $items .= "<link>" . xml_entities("http://rubee.com.vn/ct-sp/".$row['id'].'/'.$row['alias']).".html"."</link>";
        $items .= "<description>" . xml_entities($row['meta_des']) . "</description>";
        $items .= "<guid>" . xml_entities("#") . "</guid>";

        $items .= "<pubDate>".$row['created']."</pubDate>";
    $items .= '</item>';
}
 

echo '<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">
	<channel>
		<title>Thiết kế Brochure, Catalog | Rubee.com.vn</title>
		<link>http://rubee.com.vn/ds-sp/280/thiet-ke-brochure-poster-to-roi-to-gap.html</link>
		<url>
			<posts/>
			<index/>
			<rss/>
		</url>
		<description>Thiết kế brochuređược xem là một trong những phương tiện đưa sản phẩm của doanh nghiệp đến công chúng mục tiêu một cách hiệu quả nhât và tiết kiệm chi phí nhất.</description>
		<language>vn-us</language>
        '.$items.'
    </channel>
</rss>';

?>

