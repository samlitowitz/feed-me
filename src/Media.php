<?php

namespace FeedMe;

use Streamable\Stream;

interface Media {
	public function getBinaryData(): Stream;
}
