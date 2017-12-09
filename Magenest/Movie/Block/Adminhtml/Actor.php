<?php
namespace Magenest\Movie\Block\Adminhtml;

class Actor extends \Magento\Backend\Block\Widget\Grid\Container {
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct(){
        $this->_blockGroup = 'Magenest_Movie';
        $this->_controller = 'adminhtml_actor';
        $this->_headerText = __('Manage Actor');
        $this->_addButtonLabel = __('Add Actor');
        parent::_construct();
    }
}