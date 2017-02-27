<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

class Goyield
{
	function do_Yield()
	{
		global $OUT;
		$CI =& get_instance();
		$output = $CI->output->get_output();
			
		if($CI->input->get('debug') == 'Y')
		{
			$CI->output->enable_profiler(TRUE);
		}
		
		$CI->yield 		= isset($CI->yield) ? $CI->yield : TRUE;
		$CI->layout 	= isset($CI->layout) ? $CI->layout : 'default';		
		
		$CI->parent_id		= $CI->uri->segment(1, 0);
			
		if(empty($CI->parent_id))
		{
			$CI->parent_id		= "main";
		}
			
		$CI->sub_id			= $CI->uri->segment(2, 0);
		
		if ($CI->yield === TRUE)
		{
			
			/*
			if(!($CI->session->userdata('A_USER_ID')))
			{
				$CI->common->alertGo("세션없음.","/");
			}
			
			
			$CI->load->model('m_common');
			$CI->menu = $CI->m_common->getMenu();
			
			$navi				= explode("?",$_SERVER['REQUEST_URI']);
			$CI->nav		= $navi[0];
			
 			$CI->config->load('config', false, true);
			*/
			
			$requested = APPPATH.'views/layouts/'.$CI->layout.EXT;
			
			
			
			if(file_exists($requested))
			{		
				
				$layout = $CI->load->file($requested, true);
				$output = str_replace('{yield}', $output, $layout);
				
				/*
				if(preg_match_all('/{yield[\s]*([^}]*)}/', $layout, $matches)  && array_key_exists(1, $matches))
				{
					
					foreach($matches[1] as $k => $v)
					{
						if(!empty($v))
						{
							$requested = APPPATH.'views/layouts/'.$CI->layout.'/'.$v.EXT;
							if(!file_exists(FCPATH.$requested))
							{
								$requested = APPPATH.'views/layouts/default/'.$v.EXT;
							}
							                          
							$yield = $CI->load->file($requested, true);
							$output = str_replace(sprintf('{yield %s}', $v), $yield, $output);
						}
					}
				}
				*/
			}
		}
		
		$OUT->_display($output);
		
	}
}