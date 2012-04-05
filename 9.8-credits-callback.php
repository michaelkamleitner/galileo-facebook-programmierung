<?
include("tools.php");
define('APP_ID', '214728715257742');
define('APP_SECRET', '********************************'); 
define('SITE_URL', 'http://apps.mycompany.com');

ob_start();
	
$signed_request = parse_signed_request(@$_REQUEST["signed_request"], APP_SECRET);
	
if (isset($_REQUEST["method"]) && isset($signed_request["credits"])) {

	$data = array();		
	$data["method"] = $_REQUEST["method"];
	
	$payload  = $signed_request["credits"];
	$order_id = $payload["order_id"];
	  		
	if ($data["method"] == "payments_status_update") {
	
	  // This is called when the User clicks "Buy Now" in the Credits-Dialog...

		if ($payload["status"] == "placed") {
		
			$next_state = "settled";
			$data["content"]["status"] = $next_state;			

			if (!empty($transaction)) {
	                    
	        if ($transaction["Transaction"]["type"] == "pack") { 
	          // Now add the actual Cards to the Database
	          
	          
					} elseif ($transaction["Transaction"]["type"] == "premium") {
					
					  // Change User to Premium
					  					  
					}
			}
	
		} else if( $payload["status"] == "settled" ){
			
			// ???
					@die;
						
		}
		
		// compose returning data array_change_key_case
		
		$data["content"]["order_id"] = $order_id;
					
	} else if ($data["method"] == "payments_get_items") {
		
		
		// This is called when the user first clicks on "Buy" - Facebook fetched the item-info and displays the dialog
		
		// Remove escape characters

		$order_info = str_replace('"','',$payload["order_info"]);  			

		$item = array();
	
		if ($order_info == "produkt-1") {          
				$item["item_id"]     = $order_info;
				$item["price"]       = 1000;
	      $item["title"]       = "eBook: Facebook Anwendungs-Programmierung von Michael Kamleitner";
	      $item["description"] = "Entwicklung von Social Apps & Websites für die Facebook-Plattform";
	      $item["image_url"]   = "http://cover.galileo-press.de/9783836218436.png";
	      $item["product_url"] = "http://www.galileocomputing.de/katalog/buecher/titel/gp/titelID-2991";	     
		} elseif ($order_info == "produkt-2") {          
	    	$item["item_id"]     = $order_info;
				$item["price"]       = 120;
	      $item["title"]       = "eBook: Wordpress 3.0 von Alexander Hetzel";
	      $item["description"] = "Das umfassende Handbuch";
	      $item["image_url"]   = "http://cover.galileo-press.de/9783836217279.png";
	      $item["product_url"] = "http://www.galileocomputing.de/katalog/buecher/titel/gp/titelID-2559?GalileoSession=49298170A5V7w5-WxWI";
		}

		if ($item) {						
			  $data["content"] = array($item);											
	  }	 
	}
	
	echo json_encode($data);
	
} else {
  die;
}

$buffer = ob_get_contents();
ob_end_clean();
file_put_contents("credits.log", $buffer."\n", FILE_APPEND);

echo $buffer; 
@die; 
?>