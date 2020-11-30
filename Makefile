SHELL := /usr/bin/env bash
COMPOSER_HOME := $$HOME/.config/composer
COMPOSER_CACHE_DIR := $$HOME/.cache/composer

up:
	export COMPOSER_HOME=$(COMPOSER_HOME) && export COMPOSER_CACHE_DIR=$(COMPOSER_CACHE_DIR) && export UID && docker-compose up -d
	bin/wait_for_docker.bash "Generating autoload files"

down:
	docker-compose down -v

build:
	docker-compose build

bash:
	export UID && docker-compose run  php bash

composer_bash:
	export COMPOSER_HOME=$(COMPOSER_HOME) && export COMPOSER_CACHE_DIR=$(COMPOSER_CACHE_DIR) && export UID && docker-compose run composer bash

tests:
	docker-compose run --rm php bash -c "bin/phpunit --group unit"
.PHONY: tests

thirdparty_tests: _behat_symfony_files
	docker-compose run --rm php bash -c "bin/phpunit --group thirdPartyIntegrations"

integration_tests: _behat_symfony_files
	docker-compose run --rm php bash -c "vendor/bin/behat"

phpcs:
	docker-compose run --rm php bash -c "vendor/bin/phpcs --ignore=vendor --standard=PSR2 -n src"

phpcbf:
	docker-compose run --rm php bash -c "vendor/bin/phpcbf --ignore=vendor --standard=PSR2 -n src"

securitychecker:
	docker-compose run --rm php bash -c "vendor/bin/security-checker security:check composer.lock"

docker_clean:
	docker rm $(docker ps -a -q) || true
	docker rmi < echo $(docker images -q | tr "\n" " ")


