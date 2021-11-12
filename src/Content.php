<?php

namespace FeedMe;

use FeedMe\Media\Collection;

interface Content {
	public function getMedia(): Collection;
	public function setMedia(Collection $collection): void;
}
