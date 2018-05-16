<?php
/**
 * @package     Joomla.Administrator
 * @subpackage  com_congreso

 */

// No direct access to this file
defined('_JEXEC') or die('Restricted access');

/**
 * Congreso View
 *

 */
class CongresoViewCongresos extends JViewLegacy
{
	/**
	 * View form
	 *
	 * @var   form
	 */
	protected $form = null;

	/**
	 * Display the congreso view
	 *
	 * @param   string  $tpl  The name of the template file to parse; automatically searches through the template paths.
	 *
	 * @return  void
	 */
	public function display($tpl = null)
	{
		// Get the Data
		$this->form = $this->get('Form');
		$this->item = $this->get('Item');




		// Set the toolbar
		$this->addToolBar();

		// Display the template
		parent::display($tpl);
	}

	/**
	 * Add the page title and toolbar.
	 *
	 * @return  void
	 *
	 * @since   1.6
	 */
	protected function addToolBar()
	{
		$input = JFactory::getApplication()->input;

		// Hide Joomla Administrator Main menu
		$input->set('hidemainmenu', true);

		$isNew = ($this->item->id == 0);

		if ($isNew)
		{
			$title = JText::_('Crear nuevo archivo');
		}
		else
		{
			$title = JText::_('Editar archivo');
		}

		JToolBarHelper::title($title, 'congreso');
		JToolBarHelper::save('congreso.save');
		JToolBarHelper::cancel('congreso.cancel',$isNew ? 'JTOOLBAR_CANCEL' : 'JTOOLBAR_CLOSE'
		);
	}
}