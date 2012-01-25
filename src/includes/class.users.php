<?php
class users{
private $uid,$uname,$uemail,$upwd,$ugender,$udob,$ujdate,$uprof,$uimage,$torders,$loid;

public function __construct()
{
/*$argv = func_get_args();
$argc = func_num_args();
if($argc==1)
call_user_func_array(array($this,'view'),$argv);
if($i>1)
call_user_func_array(array($this,'create'),$argv);*/
echo "Constructor!";
}

public function view($uid){

}

public function create($fields,$values){
if(!is_array($fields) || !is_array($values))
            return 'Error - Fields and values must be sent as an array';
                        
        $field_ct  = count($fields);
        $value_ct = count($values);
        if($field_ct != $value_ct)
            return 'Error - Field count and value count do not match.';
                        
        $query1 = "INSERT INTO `users` (`";
        $query1 .= implode('`, `', $fields) . "`) VALUES ('";
        $query1 .= implode("', '", $values) . "')";
        $exec=mysql_query($query1);
        return $exec;

}

}
?>
