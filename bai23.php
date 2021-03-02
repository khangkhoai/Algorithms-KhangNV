<?php
$category = array(
	1 => array(
		'id' => 1,
		'title' => "Thể thao",
		'parent_id' => 0
	),
	2 => array(
		'id' => 2,
		'title' => "Xã hội",
		'parent_id' => 0
	),
	3 => array(
		'id' => 3,
		'title' => "Thể thao trong nước",
		'parent_id' => 1
	),
	4 => array(
		'id' => 4,
		'title' => "Giao thông",
		'parent_id' => 2
	),
	5 => array(
		'id' => 5,
		'title' => "Môi trường",
		'parent_id' => 2
	),
	6 => array(
		'id' => 6,
		'title' => "Thể thao quốc tế",
		'parent_id' => 1
	),
	7 => array(
		'id' => 7,
		'title' => "Môi trường đô thị",
		'parent_id' => 5
	),
	8 => array(
		'id' => 8,
		'title' => "Giao thông ùn tắc",
		'parent_id' => 4
	),
);

function data_tree($data, $parent_id = 0, $level = 0){
	$result = [];
	foreach($data as $item){
		if($item['parent_id'] == $parent_id){
			$item['level'] = $level;
			$result[] = $item;
			unset($data[$item['id']]);
			$child = data_tree($data, $item['id'], $level + 1 );
			$result = array_merge($result, $child);
		}
	}
	return $result;
}
$list_cat = data_tree($category, 0);
echo "<pre>";
echo "</pre>";

foreach($list_cat as $item){
	?>
	<li><a href=""><?php echo str_repeat('---', $item['level'] ).$item['title']; ?></a>.</li>
	<?php
}
?>