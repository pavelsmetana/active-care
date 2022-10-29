#!make
.PHONY: $(MAKECMDGOALS)

.DEFAULT_GOAL := help
SHELL := /bin/bash
PWD := $(shell pwd)
CURRENT_UID := $(shell id -u)
CURRENT_GID := $(shell id -g)

build: ## Build containers
	cd ./docker && docker compose build

up: ## Up containers
	cd ./docker && docker compose up -d

down: ## Down containers in current project
	cd ./docker && docker compose down

# docker apache bash
bash: ## docker apache bash
	docker exec -it blank-php-fpm bash

# Composer install
install: ## Composer install
	docker exec -it blank-php-fpm composer install

init: ## Initialize all local configs if not initialized
	@if [[ ! -f "./docker/.env" ]]; then \
		cat ./docker/.env.dist > ./docker/.env; \
		echo DOCKER_USER_UID=${CURRENT_UID} >> ./docker/.env; \
		echo DOCKER_GROUP_UID=${CURRENT_GID} >> ./docker/.env; \
		echo DOCKER_USER=${CURRENT_UID}:${CURRENT_GID} >> ./docker/.env; \
	fi; \
	if [[ ! -f "./docker/docker-compose.yaml" ]]; then \
		cat ./docker/docker-compose.example.yaml > ./docker/docker-compose.yaml; \
	fi; \
	for file in `find "./docker/nginx" -name "*.dist" -type f`; do \
		confFile=$${file/.dist/}; \
		if [ ! -f $${confFile} ]; then \
        	cat $${file} > $${confFile}; \
        fi \
    done;

init-force: ## Initialize all local configs
	@cat ./docker/.env.dist > ./docker/.env; \
	echo DOCKER_USER_UID=${CURRENT_UID} >> ./docker/.env; \
	echo DOCKER_GROUP_UID=${CURRENT_GID} >> ./docker/.env; \
	echo DOCKER_USER=${CURRENT_UID}:${CURRENT_GID} >> ./docker/.env; \
	cat ./docker/docker-compose.example.yaml > ./docker/docker-compose.yaml; \
	for file in `find ./docker/nginx -name "*.dist" -type f`; do \
		confFile=$${file/.dist/}; \
		cat $${file} > $${confFile}; \
    done;


help: ## Show current help message
	@grep -E '^[a-zA-Z_-]+:.*?## .*$$' ./Makefile | sort | \
	awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}'