<?php

namespace FeedMe;

use FeedMe\Media\Collection;

interface Content {
	public function getMedia(): Collection;
	public function setMedia(Collection $collection): void;

	public function getText(): ?string;
	public function setText(?string $text): void;
}
