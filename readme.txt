tạo dtb đặt tên
chỉnh lại tên trong file env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel --- chỉnh này
DB_USERNAME=root
DB_PASSWORD=
//
muốn đổi csdl chỉnh trong các file 
BookController
migrations
seeder
model
views
route
chỉnh xong chạy 
php artisan migrate:refresh --seed
để refresh dữ liệu