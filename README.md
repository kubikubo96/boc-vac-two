<b>Mặc định khi push code lên github<b/>
    <p>Thư mục vendor sẽ không lên trên github vì đây là thư mục chứa source code của các bên thứ 3</p>
<p>Do đó khi clone code từ kho chứa về máy xong</p>
<p>Chúng ta cần chạy câu lệnh "composer install" để cài đặt các thư viện phụ thuộc của bên thứ 3 vào dự án</p>
<p>Nếu dự án clone về chưa có file .env thì bạn phải làm thêm bước sau</p>
<p>Tiếp theo copy 1 file .env từ 1 dự án laravel mới vào folder này ( hoặc rename file ".env.example" thành ".env" )</p>
<p>Tiếp theo chạy câu lệnh "php artisan key:generate" để tạo app key bảo mật mới</p>
<p>Tạo CSDL mới và import file database trong kho chứa vào navicat</p>
<p>sau đó sửa 1 số tham số cấu hình trong file .env như kết nối đến CSDL , URL ...</p>
