<?php

/**
 * Class containing static methods to install/upgrade/uninstall the addon;
 * and hook into code events to extend the default XenForo functionality.
 *
 * @author Shadab Ansari
 * @package GeekPoint_RichCodeBbCode
 */
class GeekPoint_RichCodeBbCode_Addon
{
	/**
	 * Hook into the "load_class_bb_code" code-event
	 * to dynamically extend a BbCode Formatter.
	 *
	 * @param string $class
	 * @param array $extend
	 */
	public static function loadClassBbCode($class, array &$extend)
	{
		if ($class === 'XenForo_BbCode_Formatter_Base')
		{
			$extend[] = 'GeekPoint_RichCodeBbCode_BbCode_Formatter_Base';
		}
	}
}