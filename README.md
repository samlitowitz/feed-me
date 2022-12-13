# Feed Me
Feed-Me provides a set of interfaces to talk about streams of content.

# Table of Contents
1. [Introduction](#introduction)
2. [Example(s)](#examples)
3.  [References](#references)

# Introduction
Two interfaces drive the description of content.
First we have the [`Content`](src/Content.php) interface which describes discrete content as a collection of media.

```php
interface Content {
	public function getMedia(): FeedMe\Media\Collection;
	public function setMedia(FeedMe\Media\Collection $collection): void;
}
```

Second we have the [`Media`](src/Media.php) interface which describes discrete media as a stream of bytes.

```php
interface Media {
	public function getData(): Streamable\Stream;
}
```

# Examples
1. [Twitter](https://github.com/samlitowitz/feed-me-twitter-php-openapi)

# References

# The model
1. Include `Engagement`

# The Golden Rule
Try three to use it at least three times!
1. Feed-Me RSS
2. Feed-Me Facebook
3. [Feed-Me Twitter](https://github.com/samlitowitz/feed-me-twitter-php-openapi)

