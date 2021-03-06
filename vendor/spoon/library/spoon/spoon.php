<?php

/**
 * Spoon Library
 *
 * This source file is part of the Spoon Library. More information,
 * documentation and tutorials can be found @ http://www.spoon-library.com
 *
 * @package		spoon
 *
 *
 * @author		Davy Hellemans <davy@spoon-library.com>
 * @since		0.1.1
 */

/*
 * This is the version number for the current version of the
 * Spoon Library.
 */
define('SPOON_VERSION', '1.3.4');

/* SpoonException class */
require_once 'spoon/exception/exception.php';

// check mbstring extension
if(!extension_loaded('mbstring'))
{
	throw new SpoonException('You need to make sure the mbstring extension is loaded.');
}

$output = '<!DOCTYPE HTML>
			<html lang="en">
				<head>
						<meta charset="utf-8">
						<title>Error!</title>
						<style type="text/css">
							body { background-color: #ebf3f9; margin: 0; padding: 0; border: 0; font-family: Arial; }
							h1 { color: #333333; font-size: 20px; line-height: 0; margin-bottom: 30px; }
							p { color: #666666; font-size: 13px; }
							#container { position: absolute; left: 50%; top: 50%; width: 340px; height: 471px; margin-left: -200px; margin-top: -250px; }
							#balloon { background-color: #FFF; width: 340px; padding: 30px; border: 1px solid #c3c3c3; -webkit-border-radius: 3px; -moz-border-radius: 3px; border-radius: 3px; }
							#triangle { background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAACgAAAAVCAYAAAA0GqweAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA7VpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wUmlnaHRzPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvcmlnaHRzLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcFJpZ2h0czpNYXJrZWQ9IkZhbHNlIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6MDE4MDExNzQwNzIwNjgxMTg3MUZFMDQzMzFEMEEzNUUiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MzJDQTBBQzJBNzM2MTFFMUI1MEM5QzEwRkFDRTlENTYiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MzJDQTBBQzFBNzM2MTFFMUI1MEM5QzEwRkFDRTlENTYiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpGNzdGMTE3NDA3MjA2ODExOTJCMEZDMUY0NjNBQjdBMyIgc3RSZWY6ZG9jdW1lbnRJRD0ieG1wLmRpZDozN0Q5NjczNzYxNDgxMUUwOTA4Q0VFMzEzNEJGNDExMiIvPiA8L3JkZjpEZXNjcmlwdGlvbj4gPC9yZGY6UkRGPiA8L3g6eG1wbWV0YT4gPD94cGFja2V0IGVuZD0iciI/PpGPG08AAAC+SURBVHjazNYxDsMgDAVQF4VrcNRW6jmZWDgEQ9svdSBRCLZxEv4A5rO8CfGIMX5CCOS9p5lSSqGUErmc8xsDitlwsLnf+TUTssbB5v79FMgtDp2r7m9F7uG2wNuQLdwe8HLkEa4FvAzZwx0BT0dycD3gaUgujgM0R0pwXKAZUoqTAIeRGpwUqEZqcRqgGDmC0wLZyFHcCLCLtMCNAptIKxyyGLy7QGJ/4meOWOGsgCskFiucJbBGkhUO+QowAHLmWpHUFvdBAAAAAElFTkSuQmCC); margin-left: 180px; margin-top: -1px; width: 40px; height: 21px; }
							#bottom { background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAZAAAAEPCAYAAABsj5JaAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAA7VpVFh0WE1MOmNvbS5hZG9iZS54bXAAAAAAADw/eHBhY2tldCBiZWdpbj0i77u/IiBpZD0iVzVNME1wQ2VoaUh6cmVTek5UY3prYzlkIj8+IDx4OnhtcG1ldGEgeG1sbnM6eD0iYWRvYmU6bnM6bWV0YS8iIHg6eG1wdGs9IkFkb2JlIFhNUCBDb3JlIDUuMC1jMDYwIDYxLjEzNDc3NywgMjAxMC8wMi8xMi0xNzozMjowMCAgICAgICAgIj4gPHJkZjpSREYgeG1sbnM6cmRmPSJodHRwOi8vd3d3LnczLm9yZy8xOTk5LzAyLzIyLXJkZi1zeW50YXgtbnMjIj4gPHJkZjpEZXNjcmlwdGlvbiByZGY6YWJvdXQ9IiIgeG1sbnM6eG1wUmlnaHRzPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvcmlnaHRzLyIgeG1sbnM6eG1wTU09Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC9tbS8iIHhtbG5zOnN0UmVmPSJodHRwOi8vbnMuYWRvYmUuY29tL3hhcC8xLjAvc1R5cGUvUmVzb3VyY2VSZWYjIiB4bWxuczp4bXA9Imh0dHA6Ly9ucy5hZG9iZS5jb20veGFwLzEuMC8iIHhtcFJpZ2h0czpNYXJrZWQ9IkZhbHNlIiB4bXBNTTpPcmlnaW5hbERvY3VtZW50SUQ9InhtcC5kaWQ6MDE4MDExNzQwNzIwNjgxMTg3MUZFMDQzMzFEMEEzNUUiIHhtcE1NOkRvY3VtZW50SUQ9InhtcC5kaWQ6MzJDQTBBQkVBNzM2MTFFMUI1MEM5QzEwRkFDRTlENTYiIHhtcE1NOkluc3RhbmNlSUQ9InhtcC5paWQ6MzJDQTBBQkRBNzM2MTFFMUI1MEM5QzEwRkFDRTlENTYiIHhtcDpDcmVhdG9yVG9vbD0iQWRvYmUgUGhvdG9zaG9wIENTNSBNYWNpbnRvc2giPiA8eG1wTU06RGVyaXZlZEZyb20gc3RSZWY6aW5zdGFuY2VJRD0ieG1wLmlpZDpGNzdGMTE3NDA3MjA2ODExOTJCMEZDMUY0NjNBQjdB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); width: 400px; height: 271px; margin-top: 10px; }
						</style>
				</head>
				<body>
					<div id="container">
						<div id="balloon">
							<h1>Oops! An error occurred!</h1>
							<p>Something is broken. Please let us know what you were doing when this error occurred. We will fix it as soon as possible. Sorry for any inconvenience caused.</p>
						</div>
						<div id="triangle">&nbsp;</div>
						<div id="bottom">&nbsp;</div>
					</div>
				</body>
			</html>';
Spoon::setDebugMessage($output);

spl_autoload_register(array('Spoon', 'autoLoader'));

/**
 * This class holds objects/data in a name based registry to make them easily
 * available throughout your application.
 *
 * @package		spoon
 *
 *
 * @author		Davy Hellemans <davy@spoon-library.com>
 * @since		0.1.1
 */
class Spoon
{
	/**
	 * Registry of variables
	 *
	 * @var	array
	 */
	private static $registry = array();


	/*
	 * @var bool
	 */
	private static $debug = true;


	/**
	 * @var string
	 */
	private static $charset = 'utf-8', $debugEmail = '', $debugMessage = '', $exceptionCallback;


	/**
	 * Spoon autoloader
	 *
	 * @param	string $class	The class that should be loaded.
	 */
	public static function autoLoader($class)
	{
		// redefine class
		$class = strtolower($class);

		// list of classes and their location
		$classes = array();
		$classes['spooncookie'] = 'cookie/cookie.php';
		$classes['spoondatabase'] = 'database/database.php';
		$classes['spoondatagrid'] = 'datagrid/datagrid.php';
		$classes['spoondatagridcolumn'] = 'datagrid/column.php';
		$classes['ispoondatagridpaging'] = 'datagrid/paging.php';
		$classes['spoondatagridpaging'] = 'datagrid/paging.php';
		$classes['spoondatagridsource'] = 'datagrid/source.php';
		$classes['spoondatagridsourcearray'] = 'datagrid/source_array.php';
		$classes['spoondatagridsourcedb'] = 'datagrid/source_db.php';
		$classes['spoondate'] = 'date/date.php';
		$classes['spoondirectory'] = 'directory/directory.php';
		$classes['spoonemail'] = 'email/email.php';
		$classes['spoonemailsmtp'] = 'email/smtp.php';
		$classes['spoonfeedexception'] = 'feed/exception.php';
		$classes['spoonfeedrss'] = 'feed/rss.php';
		$classes['spoonfeedrssitem'] = 'feed/rss_item.php';
		$classes['spoonfeedatomrss'] = 'feed/atom_rss.php';
		$classes['spoonfeedatomrssitem'] = 'feed/atom_rss_item.php';
		$classes['spoonfile'] = 'file/file.php';
		$classes['spoonfilecsv'] = 'file/csv.php';
		$classes['spoonfilter'] = 'filter/filter.php';
		$classes['spoonform'] = 'form/form.php';
		$classes['spoonformattributes'] = 'form/attributes.php';
		$classes['spoonformbutton'] = 'form/button.php';
		$classes['spoonformcheckbox'] = 'form/checkbox.php';
		$classes['spoonformdate'] = 'form/date.php';
		$classes['spoonformdropdown'] = 'form/dropdown.php';
		$classes['spoonformelement'] = 'form/element.php';
		$classes['spoonformfile'] = 'form/file.php';
		$classes['spoonformhidden'] = 'form/hidden.php';
		$classes['spoonformimage'] = 'form/image.php';
		$classes['spoonforminput'] = 'form/input.php';
		$classes['spoonformmulticheckbox'] = 'form/multi_checkbox.php';
		$classes['spoonformpassword'] = 'form/password.php';
		$classes['spoonformradiobutton'] = 'form/radiobutton.php';
		$classes['spoonformtext'] = 'form/text.php';
		$classes['spoonformtextarea'] = 'form/textarea.php';
		$classes['spoonformtime'] = 'form/time.php';
		$classes['spoonhttp'] = 'http/http.php';
		$classes['spoonicalexception'] = 'ical/exception.php';
		$classes['spoonical'] = 'ical/ical.php';
		$classes['spoonicalitem'] = 'ical/ical';
		$classes['Spoonicalevent'] = 'ical/ical';
		$classes['spoonlocale'] = 'locale/locale.php';
		$classes['spoonlog'] = 'log/log.php';
		$classes['spoonrestclient'] = 'rest/client.php';
		$classes['spoonsession'] = 'session/session.php';
		$classes['spoontemplate'] = 'template/template.php';
		$classes['spoontemplatecompiler'] = 'template/compiler.php';
		$classes['spoontemplatemodifiers'] = 'template/modifiers.php';
		$classes['spoonthumbnail'] = 'thumbnail/thumbnail.php';
		$classes['spoonxmlrpcclient'] = 'xmlrpc/client.php';

		// path
		$path = dirname(realpath(__FILE__));

		// does this file exist?
		if(isset($classes[$class]) && file_exists($path . '/' . $classes[$class]))
		{
			require_once $path . '/' . $classes[$class];
		}
	}


	/**
	 * Dumps the output of a variable in a more readable manner.
	 *
	 * @param	mixed $var				The variable to dump.
	 * @param	bool[optional] $exit	Should the code stop here?
	 */
	public static function dump($var, $exit = true)
	{
		ob_start();
		var_dump($var);
		$output = ob_get_clean();

		// Make sure var_dump is not overridden by Xdebug before tweaking its output.
		// Note that all truthy INI values ("On", "true", 1) are returned as "1" by ini_get().
		$hasXdebugVarDump = extension_loaded('xdebug') && ini_get('xdebug.overload_var_dump') === '1';

		if(!$hasXdebugVarDump)
		{
			$output = preg_replace('/\]\=\>\n(\s+)/m', '] => ', $output);
			$output = '<pre>' . htmlspecialchars($output, ENT_QUOTES, Spoon::getCharset()) . '</pre>';
		}

		echo $output;
		if($exit) exit;
	}


	/**
	 * Checks if an object with this name is in the registry.
	 *
	 * @return	bool
	 * @param	string $name	The name of the registry item to check for existence.
	 */
	public static function exists($name)
	{
		return isset(self::$registry[(string) $name]);
	}


	/**
	 * Fetch an item from the registry.
	 *
	 * @return	mixed
	 * @param	string $name	The name of the item to fetch.
	 */
	public static function get($name)
	{
		$name = (string) $name;

		if(!isset(self::$registry[$name]))
		{
			throw new SpoonException('No item "' . $name . '" exists in the registry.');
		}

		return self::$registry[$name];
	}


	/**
	 * @return string
	 */
	public static function getCharset()
	{
		return self::$charset;
	}


	/**
	 * Retrieve the list of available charsets.
	 *
	 * @return	array
	 */
	public static function getCharsets()
	{
		return array('utf-8', 'iso-8859-1', 'iso-8859-15');
	}


	/**
	 * @return bool
	 */
	public static function getDebug()
	{
		return self::$debug;
	}


	/**
	 * @return string
	 */
	public static function getDebugEmail()
	{
		return self::$debugEmail;
	}


	/**
	 * @return string
	 */
	public static function getDebugMessage()
	{
		return self::$debugMessage;
	}


	/**
	 * @return string
	 */
	public static function getExceptionCallback()
	{
		return self::$exceptionCallback;
	}


	/**
	 * Are we running in the command line?
	 *
	 * @return	bool
	 */
	public static function inCli()
	{
		return (PHP_SAPI == 'cli');
	}


	/**
	 * Registers a given value under a given name.
	 *
	 * @param	string $name			The name of the value to store.
	 * @param	mixed[optional] $value	The value that needs to be stored.
	 */
	public static function set($name, $value = null)
	{
		// redefine name
		$name = (string) $name;

		// delete item
		if($value === null)
		{
			unset(self::$registry[$name]);
		}

		// add & return its value
		else
		{
			self::$registry[$name] = $value;
			return self::get($name);
		}
	}


	/**
	 * @param string $charset
	 */
	public static function setCharset($charset = true)
	{
		self::$charset = (string) $charset;
	}


	/**
	 * If enabled and an exception occures, an email with the contents of this
	 * exception will be emailed to debug email.
	 *
	 * @param bool $enable
	 */
	public static function setDebug($enable = true)
	{
		self::$debug = (bool) $enable;
	}


	/**
	 * If debug is enabled and an exception occures, an email with the contents of this
	 * exception will be emailed to the given email.
	 *
	 * @param string $email
	 */
	public static function setDebugEmail($email)
	{
		self::$debugEmail = (string) $email;
	}


	/**
	 * If debug is disable and an exception occurres, this message will be
	 * displayed.
	 *
	 * @param string $message
	 */
	public static function setDebugMessage($message)
	{
		self::$debugMessage = (string) $message;
	}


	/**
	 * If an exception occures, you can hook into the process that handles this exception
	 * and add your own logic. The callback may be a function or static method. If you wish
	 * to use a static method define this constant in this way: 'MyClass::myMethod'
	 *
	 * @param string $callback
	 */
	public static function setExceptionCallback($callback)
	{
		self::$exceptionCallback = $callback;
	}
}
