<?php

namespace FeedMe\Media;

interface Reader {
	public function read(): Collection;
}
