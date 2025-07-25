#installation

    git clone https://github.com/zakapaiglaza/test_task_for_number_generation.git

    cd test

    cp .env.example .env

    php artisan key:generate

    composer install

    docker-compose up -d --build

    docker compose exec php bash
            ->     php artisan migrate