<?php


namespace Example\ModuleName\Controller\Sectionindex;

class Actionindex extends \Magento\Framework\App\Action\Action
{

    protected $resultPageFactory;
    protected $customerSession;
    /**
     * Constructor
     *
     * @param \Magento\Framework\App\Action\Context  $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Magento\Customer\Model\Customer $customers,
        \Magento\Customer\Model\Session $customerSession
    ) {
        $this->customerSession = $customerSession;
        $this->resultPageFactory = $resultPageFactory;
        parent::__construct($context);
    }
    public function getCustomerCollection($customers) {
        return $customers->getCollection()
            ->addAttributeToSelect("*")
            ->load();
    }
    /**
     * Execute view action
     *
     * @return \Magento\Framework\Controller\ResultInterface
     */
    public function execute()
    {
        return $this->resultPageFactory->create();
    }

    public function getCustomerDeliveryPostcode() {
        $customer = $this->customerSession->getCustomer();
        if ($customer) {
            $shippingAddress = $customer->getDefaultShippingAddress();
            if ($shippingAddress) {
                return $shippingAddress->getPostcode();
            }
        }
        return null;
    }
}
