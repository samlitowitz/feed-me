<?php

namespace FeedMe;

use FeedMe\Media\Type;

interface Media {
	// TODO: Improve name `getBinaryData`
	public function getBinaryData(): string;
	public function getURI(): string;
	public function getType(): Type;
}
