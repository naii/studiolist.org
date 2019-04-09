<?php

	function getStudioData($filepath) {
		// $file = "studios/studiolist-berlin-germany-studiolist-berlin-germany.csv";
		$content = file_get_contents($filepath);
		// $data = explode(';', $content); // The explode() function breaks a string into an array.
		
		// via http://de.php.net/manual/de/function.explode.php#114481
		$delimiter = array("\n",";");
		$replace = str_replace($delimiter, $delimiter[0], $content);
		$explode = explode($delimiter[0], $replace);
		$data = $explode;

		return $data;
	}

	function getColumnName($filepath, $dataCellId) {
		$data = getStudioData($filepath);
		$columnName = $data[$dataCellId];
		showOnScreen($columnName);
	}

	function showOnScreen($columnName) {
		print_r($columnName);
	}

	function buildHTMLTable($filepath) {
		$data = getStudioData($filepath);
		$data = array_slice($data, 1, sizeof($data)); // remove first 3 entries of the array since they are the headers that I don't need now

		// print_r($data);

		// via https://stackoverflow.com/a/518923/863818
		$counter = 0;
		foreach ($data as $cell) {
			echo "<td>" . htmlspecialchars($cell) . "</td>";
			$counter++;
			if($counter % 1 == 0) {
				echo "</tr>\n";
			}
		}
	}
?>	