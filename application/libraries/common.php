<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 

class Common {

    public function alertGo($msg, $url)
    {
    	$query = sprintf("<script>alert('%s'); location.href='%s'</script>",$msg, $url);
    	echo $query;
    	exit;
    }
    
    public function redirect($url)
    {
    	$query = sprintf("<script>location.href='%s'</script>",$url);
    	echo $query;
    	exit;
    }
    
    public function getUrl(){
    	echo "http://localhost/tasmaniac/";
    }
    
    public function getUrlReturn(){
    	return "http://localhost/tasmaniac/";
    }
}

/* End of file Someclass.php */