<?php


namespace Example\ModuleName\Block;

class AfterProduct extends \Magento\Catalog\Block\Product\View\AbstractView
{
    /**
     * @var \Example\ModuleName\Helper\Data
     */
    protected $_dataHelper;

    /**
     * Get the name of the current product
     * @return string
     */
    public function getProductName() {
        return $this->getProduct()->getName();
    }

    /**
     * Return the color for the Product text.
     * @return string
     */
    public function getColor() {
        return 'xxx';
        return $this->_dataHelper->getColor();
    }
}