<?php


namespace Example\ModuleName\Block\Sectionindex;

class Actionindex extends \Magento\Framework\View\Element\Template
{

    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param array $data
     */
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * Get getIndexUrl
     */
    public function getIndexUrl() {
        return $this->getUrl('frontname/sectionindex/actionindex');
    }
}
