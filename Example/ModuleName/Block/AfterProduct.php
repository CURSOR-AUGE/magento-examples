<?php


namespace Example\ModuleName\Block;

class AfterProduct extends \Magento\Catalog\Block\Product\View\AbstractView
{
    /**
     * @var \Example\ModuleName\Helper\Data
     */
    protected $_dataHelper;

    /**
     * @param \Magento\Catalog\Block\Product\Context $context
     * @param \Magento\Framework\Stdlib\ArrayUtils $arrayUtils
     * @param array $data
     * @param \Example\ModuleName\Helper\Data $dataHelper
     */
    public function __construct(
        \Magento\Catalog\Block\Product\Context $context,
        \Magento\Framework\Stdlib\ArrayUtils $arrayUtils,
        array $data,
        \Example\ModuleName\Helper\Data $dataHelper
    ) {
        parent::__construct($context, $arrayUtils, $data);

        $this->_dataHelper = $dataHelper;
    }
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
        return $this->_dataHelper->getColor();
    }
}