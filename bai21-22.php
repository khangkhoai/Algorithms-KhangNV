<?php

function calSalary($salary,$n)
{
	if($n<1)
	{
		$salary;
	}
	else
		for ($i=1; $i<$n ; $i++)
		{
			$salary=$salary*1.1;
		}
		return $salary;
}
print_r(calSalary(100,5));

function calSalaryRecursion($salary,$n){
	if($n<=1)
	{
		return $salary;
	}
	else
	{
		return calSalaryRecursion($salary*1.1,$n-1);
	}	
}
print_r(calSalaryRecursion(100,5));

function calMonth($money, $rate)
{
	$startmoney = $money;
	$count=0;
	for ($i=0; $i<300 ; $i++)
	{
		$money = $money*(1+$rate);
		if ($money <= $startmoney*2)
		{
            $count++;
		}	
	}
	return $count;
}
print_r(calMonth(100,0.05));

function calMoney($money, $rate)
	{
	  return $money = $money*($rate+1);
	}

function calMonth0($money, $rate){
	$startmoney = $money;
	$n=0;
	if(calMoney($money,$rate) >= 2*$startmoney)
	{
		return $n;
	}
	else 
	{
		return calMoney($money, $rate);	 	
	}
}
print_r(calMonth0(100,0.05));
	?>