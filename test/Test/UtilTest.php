<?php
class MoneyTest extends PHPUnit_Framework_TestCase {

	public function testParametersEmpty() {
		$this->setExpectedException('InvalidArgumentException', 'No parameters sent.');
		\Tiago\Test\Util::sum();
	}

	public function testParametersJustOne() {
		$this->setExpectedException('InvalidArgumentException', 'Minimum of two parameters is required.');
		\Tiago\Test\Util::sum(1);
	}

	public function testParametersNonNumeric() {
		$this->setExpectedException('InvalidArgumentException', 'Non numeric parameters sent.');
		\Tiago\Test\Util::sum(1, 2, 3, "text");
	}

	public function testSumByParameters() {
		$this->assertEquals(\Tiago\Test\Util::sum(1, 2, 4, 8), 15);
		$this->assertEquals(\Tiago\Test\Util::sum(1, 1), 2);
	}

	public function testSumByArray() {
		$this->assertEquals(\Tiago\Test\Util::sum([1, 2, 4, 8]), 15);
		$this->assertEquals(\Tiago\Test\Util::sum([1, 1]), 2);
	}
}