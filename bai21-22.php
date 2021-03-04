<?php

function calSalary($salary,$n)
{	
	for ($i=1; $i<$n ; $i++)
	{
		$salary=$salary*1.1;
	}
	return $salary;
}
// print_r(calSalary(100,2));

function calSalaryRecursion($salary,$n){
	if($n<=1)
	{
		return $salary;
	}
	return calSalaryRecursion($salary*1.1,$n-1);	
}
// print_r(calSalaryRecursion(100,2));

function calMonth($money, $rate)
{
	$startmoney = $money;
	$count=0;
	while($money < $startmoney*2)
	{
		$count++;
		$money = $money*(1+$rate);
	}	
	return $count;	
	
}
print_r(calMonth(100,0.06));

function calMoney($money, $rate, $month)
{
	if($month == 0) 
	{
		return $money;
	}
	return calMoney($money, $rate, $month-1)+ calMoney($money, $rate, $month-1)*($rate/100) ;
}

function calMonthRecursion($money, $rate){
	$month=0;
	while(calMoney($money, $rate, $month) < 2*$money)
	{	
		$month++;
	}	
	return $month;
}
print(calMonthRecursion(100,6));
?>