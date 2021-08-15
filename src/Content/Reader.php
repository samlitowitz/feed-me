<?php

namespace FeedMe\Content;

interface Reader {
	public function read(): Collection;
}
