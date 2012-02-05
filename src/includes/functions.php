<?php
	session_start();
	include("config.php");
	
	function connect(){
		global $host,$user,$pwd,$db;
		mysql_connect($host,$user,$pwd);
		mysql_select_db($db);
	}
	
	function dbquery($sql){
		return mysql_query($sql);
	}
	
	function select($table, $rows = '*', $where = null, $order = null,$limit=null)  
        { 
            $query1 = 'SELECT '.$rows.' FROM '.$table;  
            if($where != null)  
                $query1 .= ' WHERE '.$where;  
            if($order != null)  
                $query1 .= ' ORDER BY '.$order;  
            if($limit != null)
            	$query1.=' LIMIT '.$limit;
			
           // if($this->tableExists($table))  
          // {  
			//return $query1;
            $queryStats = dbquery($query1);  
            if($queryStats)  
            {  
                $numResults = mysql_num_rows($queryStats);  
                for($i = 0; $i < $numResults; $i++)  
                {  
                    $r = mysql_fetch_array($queryStats);  
                    $key = array_keys($r);  
                    for($x = 0; $x < count($key); $x++)  
                    {  
                        // Sanitizes keys so only alphavalues are allowed  
                        if(!is_int($key[$x]))  
                        {  
                            if(mysql_num_rows($queryStats) > 1)  
                                $result[$i][$key[$x]] = $r[$key[$x]];  
                            else if(mysql_num_rows($queryStats) < 1)  
                                $result = null;  
                            else  
                                $result[$key[$x]] = $r[$key[$x]];  
                        }  
                    }  
                }
                return $result;  
            }  
            else  
            {  
                return false;  
            }  
       }

	function numRows($query){
		return mysql_num_rows($query);
	}
	
	function frameQuery($table, $rows = '*', $where = null, $order = null){
		$query1 = 'SELECT '.$rows.' FROM '.$table;  
            if($where != null)  
                $query1 .= ' WHERE '.$where;  
            if($order != null)  
                $query1 .= ' ORDER BY '.$order;  
			return $query1;
	}
	
	function checkSession($sesvar){
		if(isset($_SESSION[$sesvar]))
			return true;
		else
			return false;
	}
	
	function redirect($url){
		header("location: $url");
	}
	
	function logout($sesname,$url){
		if(isset($_SESSION[$sesname])){
				unset($_SESSION[$sesname]);
				redirect($url);
		}
	}
	
	function update($tbl,$fields,$values,$where=null){
                            if(!is_array($fields) || !is_array($values))
            return 'Error - Fields and values must be sent as an array';
                        
        $field_ct  = count($fields);
        $value_ct = count($values);
        if($field_ct != $value_ct)
            return 'Error - Field count and value count do not match.';
                        $query1 = "Update `$tbl` SET ";
                        $keys = array_keys($fields); 
                        for($i = 0; $i < count($fields); $i++)  
           {  
                if(is_string($fields[$keys[$i]]))  
                {  
                    $query1 .= $fields[$i].'="'.$values[$keys[$i]].'"';  
                }  
                else  
                {  
                    $query1 .= $fields[$i].'='.$values[$keys[$i]];  
                }  
  
                // Parse to add commas  
                if($i != count($fields)-1)  
                {  
                    $query1 .= ', ';  
                }  
            }  
        $query1 .= " WHERE $where";
                $exec=query($query1);
        return $exec;
                }
	connect();
?>
