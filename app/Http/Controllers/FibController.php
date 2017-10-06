<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FibController extends Controller
{
    public function fibonacci(){
    	echo "<center><b><h3>Fibonacci Sequence</h3></b></center>";
    	echo "<center>";
    	$sum = 0;
    	$p = 0;
    	$q = 1;
    	$max = 4000000;
    	$s = 0;

		do{
				$r = $q + $p;
			    if($r % 2 == 0){
			    	$sum = $r + $sum;
			    }
		    		    		
		    	$p = $q;
		    	$q = $r;
	    		
    		
		}while ($r<=$max);

    	echo "</center>";

    	echo "<center>";
    	echo "<b>Sum of even fibonacci numbers = ". $sum ."</b>";
    	echo "</center>";
    }
}
