<?php
	
	function dbRowInsert($table_name, $form_data)
	{
   
	    $fields = array_keys($form_data);
	   
	    $sql = "INSERT INTO ".$table_name."
	    (".implode(',', $fields).")
	    VALUES('".implode("','", $form_data)."')";
	   
		
		return ($sql);
	}
	
?> 