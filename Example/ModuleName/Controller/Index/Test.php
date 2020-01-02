<?php


namespace Example\ModuleName\Controller\Index;

class Test extends \Magento\Framework\App\Action\Action
{

	public function execute()
	{
		$textDisplay = new \Magento\Framework\DataObject(array('text' => '###set ON Controller\Test###'));
		$this->_eventManager->dispatch('helloworld_display_text', ['test_text' => $textDisplay]);
		echo 'Test->execute::'.$textDisplay->getText();
		exit;
	}
}