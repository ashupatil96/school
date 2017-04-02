<?php
	
	$a=$_POST['checkbox'];
	if (empty($a))
	{
		echo "ALL ABSENT";
	}

	 else
  	{
	    $N = count($a);
	    echo("You selected $N : ");
	    for($i=0; $i < $N; $i++)
	    {
	      echo htmlspecialchars($a[$i] ). " ";
	    }
  	}

?>