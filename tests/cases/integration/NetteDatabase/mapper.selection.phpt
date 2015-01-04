<?php

/**
 * @testCase
 * @dataProvider ../../../sections.ini
 */

namespace NextrasTests\Orm\Integration\NetteDatabase;

use Mockery;
use NextrasTests\Orm\DataTestCase;
use Tester\Assert;

$dic = require_once __DIR__ . '/../../../bootstrap.php';


class MapperSelectionTest extends DataTestCase
{

	public function testCloningPersisted()
	{
		$books = $this->orm->books->findBooksWithEvenId()->fetchPairs(NULL, 'id');
		Assert::same([2, 4], $books);
	}

}


$test = new MapperSelectionTest($dic);
$test->run();
