<?php

/**
 * Class for defining the formatting used by the BB code parser.
 *
 * @see XenForo_BbCode_Formatter_Base
 * @author Shadab Ansari
 * @package GeekPoint_RichCodeBbCode
 */
class GeekPoint_RichCodeBbCode_BbCode_Formatter_Base extends XFCP_GeekPoint_RichCodeBbCode_BbCode_Formatter_Base
{
	/**
	 * Modifies the parsing options for a code tag.
	 * The default behavior (without any tag options) is to allow bbcodes.
	 *
	 * @see XenForo_BbCode_Formatter_Base::parseValidateTagCode()
	 *
	 * @param array $tagInfo Info about the tag we're parsing.
	 * @param string|null $tagOption Any option passed into the tag
	 *
	 * @return array|boolean True if tag is ok as is, array to change states, false to reject tag
	 */
	public function parseValidateTagCode(array $tagInfo, $tagOption)
	{
		if (empty($tagOption))
		{
			return true;
		}

		return parent::parseValidateTagCode($tagInfo, $tagOption);
	}
}