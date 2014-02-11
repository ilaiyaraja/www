<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');


const TMPL_CONTENT = 'content';
const TMPL_HTMLHEADEXTRA = "htmlheadextra";
const TMPL_BODYATTR = 'bodyattr';
const TMPL_RIGHT = 'right';
const TMPL_MIDDLE = 'middle';
const TMPL_LEFT = 'left';
const TMPL_MENU = 'menu';
const TMPL_HEAD = 'head';
const TMPL_HEADER = 'header';
const TMPL_TEMPLATE = 'template';
const TMPL_ALERT = 'alert';
const TMPL_FOOTER = 'footer';
const TMPL_MODAL = 'modal';
const TMPL_HEAD_APPEND = 'head_append';
const TMPL_ANALYTICS = 'analytics';
const TMPL_ANALYTICS_EXTRA = 'analytics_extra';
const TMPL_SCRIPT = 'script';

const SCAFFOLD_PATH = "scaffold";

const DASHBOARD_PATH = "dashboard";
                           
// --------------------------------------------------------------------

/**
 * ol_layout_show
 * 
 * outputs the views content in the standard container
 *
 * @access    public
 * @return    null
 */

if (!function_exists('lt_layout_show')) {
 
    function lt_layout_show($data)
    {
        $ci =& get_instance();
                          
        $template = "template/two_panel";          
         
        if (array_key_exists(TMPL_TEMPLATE, $data)) $template = $data[TMPL_TEMPLATE];
        
        log_message("debug",__CLASS__."_".__FUNCTION__." in ".__FILE__." at ".__LINE__."template:".$template);
        
        if (!array_key_exists(TMPL_HEAD, $data)) $data[TMPL_HEAD] = $ci->load->view(SCAFFOLD_PATH . '/lineten_head', $data, true);
        if (!array_key_exists(TMPL_HEADER, $data)) $data[TMPL_HEADER] = $ci->load->view(SCAFFOLD_PATH . '/lineten_header', $data, true);
        if (!array_key_exists(TMPL_MENU, $data)) $data[TMPL_MENU] = $ci->load->view(SCAFFOLD_PATH . '/lineten_menu', $data, true);       
        
        if (!array_key_exists(TMPL_LEFT, $data)) $data[TMPL_LEFT] = "";
        if (!array_key_exists(TMPL_MIDDLE, $data)) $data[TMPL_MIDDLE] = "";
        if (!array_key_exists(TMPL_RIGHT, $data)) $data[TMPL_RIGHT] = "";
        if (!array_key_exists(TMPL_BODYATTR, $data)) $data[TMPL_BODYATTR] = "";
        
        if (!array_key_exists(TMPL_FOOTER, $data)) $data[TMPL_FOOTER] = $ci->load->view(SCAFFOLD_PATH . '/lineten_footer', null, true);
        if (!array_key_exists(TMPL_MODAL, $data)) $data[TMPL_MODAL] = "";
        
        $data[TMPL_ANALYTICS] = $ci->load->view(SCAFFOLD_PATH . '/analytics', $data, true);
        if (array_key_exists(TMPL_ANALYTICS_EXTRA, $data)) {
        	$data[TMPL_ANALYTICS] = str_replace("/*EXTRA SCRIPT HERE*/", $data[TMPL_ANALYTICS_EXTRA], $data[TMPL_ANALYTICS]);
        }
        if (!array_key_exists(TMPL_SCRIPT, $data)) $data[TMPL_SCRIPT] = $ci->load->view(SCAFFOLD_PATH . '/lineten_script', null, true);
        $ci->parser->parse($template, $data);

    }

}


if (!function_exists('ltone_layout_show')) {

	function ltone_layout_show($data)
	{
		$ci =& get_instance();

		$template = "template/two_panel";
		 
		if (array_key_exists(TMPL_TEMPLATE, $data)) $template = $data[TMPL_TEMPLATE];

		log_message("debug",__CLASS__."_".__FUNCTION__." in ".__FILE__." at ".__LINE__."template:".$template);

		if (!array_key_exists(TMPL_HEAD, $data)) $data[TMPL_HEAD] = $ci->load->view(SCAFFOLD_PATH . '/lineten_head', $data, true);
		if (!array_key_exists(TMPL_HEADER, $data)) $data[TMPL_HEADER] = "";
		if (!array_key_exists(TMPL_MENU, $data)) $data[TMPL_MENU] = "";

		if (!array_key_exists(TMPL_LEFT, $data)) $data[TMPL_LEFT] = "";
		if (!array_key_exists(TMPL_MIDDLE, $data)) $data[TMPL_MIDDLE] = "";
		if (!array_key_exists(TMPL_RIGHT, $data)) $data[TMPL_RIGHT] = "";
		if (!array_key_exists(TMPL_BODYATTR, $data)) $data[TMPL_BODYATTR] = "";

		if (!array_key_exists(TMPL_FOOTER, $data)) $data[TMPL_FOOTER] = $ci->load->view(SCAFFOLD_PATH . '/lineten_footer', null, true);
		if (!array_key_exists(TMPL_MODAL, $data)) $data[TMPL_MODAL] = "";

		$data[TMPL_ANALYTICS] = $ci->load->view(SCAFFOLD_PATH . '/analytics', $data, true);
		if (array_key_exists(TMPL_ANALYTICS_EXTRA, $data)) {
			$data[TMPL_ANALYTICS] = str_replace("/*EXTRA SCRIPT HERE*/", $data[TMPL_ANALYTICS_EXTRA], $data[TMPL_ANALYTICS]);
		}
		if (!array_key_exists(TMPL_SCRIPT, $data)) $data[TMPL_SCRIPT] = $ci->load->view(SCAFFOLD_PATH . '/lineten_script', null, true);
		$ci->parser->parse($template, $data);

	}

}


if (!function_exists('dashboard_layout_show')) {

	function dashboard_layout_show($data)
	{
		$ci =& get_instance();

		$template = "template/two_panel";
			
		if (array_key_exists(TMPL_TEMPLATE, $data)) $template = $data[TMPL_TEMPLATE];

		log_message("debug",__CLASS__."_".__FUNCTION__." in ".__FILE__." at ".__LINE__."template:".$template);
		
		if (!array_key_exists(TMPL_HEAD, $data)) $data[TMPL_HEAD] = $ci->load->view(SCAFFOLD_PATH . '/lineten_head', $data, true);
		if (!array_key_exists(TMPL_MENU, $data)) $data[TMPL_MENU] = $ci->load->view(DASHBOARD_PATH . '/dashboard_menu', $data, true);
		
		if (!array_key_exists(TMPL_HEADER, $data)) $data[TMPL_HEADER] = "";
		if (!array_key_exists(TMPL_MENU, $data)) $data[TMPL_MENU] = "";

		if (!array_key_exists(TMPL_LEFT, $data)) $data[TMPL_LEFT] = "";
		if (!array_key_exists(TMPL_MIDDLE, $data)) $data[TMPL_MIDDLE] = "";
		if (!array_key_exists(TMPL_RIGHT, $data)) $data[TMPL_RIGHT] = "";
		if (!array_key_exists(TMPL_BODYATTR, $data)) $data[TMPL_BODYATTR] = "";

		if (!array_key_exists(TMPL_FOOTER, $data)) $data[TMPL_FOOTER] = $ci->load->view(DASHBOARD_PATH . '/dashboard_footer', null, true);
		if (!array_key_exists(TMPL_MODAL, $data)) $data[TMPL_MODAL] = "";

	//	$data[TMPL_ANALYTICS] = $ci->load->view(DASHBOARD_PATH . '/analytics', $data, true);
		if (array_key_exists(TMPL_ANALYTICS_EXTRA, $data)) {
			$data[TMPL_ANALYTICS] = str_replace("/*EXTRA SCRIPT HERE*/", $data[TMPL_ANALYTICS_EXTRA], $data[TMPL_ANALYTICS]);
		}
		//if (!array_key_exists(TMPL_SCRIPT, $data)) $data[TMPL_SCRIPT] = $ci->load->view(DASHBOARD_PATH . '/dashboard_script', null, true);
		$ci->parser->parse($template, $data);

	}

}

if (!function_exists('get_loaded_view'))
{
	function get_loaded_view($view_data = array("scaffold/error404" => null) )
	{
		$loaded_view = "";
		$ci =& get_instance();

		foreach ($view_data as $view => $data ) {
			$loaded_view .= $ci->load->view($view, $data, true);
		}
			
		return $loaded_view;

	}
}