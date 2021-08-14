<?php

namespace FeedMe;

interface Content {
	public function getMedia(): ?Media;
	public function setMedia(?Media $media): void;

	public function getText(): ?string;
	public function setText(?string $text): void;
}
