<?php

namespace Example\ModuleName\Observer;

class ChangeDisplayText implements \Magento\Framework\Event\ObserverInterface
{
	public function execute(\Magento\Framework\Event\Observer $observer)
	{
		$displayText = $observer->getData('test_text');
		echo "ChangeDisplayText->execute::" . $displayText->getText() . " ###set ON Observer\ChangeDisplayText### </br>";
		$displayText->setText('DATA from ChangeDisplayText');

		return $this;
	}
}