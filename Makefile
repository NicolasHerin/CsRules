DOCKER_COMPOSE  = docker-compose
EXEC            = $(DOCKER_COMPOSE) exec php
COMPOSER        = $(EXEC) composer

build: ## Build les containers Docker
	$(DOCKER_COMPOSE) build

up: ## Monte les containers Docker
	$(DOCKER_COMPOSE) up -d --remove-orphans
	$(COMPOSER) install -n

down: ## Démonte les containers Docker
	$(DOCKER_COMPOSE) down

bash:
	$(EXEC) bash

.PHONY: build up down bash
