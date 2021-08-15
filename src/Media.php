<?php

namespace FeedMe;

interface Media {
	public function getBinaryData(): string;
	public function getURI(): string;
}
