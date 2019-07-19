mysqladmin -h localhost -u root -p drop AmigoSecreto
mysqladmin -h localhost -u root -p create AmigoSecreto
php artisan migrate
