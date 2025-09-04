COMPOSE := docker compose -f docker/docker-compose.yml
EXEC    := $(COMPOSE) exec
PHP     := $(EXEC) web php
CONSOLE := $(PHP) /var/www/html/bin/console

up:
	$(COMPOSE) up -d

down:
	$(COMPOSE) down

logs:
	$(COMPOSE) logs -f web

build:
	$(COMPOSE) up -d --build --remove-orphans

ps:
	$(COMPOSE) ps

cc: ## Clear cache
	$(CONSOLE) cache:clear

migrate: ## Lancer les migrations
	$(CONSOLE) doctrine:migrations:migrate -n

fixtures: ## Charger les fixtures
	$(CONSOLE) doctrine:fixtures:load -n

reset-db: ## Reset complet de la base
	$(CONSOLE) doctrine:database:drop --force --if-exists
	$(CONSOLE) doctrine:database:create
	$(CONSOLE) doctrine:migrations:migrate -n
	$(CONSOLE) doctrine:fixtures:load -n

bash: ## Entrer dans le conteneur web
	$(EXEC) web bash

db: ## Entrer dans Postgres
	$(EXEC) db psql -U enaxl -d ma_base
