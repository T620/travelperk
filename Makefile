install:
	./install.sh

up:
	docker-compose up -d

down:
	docker-compose down

migrate:
	docker-compose exec app php artisan migrate

test:
	docker-compose exec app ./vendor/bin/pest

coverage:
	docker-compose exec app ./vendor/bin/pest --coverage
