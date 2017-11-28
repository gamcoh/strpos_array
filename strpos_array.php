<?php

function strpos_array(string $haystack, ...$needles): bool
{
	if (count($needles) == 1 && is_array($needles[0])) {
		$needles = $needles[0];
	}

	foreach ($needles as $val) {
		if (strpos($haystack, $val) !== false) {
			return true;
		}
	}

	return false;
}
