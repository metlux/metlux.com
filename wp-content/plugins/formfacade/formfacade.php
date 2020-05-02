<?php
/**
*@package formfacade
**/
/** 
* Plugin Name: FormFacade
* Plugin URI: https://formfacade.com/wordpress.html
* Description: Customize your Google Form to suit your wordpress site
* Version: 1.0.0
* Author: FormFacade
* Author URI: https://formfacade.com
* License: GPL v2 or Later
* Text Domain: formfacade
*/
/*
This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.

Copyright 2019 Mailrecipe LLC.
*/

defined('ABSPATH') or die('Sorry! This request is not called properly');

function_exists('add_action') or die('Sorry! This request is called outside wordpress');

class FormFacade
{
	function activate()
	{
	}

	function deactivate()
	{
		echo 'FormFacade plugin deactivated';
	}

	function renderFacade($atts = [])
	{
		$id = $atts['id'];
		$appearance = 'wordpress';
		if(array_key_exists('appearance',$atts))
			$appearance = $atts['appearance'];
		if(array_key_exists('owner',$atts))
		{
			$owner = $atts['owner'];
			return '<div id="ff-'.$id.'"></div><script async defer src="https://formfacade.com/include/'.$owner.'/form/'.$id.'/'.$appearance.'.js?div=ff-'.$id.'"></script>';
		}
		else
		{
			return '<div id="ff-'.$id.'"></div><script async defer src="https://formfacade.com/forms/d/e/'.$id.'/'.$appearance.'.js?div=ff-'.$id.'"></script>';
		}
	}
}

$formfacade = new FormFacade();


register_activation_hook( __FILE__, array($formfacade, 'activate'));
register_deactivation_hook( __FILE__, array($formfacade, 'deactivate'));
add_shortcode('formfacade', array($formfacade, 'renderFacade'));
