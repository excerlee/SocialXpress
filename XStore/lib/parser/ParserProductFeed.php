<?php

require_once (realpath(dirname(__FILE__)).'/common.php');

class ParserProductFeed extends ParserImplBase
{	
	public function __construct ($rUrl, $hUrl)
	{
	    $this->rssUrl = $rUrl;
		$this->htmlUrl	= $hUrl;
	}
	
	/**
	 * 1. Perform the parsing based on the feed specified
	 * 2. Place the result to the $dealResult
	 */
	public function parse () 
	{
		global $ITEM_KEYS;
		//Calling magpie rss lib's fetch_rss
		$rss = fetch_rss( $this->rssUrl );
		$result = true;
		if ($rss) { 
			$count = 0;
			foreach ($rss->items as $t) {
			    var_dump($t);
				$item[$ITEM_KEYS[T_TITLE]] 	= $t['title'];
				$item[$ITEM_KEYS[T_URL]] 		= $t['link'];
				$item[$ITEM_KEYS[T_POST_FIRST]]= $t['pubdate'];
				//$matched_result  						= $this->parsePriceDiscount($t['title']);
				$item[$ITEM_KEYS[TZ_PRICE]] 	= $matched_result[0];
				$item[$ITEM_KEYS[TZ_DISCOUNT]] = $matched_result[1];
				$item[$ITEM_KEYS[T_SALESRANK]] = "";
				$item[$ITEM_KEYS[TZ_IMG]]	    = $t['imagelink'];
				$this->dealItems[$count]=$item;
				++$count;
			}//END OF foreach
			
		}else{
			//Failed to parse rss
			unset($this->dealItems);
			$result= false;
		}
		return $result;
	}//END OF funciton parse
	
	public function parseImageUrl($src){
		return $src;
	}
	
	public function parseUrl($src){
		return $src;
	}
	
	public function parseCategory($src){
		return $src;
	}
	
	public function parsePriceDiscount($src){
		//TODO: add discount info parsing
		$result = parsePricingInfo($src);
		return $result;
	}
	
	public function parseDiscount($src){
		return $src;
	}
	
	public function parsePubDate($src){
		return $src;
	}


}