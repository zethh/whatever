<?php
/*
Plugin Name: Simple WoW Recruitment
Plugin URI: http://screennetz.de/develop/simple-wow-recruitment/
Description: Simple World of Warcraft recruitment widget
Author: tumichnix
Version: 1.0.3
Author URI: http://screennetz.de/
*/

/*  Copyright 2010-2012 tumichnix (email: tumichnix at screennetz.de)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License as published by
    the Free Software Foundation; either version 2 of the License, or
    (at your option) any later version.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

class SimpleWowRecruitment extends WP_Widget {

    /**
     * URL to plugin images
     */
    private $urlImages;

    /**
     * wow class
     */
    private $class = array(
        'deathknight' => array('blood', 'frost', 'unholy'),
        'druid' => array('balance', 'guardian', 'feral', 'restoration'),
        'hunter' => array('beast_mastery', 'marksmanship', 'survival'),
        'mage' => array('arcane', 'fire', 'frost'),
    	'monk' => array('brewmaster', 'mistweaver', 'windwalker'),
        'paladin' => array('holy', 'protection', 'retribution'),
        'priest' => array('discipline', 'holy', 'shadow'),
        'rogue' => array('assassination', 'combat', 'subtlety'),
        'shaman' => array('elemental', 'enhancement', 'restoration'),
        'warlock' => array('affliction', 'demonology', 'destruction'),
        'warrior' => array('arms', 'fury', 'protection')
    );

    /**
     * search options
     */
    private $searchOptions = array(
        0 => 'closed',
        1 => 'low',
        2 => 'medium',
        3 => 'high'
    );
	
	/**
	 * constructor
	 * @return void
	 */
	public function __construct() {
		$this->urlImages = WP_PLUGIN_URL.'/simple-wow-recruitment/images';
		parent::__construct('SimpleWowRecruitment', 'WoW-Recruitment', array('description' => 'Simple WoW Recruitment Widget'));
	}
	
	/**
	 * form
	 * @param array $instance 
	 * @return void
	 */
    public function form($instance) {
		$title = ($instance) ? esc_attr($instance['title']) : 'Recruitment';
        echo 'Title:<br />';
        echo '<input type="text" class="widefat" id="'.$this->get_field_id('title').'" name="'.$this->get_field_name('title').'" value="'.$title.'" />';
        echo '<br /><br />';
		echo '<ul style="list-style-type: none">';
		foreach ($this->class as $class => $skills) {
            echo '<li><img src="'.$this->urlImages.'/class/'.$class.'.png" style="vertical-align: middle" /> <b>'.ucfirst($class).'</b>';
            echo '<ul style="margin-top: 10px; list-style-type: none">';
            foreach ($skills as $skill) {
				$key = $class.'-'.$skill;
                echo '<li style="padding-left: 30px"><img src="'.$this->urlImages.'/skills/'.$class.'_'.$skill.'.png" title="'.$this->formatSkill($skill).'" style="vertical-align: middle" />';
                echo '<select name="'.$this->get_field_name($key).'" id="'.$this->get_field_id($key).'" style="margin-left: 10px; width: 150px">';
                foreach ($this->searchOptions as $searchKey => $searchVal) {
                    echo '<option value="'.$searchKey.'" '.((array_key_exists($key, $instance) && $instance[$key] == $searchKey) ? 'selected="selected"' : '').'>'.$searchVal.'</option>';
                }
                echo '</select>';
                echo '</li>';
            }
            echo '</ul></li>';
        }
        echo '</ul>';
    }
	
	/**
	 * save
	 * @param array $new_instance
	 * @param array $old_instance
	 * @return array 
	 */
	public function update($newInstance, $oldInstance) {	
		$instance = $newInstance;
		$instance['title'] = strip_tags($newInstance['title']);		
		return $instance;
	}

	/**
	 *
	 * @param type $args
	 * @param type $instance 
	 */
    public function widget($args, $instance) {

        echo '<li id="'.$args['widget_id'].'" class="widget"><h2 class="widgettitle">'.$instance['title'].'</h2>';
        echo '<div style="padding: 5px;"><table width="100%" border="0">';
        foreach ($this->class as $class => $skills) {
			echo '<tr height="22"><td><img src="'.$this->urlImages.'/class/'.$class.'.png" / style="vertical-align:middle;"> <span class="'.$class.'">'.ucfirst($class).'</span></td>';
			echo '<td width="95" style="text-align: right">';		
			foreach ($skills as $skill) {
				$key = $class.'-'.$skill;
				if (array_key_exists($key, $instance)) {
					if ($instance[$key] > 0) {
						echo '<img src="'.$this->urlImages.'/skills/'.$class.'_'.$skill.'.png" title="'.$this->formatSkill($skill).': '.$this->searchOptions[$instance[$key]].'"  style="vertical-align:middle;"/> ';
					} else {
						echo '<img src="'.$this->urlImages.'/skills/'.$class.'_'.$skill.'.png" title="'.$this->formatSkill($skill).': '.$this->searchOptions[$instance[$key]].'"  style="vertical-align:middle; filter:alpha(opacity=15); -moz-opacity: 0.15; opacity: 0.15;"/> ';
					}
				}
			}
			echo '</td></tr>';
        }
        echo '</table></div></li>';
    }

    /**
     * format skillname
     * @param string $skill
     * @return string
     */
    private function formatSkill($skill) {

        return ucfirst(str_replace('_', ' ', $skill));
    }
}
add_action('widgets_init', create_function('', 'return register_widget("SimpleWowRecruitment");'));
?>