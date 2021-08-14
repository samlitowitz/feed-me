<?php

namespace FeedMe\Media;

use PHPUnit\Framework\TestCase;

final class TypeTest extends TestCase {
	public function testInstantiateWithValidTypeSucceeds()
	{
		$typ = Type::instantiate(Type::IMAGE);
		$this->assertEquals(Type::IMAGE, $typ->getType());
	}
}
