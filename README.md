#installation

    git clone https://github.com/zakapaiglaza/test_task_for_number_generation.git

    cd test

    cp .env.example .env

    docker-compose up -d --build

    docker compose exec php composer install

    docker compose exec php php artisan key:generate

    docker compose exec php bash
            ->     php artisan migrate
