<?php

namespace Example\ModuleName\Plugin;

class ExamplePlugin
{

	public function beforeSetTitle(\Example\ModuleName\Controller\Index\Example $subject, $title)
	{
		$title = $title . " to ";
		echo __METHOD__ . "</br>";

		return [$title];
	}


	public function afterGetTitle(\Example\ModuleName\Controller\Index\Example $subject, $result)
	{

		echo __METHOD__ . "</br>";

		return '<h1>' . $result . '###ExamplePlugin###' . '</h1>';

	}


	public function aroundGetTitle(\Example\ModuleName\Controller\Index\Example $subject, callable $proceed)
	{

		echo __METHOD__ . " - Before proceed() </br>";
		$result = $proceed();
		echo __METHOD__ . " - After proceed() </br>";


		return $result;
	}

}