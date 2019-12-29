<?php
namespace Example\ModuleName\Helper;


class Data extends \Magento\Framework\App\Helper\AbstractHelper {

	/**
	 * Returns rand CSS colors
	 * @return string
	 */
	public function getColor() {
		return 'rgb('.rand(0,255).','.rand(0,255).','.rand(0,255).')';
	}
}