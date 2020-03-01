<?php
/**
 * additional functions for junsatusma-theme
 *
 * @author egmc
 */
function getTitleImageURL() {
	$title_text = "";
	$title_text = the_title("", "", false);
	$title_text = strtolower($title_text);
	$title_text = str_replace(' ', '_', $title_text);

    $targe_path = "/images/title_{$title_text}_250-60.png";

    $full_path = __DIR__ . $targe_path;

    $img_url = "";

    if (file_exists($full_path)) {
        $img_url = "/wp-content/themes/junsatsuma-theme" . $targe_path;
    }

	return $img_url;
}
