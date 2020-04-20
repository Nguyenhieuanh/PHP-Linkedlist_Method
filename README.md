## [Bài tập] Triển khai các phương thức của LinkedList
#### Mục tiêu
Luyện tập cài đặt cấu trúc LinkedList hoàn chỉnh theo lớp LinkedList trong thư viện java.util.LinkedList.
#### Mô tả
Trong phần này, chúng ta sẽ phát triển một chương trình cho phép cài đặt cấu trúc LinkedList 

Lớp LinkedList bao gồm các thuộc tính:

* $count: xác định số phần tử trong danh sách, mặc định gán là 0.
* $firstNode: liên kết đến node đầu tiến trong danh sách
* $lastNode: liên kết đến node đầu tiến trong danh sách

Các phương thức:

* Phương thức khởi tạo một tham số khởi tạo không tham số.
* Phương thức thêm một phần tử mới vào danh sách: add(ỉnt $index)
* Phương thức thêm một phần tử mới vào đầu danh sách: addFirst()
* Phương thức thêm một phần tử mới vào cuối danh sách: addLast()
* Phương thức xóa 1 phần tử tại vị trí index: remove(int $index)
* Phương thức xóa 1 phần tử cho trước: remove(Object o)
* Phương thức truy cập một phần tử trong danh sách: get(int $index)
* Phương thức size trả về số lượng các phần tử có trong danh sách
* Phương thức printList() in các phần tử trong danh sách
* Phương thức clone thực hiện sao chép danh sách ra 1 danh sách khác
* Phương thức contains kiểm tra phần tử o có trong danh sách không
* Phương thức indexOf trả về vị trí của phần tử o trong danh sách
