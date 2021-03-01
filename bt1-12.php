<?php

$product[0] = array( 'name' => "CPU", 'price' => 750, 'quality' => 10, 'categoryId' => 1);		
$product[1] = array( 'name' => "RAM", 'price' => 50, 'quality' => 2, 'categoryId' => 2);	
$product[2] = array( 'name' => "HDD", 'price' => 70, 'quality' => 1, 'categoryId' => 2);	
$product[3] = array( 'name' => "Main", 'price' => 400, 'quality' => 3, 'categoryId' => 1);	
$product[4] = array( 'name' => "Keyboard", 'price' => 30, 'quality' => 8, 'categoryId' => 4);	
$product[5] = array( 'name' => "Mouse", 'price' => 25, 'quality' => 50, 'categoryId' => 4);	
$product[6] = array( 'name' => "VGA", 'price' => 60, 'quality' => 35, 'categoryId' => 3);	
$product[7] = array( 'name' => "Monitor", 'price' => 120, 'quality' => 28, 'categoryId' => 2);	
$product[8] = array( 'name' => "Case", 'price' => 120, 'quality' => 28, 'categoryId' => 5);	


$Category[0]= array( 'id' => 1, 'name' => "Comuter");
$Category[1]= array( 'id' => 2, 'name' => "Memory");	
$Category[2]= array( 'id' => 3, 'name' => "Card");	
$Category[3]= array( 'id' => 4, 'name' => "Acsesory");			
 function findProduct($listProduct, $nameProduct) 
 {
 	for($i = 0; $i < count($listProduct); $i++)
 	{
 		if($listProduct[$i]['name'] == $nameProduct)
 		{
 			print_r($listProduct[$i]);
 		}
 	}

 }
function findProductByCategory($listProduct, $categoryId) 
{
	for($i = 0; $i < count($listProduct); $i++)
 	{
 		if($listProduct[$i]['categoryId'] == $categoryId)
 		{
 			print_r($listProduct[$i]);
 		}
 	}
}

function findProductByPrice($listProduct, $price)
{
for($i = 0; $i < count($listProduct); $i++)
 	{
 		if($listProduct[$i]['price'] <= $price)
 		{
 			print_r($listProduct[$i]);
 		}
 	}
}


function sortByPrice($listProduct) 
{
for($i = 0; $i < count($listProduct); $i++)
{
	for($j = 0; $j < count($listProduct); $j++)
{
	if ($listProduct[$i]['price'] > $listProduct[$j]['price']) {
		    $tmp = $listProduct[$j];
            $listProduct[$j] = $listProduct[$i];
            $listProduct[$i]= $tmp;
	}
}
}

for($i = 0; $i < count($listProduct); $i++)
	{
		print_r($listProduct[$i]['price']);
	}
}

function sortByName0($listProduct) 
{
for($i = 0; $i < count($listProduct); $i++)
{
	for($j = 0; $j < count($listProduct); $j++)
{
	if ( strlen($listProduct[$i]['name']) > strlen($listProduct[$j]['name'])) {
		    $tmp = $listProduct[$j];
            $listProduct[$j] = $listProduct[$i];
            $listProduct[$i]= $tmp;
	}
}
}

for($i = 0; $i < count($listProduct); $i++)
	{
		print_r($listProduct[$i]['name']);
	}
}

function sortByName($listProduct) 
{
	for($i = 0; $i < count($listProduct); $i++)
{
	$loop = $i;
	$current = $listProduct[$i];
	while($loop > 0 && strlen($listProduct[$loop - 1]['name']) < strlen($current['name']))
        {
            // Di dời các phần tử lên 1 bậc
            $listProduct[$loop] = $listProduct[$loop - 1];
            $loop -= 1;
        }
        $listProduct[$loop] = $current;
}


for($i = 0; $i < count($listProduct); $i++)
	{
		print_r($listProduct[$i]['name']);
	}
}

sortByName($product);
?>