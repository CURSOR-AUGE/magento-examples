<?php


namespace Example\Overwrite\Rewrite\Example\ModuleName\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{


    /**
     * Execute view action
     *
     */
    public function execute()
    {
        echo 'hallo->Overwrite';
        exit(0);
    }
}
