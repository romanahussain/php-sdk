<?php namespace Horntell;

abstract class App {

	/**
	 * The app's key to authenticate the API requests
	 * 
	 * @var string
	 */
	public static $key;

	/**
	 * The app's secret to authenticate the API requests
	 * 
	 * @var string
	 */
	public static $secret;

	/**
	 * The base URL for Horntell API
	 * 
	 * @var string
	 */
	public static $base = 'https://api.horntell.com';

	/**
	 * The version of API to use
	 * 
	 * @var string
	 */
	public static $version = 'v1';

	/**
	 * Boots the app using key and secret
	 * 
	 * @param  string $key
	 * @param  string $secret
	 * @return void
	 */
	public static function init($key, $secret)
	{
		self::$key = $key;
		self::$secret = $secret;
	}

	/**
	 * Returns the app's key
	 * 
	 * @return string
	 */
	public static function getKey()
	{
		return self::$key;
	}

	/**
	 * Returns the app's secret
	 * 
	 * @return string
	 */
	public static function getSecret()
	{
		return self::$secret;
	}

	/**
	 * Sets the base URL for the API to use
	 * 
	 * @param string $base
	 */
	public static function setBase($base)
	{
		self::$base = $base;
	}

	/**
	 * Returns the base URL for API
	 * 
	 * @return string
	 */
	public static function getBase()
	{
		return self::$base;
	}

	/**
	 * Sets the version of API to use
	 * 
	 * @param string $version
	 */
	public static function setVersion($version)
	{
		self::$version = $version;
	}

	/**
	 * Returns the API version to use
	 * 
	 * @return string
	 */
	public static function getVersion()
	{
		return self::$version;
	}
}