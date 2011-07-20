<?php

/**
 * The Feed specific parsers are just reponsible for parsing feeds and generate ideal feed format
 * 1. Input: feed;
 * 2. Output:an array of dictionary objects with following fileds
 *
 * @param $class_name
 */
abstract class ParserImplBase implements ParserInterface 
{
	protected $rssUrl;
	protected $htmlUrl;
	protected $dealItems;

	public function __construct ($rUrl, $hUrl)
	{
		$this->rssUrl = $rUrl;
		$this->htmlUrl	= $hUrl;	
	}
	
	public function getFeedItems()
	{
		return $this->dealItems;
	}

	/* *********************************************************************************
	 * Below are the parser methods to get the major attributes for each deal attributes
	 * *********************************************************************************
	 */	
	/*
	public function parse();
	
	public function parseImageUrl($src);
	
	public function parseUrl($src);
	
	public function parseCategory($src);
	
	public function parsePriceDiscount($src);
	
	//public function parseDiscount($src);
	
	public function parsePubDate($src);
	*/

}