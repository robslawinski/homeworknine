<?php
	function errorHandling($errno, $errstr, $error_file, $error_line)
	{  
      echo "<b>Error:</b> [$errno] $errstr - $error_file:$error_line";
      echo "<br />";
      echo "Terminating PHP Script";
      
      die();
	}
	function fileExist($file)
	{
		if(!file_exists($file))
		{
			throw new Exception("File doesn't exist.");
		}
		else
		{
			echo "file found<br/>";
		}
		return $file;
	}
	
	try
	{
		echo fileExist("example.csv");
	}
	catch(Exception $e)
	{
		echo 'Caught exception: ',  $e->getMessage(), "<br/>";
	} 
	finally
	{
		echo 'First Finally. <br/>';
	}
	
	try
	{
		echo fileExist("cars.csv");
	}
	catch(Exception $e)
	{
		echo 'Caught exception: ',  $e->getMessage(), "\n";
	}
	finally
	{
		echo 'First Finally.\n';
	}
?>