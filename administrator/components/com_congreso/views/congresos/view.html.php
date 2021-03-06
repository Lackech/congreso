<?php
/**
 * @package    congresos
 *
 * @author     achacon <your@email.com>
 * @copyright  A copyright
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       http://your.url.com
 */

use Joomla\CMS\Factory;
use Joomla\CMS\Language\Text;
use Joomla\CMS\MVC\View\HtmlView;

defined('_JEXEC') or die;

/**
 * Congreso view.
 *
 * @package  congresos
 * @since    1.0
 */
class CongresoViewCongresos extends HtmlView
{
	/**
	 * Congreso helper
	 *
	 * @var    CongresoHelper
	 * @since  1.0
	 */
	protected $helper;

	/**
	 * The sidebar to show
	 *
	 * @var    string
	 * @since  1.0
	 */
	protected $sidebar = '';
	protected $submenu = '';
	/**
	 * Execute and display a template script.
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  mixed  A string if successful, otherwise a JError object.
	 *
	 * @see     fetch()
	 * @since   1.0
	 */
	public function display($tpl = null)
	{

		// Get data from the model
		$this->items		= $this->get('Items');
		$this->pagination	= $this->get('Pagination');

		// Show the toolbar
		$this->toolbar();

		// Show the sidebar
		$this->helper = new CongresoHelper;
		$this->helper->addSubmenu('congresos');

		$this->sidebar = JHtmlSidebar::render();

		// Display it all
		return parent::display($tpl);
	}

	/**
	 * Displays a toolbar for a specific page.
	 *
	 * @return  void.
	 *
	 * @since   1.0
	 */
	private function toolbar()
	{
		JToolBarHelper::title(Text::_('COM_CONGRESO'), '');

		JToolbarHelper::addNew('congreso.add');
		JToolbarHelper::editList('congreso.edit');
		JToolbarHelper::deleteList('', 'congresos.delete');


		// Options button.
		if (Factory::getUser()->authorise('core.admin', 'com_congreso'))
		{
			JToolBarHelper::preferences('com_congreso');
		}
	}
}
