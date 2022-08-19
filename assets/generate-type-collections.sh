#!/usr/bin/env bash

DOCKER_USER=${DOCKER_USER-$(id -u):$(id -g)}
SCRIPT_DIR=$( cd -- "$( dirname -- "${BASH_SOURCE[0]}" )" &> /dev/null && pwd )

cd $SCRIPT_DIR/../

docker-compose run php /app/vendor/bin/php-collection-generator --config /app/assets/content-collection.json generate /app/src/Content
docker-compose run php /app/vendor/bin/php-collection-generator --config /app/assets/media-collection.json generate /app/src/Media
