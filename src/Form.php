<?php

class Form
{
	protected static function attributes($attributes)
	{
		$output = '';

		if (!empty($attributes))
		{
			foreach($attributes as $key => $value){
				if (is_numeric($key) || is_bool($key))
					$key = $value;

			    $output .= $key . '="' . $value . '" ';
			}
		}

		return $output;
	}

	public static function simpleInput($name, $title, $value = null, array $options = [])
	{
		$title = ucwords($title);
		$options = array_merge(['class' => "form-control", 'placeholder' => $title], $options);
		$attributes = self::attributes($options);
		$html  = "<div class='form-group'>";
		$html .= "<label for='$name'>$title</label>";
		$html .= "<input id='$name' name='$name' type='text' value='$value' ". $attributes .">";
		$html .= "</div>";

		return $html;
	}

	public static function simpleTextarea($name, $title, $value = null, array $options = [])
	{
		$title = ucwords($title);
		$options = array_merge(['class' => "form-control", 'placeholder' => $title], $options);
		$attributes = self::attributes($options);
		$html  = "<div class='form-group'>";
		$html .= "<label for='$name'>$title</label>";
		$html .= "<textarea id='$name' name='$name' rows='4' ". $attributes .">". $value ."</textarea>";
		$html .= "</div>";

		return $html;
	}

	public static function simpleCheckbox($name, $title, $value = null)
	{
		$title = ucwords($title);
		$html  = "<div class='form-check'>";
		$html .= "<label class='form-check-label'>";
		$html .= "<input id='$name' name='$name' type='checkbox' class='form-check-input' value='$value'";
		$html .= (bool) $value ? "checked='checked'>" : '>';
		$html .= " $title</label>";
		$html .= "</div>";

		return $html;
	}

	public static function simpleSelect($name, $title, array $choices, $selected = null, array $options = [])
	{
		$title = ucwords($title);

	    /* Bootstrap default class */
	    $array_option = ['class' => 'form-control'];

	    if (array_key_exists("class", $options)) {
	        $array_option = ['class' => $array_option['class'] . ' ' . $options['class']];
	        unset($options['class']);
	    }

	    $options = array_merge($array_option, $options);
	    $attributes = self::attributes($options);

		$html  = "<div class='form-group'>";
		$html .= "<label for='$name'>$title</label>";
		$html .= "<select id='$name' name='$name' ". $attributes .">";

		if (!empty($choices)) {
			foreach ($choices as $value => $display) {
				if ($value === $selected)
					$html .= "<option value='$value' selected='selected'>".$display."</option>";
				else
					$html .= "<option value='$value'>".$display."</option>";
			}
		}

		$html .= "</select>";
		$html .= "</div>";

		return $html;
	}

	// public static function simpleInput($name, $title, $value = null)
	// {
	// 	$title = ucwords($title);
	// 	$html  = "<div class='form-group'>";
	// 	$html .= "<label for='$name'>$title</label>";
	// 	$html .= "<input id='$name' name='$name' type='text' class='form-control' value='$value' placeholder='$title'>";
	// 	$html .= "</div>";

	// 	return $html;
	// }

	// public static function simpleTextarea($name, $title, $value = null)
	// {
	// 	$title = ucwords($title);
	// 	$html  = "<div class='form-group'>";
	// 	$html .= "<label for='$name'>$title</label>";
	// 	$html .= "<textarea id='$name' name='$name' class='form-control' rows='4' placeholder='$title'>". $value ."</textarea>";
	// 	$html .= "</div>";

	// 	return $html;
	// }

	// public static function simpleCheckbox($name, $title, $value = null)
	// {
	// 	$title = ucwords($title);
	// 	$html  = "<div class='form-check'>";
	// 	$html .= "<label class='form-check-label'>";
	// 	$html .= "<input id='$name' name='$name' type='checkbox' class='form-check-input' value='$value'";
	// 	$html .= (bool) $value ? "checked='checked'>" : '>';
	// 	$html .= " $title</label>";
	// 	$html .= "</div>";

	// 	return $html;
	// }

	// public static function simpleSelect($name, $title, array $options, $choice = null)
	// {
	// 	$title = ucwords($title);
	// 	$html  = "<div class='form-group'>";
	// 	$html .= "<label for='$name'>$title</label>";
	// 	$html .= "<select id='$name' name='$name' class='form-control'>";

	// 	if (!empty($options)) {
	// 		foreach ($options as $value => $display) {
	// 			if ($value === $choice)
	// 				$html .= "<option value='$value' selected='selected'>".$display."</option>";
	// 			else
	// 				$html .= "<option value='$value'>".$display."</option>";
	// 		}
	// 	}

	// 	$html .= "</select>";
	// 	$html .= "</div>";

	// 	return $html;
	// }
}