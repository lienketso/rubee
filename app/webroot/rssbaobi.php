<?php
// Thiết lập cấu trúc fiel là xml
header("Content-type: text/xml");
 
 // Hàm chuyển đổi những ký tự đặc biệt để khỏi lỗi XML
function xml_entities($string) {
    return str_replace(
            array("&", "<", ">", '"', "'"), array("&amp;", "&lt;", "&gt;", "&quot;", "&apos;"), $string
    );
}
  
// Kết nối CSDL và lấy danh sách 10 tin mới nhất
$conn = mysqli_connect("localhost", "rubeevn_vn", "37xwp9LuJnu", "rubeevn_vn") or die("Khong the ket noi CSDL");
mysqli_set_charset($conn,"utf8");
$query = "SELECT * FROM products where cat_id =276 order by id LIMIT 20 ";
$result = mysqli_query($conn, $query);
 
// Lặp dư liệu và đưa ra các items XML
$items = '';
while ($row = mysqli_fetch_array($result)) {
    $items .= '<item>';
        $items .= "<title>" . xml_entities($row['name']) . "</title>";
        $items .= "<link>" . xml_entities("http://rubee.com.vn/ct-sp/".$row['id'].'/'.$row['alias']).".html"."</link>";
        $items .= "<description>" . xml_entities($row['meta_des']) . "</description>";
        $items .= "<guid>" . xml_entities("#") . "</guid>";
        // Nếu bạn muốn thêm ngày tạo tin thì trong CSDL thêm một field add_date và
        // thêm dòng này:
        $items .= "<pubDate>".$row['created']."</pubDate>";
    $items .= '</item>';
}
 
// Xuất thông tin website và nối $items vào
echo '<?xml version="1.0" encoding="UTF-8"?>
<rss version="2.0">
	<channel>
		<title>Thiết kế bao bì | Rubee.com.vn</title>
		<link>http://rubee.com.vn/ds-sp/276/thiet-ke-bao-bi.html</link>
		<url>
			<posts/>
			<index/>
			<rss/>
		</url>
		<description>Bao bì được coi là một trong những liên hệ mạnh của thương hiệu sản phẩm, thiết kế bao bì chuyên nghiệp nâng cao giá trị sản phẩm.</description>
		<language>vn-us</language>
        '.$items.'
    </channel>
</rss>';

?>

