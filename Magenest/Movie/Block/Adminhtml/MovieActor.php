<?php
namespace Magenest\Movie\Block\Adminhtml;

class MovieActor extends \Magento\Backend\Block\Widget\Grid\Container{
    /**
     * Constructor
     *
     * @return void
     */
    protected function _construct(){
        $this->_blockGroup = 'Magenest_Movie';
        $this->_controller = 'adminhtml_movieactor';
        $this->_headerText = __('Manage Movie Actor');
        $this->_addButtonLabel = __('Add Movie Actor');
        parent::_construct();
    }
}