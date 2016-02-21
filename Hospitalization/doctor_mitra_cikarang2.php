<!doctype html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<title>HTML Parser</title>
	</head>
	<body>
		<?php
		include_once('libs/simple_html_dom.php');
		$url = "http://mitrakeluarga.com/cikarang/";
		$adds = "jadwal-dokter/?wpvcategory=0&wpv_column_sort_id=post_title&wpv_column_sort_dir=asc&wpv_post_id=75&wpv_view_count=6175&wpv_paged=2";
		$nextLink = $url . $adds;
		

		//$add_url = "http://mitrakeluarga.com";
		
		//while ($nextLink) {
			// echo "<hr>nextLink: $nextLink<br>";
			$html = new simple_html_dom();
			$html->load_file($nextLink);
			$posts = $html->find('div[class="hidden-desktop widget widget_ultimatumwysiwyg inner-container"] table tbody tr');
			// $posts = $html->find('div[class="hidden-desktop widget widget_ultimatumwysiwyg inner-container"] table tbody tr');
			
			foreach($posts as $post) {
					$articles = $post->children(0)->outertext;        
					echo $articles.'</br>';
				}

			// $tempLink = (($temp = $html->find('ul[class="wpv_pagination_numbers"] li', 0)->last_child()) ? $temp->href : NULL );
			// $nextLink = "http://mitrakeluarga.com" . $tempLink;
			$html->clear();
			unset($html);
		//}

		// $temp = $html->find('ul[class="wpv_pagination_numbers"] a', 0)->href;
		// echo $temp;

		?>
	
	<center>
		<table>	
		<th></th>
		<tr>
			<td>
			</td>
		</tr>

		</table>
	</center>
	
	</body>
</html>