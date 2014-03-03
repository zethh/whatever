<?php

function editorFor($url, $path, $attr, $name, $default)
{

    $JSON = file_get_contents($url, true);

    $list = json_decode($JSON, true);

    if (!$list){

        $editor = '<input type="text" name="' . $name . '" />';

    }else{

        $editor = '<select name="' . $name . '">';

        foreach($list[$path] as $item) {

        	if ($item[$attr] == $default){

        		$editor .= "<option selected='" . $item[$attr] . "'>";

        	}else{

        		$editor .= "<option>";

        	}

            $editor .= $item[$attr] . "</option>";

        }

        $editor .= ' </select>';
	}

	return $editor;
}

function editorForClass($name, $default = "")
{
	$url = "http://eu.battle.net/api/wow/data/character/classes";

	$path = "classes";

	$attr = "name";

	return editorFor($url, $path, $attr, $name, $class);
}

function editorForRealm($name, $default = "")
{
	$url = "http://eu.battle.net/api/wow/realm/status";

	$path = "realms";

	$attr = "name";

	return editorFor($url, $path, $attr, $name, $default);
}


?>