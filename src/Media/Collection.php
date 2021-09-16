<?php

namespace FeedMe\Media;

use Countable;
use FeedMe\Media;
use Iterator;

final class Collection implements Countable, Iterator
{
	/** @var Media[] $__array */
	private array $__array = [];
	/** @var int $__iter */
	private int $__iter = 0;

	public function isEmpty(): bool
	{
		return empty($this->__array);
	}

	public function pop(): ?Media
	{
		if ($this->isEmpty()) {
			return null;
		}
		$i = count($this->__array) - 1;
		$media = $this->__array[$i];
		unset($this->__array[$i]);
		$this->rewind();
		return $media;
	}

	public function push(Media $media): void
	{
		$this->__array[] = $media;
	}

	public function toArray(): array
	{
		return $this->__array;
	}

	// -- Countable -- //
	public function count(): int
	{
		return count($this->__array);
	}

	// -- Iterator -- //
	public function current()
	{
		if (!$this->valid()) {
			return null;
		}
		return $this->__array[$this->__iter];
	}

	public function key()
	{
		if (!$this->valid()) {
			return null;
		}
		return $this->__iter;
	}

	public function next(): void
	{
		if ($this->__iter + 1 >= $this->count()) {
			return;
		}
		$this->__iter += 1;
	}

	public function rewind(): void
	{
		$this->__iter = 0;
	}

	public function valid(): bool
	{
		if ($this->count() < 1) {
			return false;
		}
		return $this->__iter < $this->count();
	}
}
