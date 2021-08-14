<?php

namespace FeedMe\Media;

use FeedMe\InvalidArgumentException;

final class Type {
	public const IMAGE = 1;
	public const VIDEO = 2;

	private static $valid = [
		self::IMAGE,
		self::VIDEO,
	];

	private int $__type;

	public static function instantiate(int $type): self
	{
		$typ = new self();
		$typ->setType($type);
		return $typ;
	}

	public static function isValid(int $type): bool
	{
		return in_array($type, self::$valid);
	}

	public function getType(): ?int
	{
		return $this->__type;
	}

	public function setType(int $type): void
	{
		if (!self::isValid($type)) {
			throw new InvalidArgumentException();
		}
		$this->__type = $type;
	}
}
