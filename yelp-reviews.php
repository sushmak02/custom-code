<?php
    $business_id = 'ling-ho-chinese-cuisine-los-angeles';
    $url = 'https://api.yelp.com/v3/businesses/' . $business_id . '/reviews';
    $yelp_api_key = 'xxxxxxxxxxxxxxxxxxxxx';
    $curl = curl_init();

			curl_setopt_array(
				$curl,
				array(
					CURLOPT_URL            => $url,
					CURLOPT_RETURNTRANSFER => true,  // Capture response.
					CURLOPT_ENCODING       => '',  // Accept gzip/deflate/whatever.
					CURLOPT_MAXREDIRS      => 10,
					CURLOPT_TIMEOUT        => 30,
					CURLOPT_HTTP_VERSION   => CURL_HTTP_VERSION_1_1,
					CURLOPT_CUSTOMREQUEST  => 'GET',
					CURLOPT_HTTPHEADER     => array(
						'authorization: Bearer ' . $yelp_api_key,
						'cache-control: no-cache',
					),
				)
			);
    $result = curl_exec( $curl );
    curl_close( $curl );
    $reviews = json_decode( $result );
      
?>
