install:
	./install.sh

up:
	docker-compose up -d

down:
	docker-compose down

migrate:
	docker-compose exec app php artisan migrate

coverage:
	docker exec -it php-fpm ./vendor/bin/pest --coverage
