<?php

$product[0] = array( 'name' => "CPU", 'price' => 750, 'quality' => 10, 'categoryId' => 1);		
$product[1] = array( 'name' => "RAM", 'price' => 50, 'quality' => 2, 'categoryId' => 2);	
$product[2] = array( 'name' => "HDD", 'price' => 70, 'quality' => 1, 'categoryId' => 2);	
$product[3] = array( 'name' => "Main", 'price' => 400, 'quality' => 3, 'categoryId' => 1);	
$product[4] = array( 'name' => "Keyboard", 'price' => 30, 'quality' => 8, 'categoryId' => 4);	
$product[5] = array( 'name' => "Mouse", 'price' => 25, 'quality' => 50, 'categoryId' => 4);	
$product[6] = array( 'name' => "VGA", 'price' => 60, 'quality' => 35, 'categoryId' => 3);	
$product[7] = array( 'name' => "Monitor", 'price' => 120, 'quality' => 28, 'categoryId' => 2);	
$product[8] = array( 'name' => "Case", 'price' => 120, 'quality' => 28, 'categoryId' => 4);	


$category[0]= array( 'id' => 1, 'name' => "Comuter");
$category[1]= array( 'id' => 2, 'name' => "Memory");	
$category[2]= array( 'id' => 3, 'name' => "Card");	
$category[3]= array( 'id' => 4, 'name' => "Acsesory");	

function sortByCategoryName(&$listProduct, $listCategory){
	for($i = 0; $i < count($listProduct); $i++)
	{
		for($j = 0; $j < count($listCategory); $j++)
		{
			if($listProduct[$i]['categoryId']==$listCategory[$j]['id'])
			{
				$listProduct[$i]['categoryName']= $listCategory[$j]['name'];
			}
		}
	}	
	for($i = 0; $i < count($listProduct); $i++)
	{
		$loop = $i;
		$current = $listProduct[$i];
		while($loop > 0 && strcmp($listProduct[$loop - 1]['categoryName'],$current['categoryName'])>0)
		{
			$listProduct[$loop] = $listProduct[$loop - 1];
			$loop -= 1;
		}
		$listProduct[$loop] = $current;
	}
	return $listProduct;
}
//print_r(sortByCategoryName($product,$category));

function mapProductByCategory($listProduct, $listCategory)
{
	for($i = 0; $i < count($listProduct); $i++)
	{
		for($j = 0; $j < count($listCategory); $j++)
		{
			if($listProduct[$i]['categoryId']==$listCategory[$j]['id'])
			{
				$listProduct[$i]['categoryName']= $listCategory[$j]['name'];
			}
		}
	}
	return $listProduct;
}
//print_r(mapProductByCategory($product,$category));

function minByPrice($listProduct) 
{
	$minPrice = $listProduct[0]['price'];
	for($i = 0; $i < count($listProduct); $i++)
	{
		if ($listProduct[$i]['price'] < $minPrice)
		{
			$minPrice = $listProduct[$i]['price'];
		}
	}
	return $minPrice;
}
print_r(minByPrice($product));

function maxByPrice($listProduct) {
	$maxPrice = $listProduct[0]['price'];
	for($i = 0; $i < count($listProduct); $i++)
	{
		if ($listProduct[$i]['price'] > $maxPrice)
		{
			$maxPrice = $listProduct[$i]['price'];
		}
	}
	return $maxPrice;
}
print_r(maxByPrice($product));
?>