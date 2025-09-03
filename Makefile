EXEC=docker compose exec
PHP=$(EXEC) web php
CONSOLE=$(PHP) bin/console

up:
	docker compose up -d

down:
	docker compose down

build:
	docker compose up -d --build

logs:
	docker compose logs -f

ps:
	docker compose ps

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

db: ## Entrer dans le conteneur postgres
	$(EXEC) db psql -U enaxl -d ma_base

