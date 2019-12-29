<?php
namespace Example\ModuleName\Helper;


class Data extends \Magento\Framework\App\Helper\AbstractHelper {

	/**
	 * Returns rand CSS color
	 * @return string
	 */
	public function getColor() {
		return 'rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).')';
	}
}