<?php

function editorFor($url, $path, $attr, $name)
{

    $JSON = file_get_contents($url, true);

    $list = json_decode($JSON, true);

    if (!$list){

        $editor = '<input type="text" name="' . $name . '" />';

    }else{

        $editor = '<select name="' . $name . '">';

        foreach($list[$path] as $item) {

            $editor .= "<option>" . $item[$attr] . "</option>";

        }

        $editor .= ' </select>';
	}

	return $editor;
}

function editorForClass($name)
{
	$url = "http://eu.battle.net/api/wow/data/character/classes";

	$path = "classes";

	$attr = "name";

	return editorFor($url, $path, $attr, $name, $label);
}

function editorForRealm($name)
{
	$url = "http://eu.battle.net/api/wow/realm/status";

	$path = "realms";

	$attr = "name";

	return editorFor($url, $path, $attr, $name, $label);
}

?>