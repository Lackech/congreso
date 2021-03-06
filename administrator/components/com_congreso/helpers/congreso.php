<?php
/**
 * @package    congresos
 *
 * @author     achacon <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

use Joomla\CMS\Language\Text;

defined('_JEXEC') or die;

/**
 * Congreso helper.
 *
 * @package     A package name
 * @since       1.0
 */
class CongresoHelper
{
	/**
	 * Render submenu.
	 *
	 * @param   string  $vName  The name of the current view.
	 *
	 * @return  void.
	 *
	 * @since   1.0
	 */
	public function addSubmenu($vName)
	{
		JHtmlSidebar::addEntry(Text::_('Enlaces'), 'index.php?option=com_congreso&view=congresos', $vName == 'congresos');

		JHtmlSidebar::addEntry(Text::_('Categoria'), 'index.php?option=com_categories&view=categories&extension=com_congreso', $vName == 'categories');

		JHtmlSidebar::addEntry(Text::_('Autores'), 'index.php?option=com_congreso&view=authors', $vName == 'authors');

		if ($submenu == 'categories')
		{
			$document->setTitle(JText::_('COM_HELLOWORLD_ADMINISTRATION_CATEGORIES'));
		}

		if ($submenu == 'authors')
		{
			$document->setTitle(JText::_('COM_HELLOWORLD_ADMINISTRATION_AUTHORS'));
		}

	}




}
