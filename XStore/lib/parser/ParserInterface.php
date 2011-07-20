<?php 

/**
 * 
 * 
 * Interface for different parers;
 * 
 * There are mainly two types of feed out there: RSS 0.9-2.0 & ATOM
 * We need to develop different parsers for different types of feeds;
 * @author joeli
 *
 */
interface ParserInterface 
{
	
	public function getFeedItems();
	
	/* *********************************************************************************
	 * Below are the parser methods to get the major attributes for each deal attributes
	 * *********************************************************************************
	 */
	public function parse();
	
	//public function getResultInJSON();
	
	//public function getResultInXML();
	
	public function parseImageUrl($src);
	
	public function parseUrl($src);
	
	public function parseCategory($src);
	
	/**
	 * Returns an array of results, price, discount
	 * @param unknown_type $src
	 */
	public function parsePriceDiscount($src);
	
	//public function parseDiscount($src);
	
	public function parsePubDate($src);

}