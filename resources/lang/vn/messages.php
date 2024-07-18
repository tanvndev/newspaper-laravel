<?php
return [
    'dashboard' => [
        'index' => [
            'title' => 'Bảng điều khiển',
        ],
    ],
    'system' => [
        'index' => [
            'title' => 'Cài đặt cấu hình hệ thống',
            'table' => 'Thông tin nhóm hình ảnh',
            'create' => 'Tạo mới nhóm hình ảnh'
        ],
        'create' => [
            'title' => 'Tạo mới nhóm hình ảnh',
            'success' => 'Tạo mới nhóm hình ảnh thành công.',
            'error' => 'Tạo mới nhóm hình ảnh thất bại.',
        ],
        'update' => [
            'title' => 'Cập nhập cấu hình hệ thống',
            'success' => 'Cập nhập cấu hình hệ thống thành công.',
            'error' => 'Cập nhập cấu hình hệ thống thất bại.',
        ],
        'delete' => [
            'title' => 'Cập nhập nhóm hình ảnh',
            'success' => 'Xoá nhóm hình ảnh thành công.',
            'error' => 'Xoá nhóm hình ảnh thất bại.',
        ],

    ],
    'postCatalogue' => [
        'index' => [
            'title' => 'Danh sách nhóm bài viết',
            'table' => 'Thông tin nhóm bài viết',
            'create' => 'Tạo mới nhóm bài viết'
        ],
        'create' => [
            'title' => 'Tạo mới nhóm bài viết',
            'success' => 'Tạo mới nhóm bài viết thành công.',
            'error' => 'Tạo mới nhóm bài viết thất bại.',
        ],
        'update' => [
            'title' => 'Cập nhập nhóm bài viết',
            'success' => 'Cập nhập nhóm bài viết thành công.',
            'error' => 'Cập nhập nhóm bài viết thất bại.',
        ],
        'delete' => [
            'title' => 'Cập nhập nhóm bài viết',
            'success' => 'Xoá nhóm bài viết thành công.',
            'error' => 'Xoá nhóm bài viết thất bại.',
        ],
        'table' => [
            'name' => 'Tên nhóm',
        ]
    ],
    'post' => [
        'index' => [
            'title' => 'Danh sách bài viết',
            'table' => 'Thông tin bài viết',
            'create' => 'Tạo mới bài viết'
        ],
        'create' => [
            'title' => 'Tạo mới bài viết',
            'success' => 'Tạo mới bài viết thành công.',
            'error' => 'Tạo mới bài viết thất bại.',
        ],
        'update' => [
            'title' => 'Cập nhập bài viết',
            'success' => 'Cập nhập bài viết thành công.',
            'error' => 'Cập nhập bài viết thất bại.',
        ],
        'delete' => [
            'success' => 'Xoá bài viết thành công.',
            'error' => 'Xoá bài viết thất bại.',
        ],
        'table' => [
            'name' => 'Tiêu đề bài viết',
            'postCatalogue' => 'Chọn nhóm bài viết',
        ]
    ],
    'userCatalogue' => [
        'index' => [
            'title' => 'Danh sách nhóm thành viên',
            'table' => 'Thông tin nhóm thành viên',
            'create' => 'Tạo mới nhóm thành viên'
        ],
        'create' => [
            'title' => 'Tạo mới nhóm thành viên',
            'success' => 'Tạo mới nhóm thành viên thành công.',
            'error' => 'Tạo mới nhóm thành viên thất bại.',
        ],
        'update' => [
            'title' => 'Cập nhập nhóm thành viên',
            'success' => 'Cập nhập nhóm thành viên thành công.',
            'error' => 'Cập nhập nhóm thành viên thất bại.',
        ],
        'delete' => [
            'success' => 'Xoá nhóm thành viên thành công.',
            'error' => 'Xoá nhóm thành viên thất bại.',
        ],
        'table' => [
            'name' => 'Tên nhóm thành viên',
            'countUser' => 'Số thành viên'
        ],
        'permission' => [
            'title' => 'Cập nhập quyền',
            'success' => 'Cập nhập quyền thành công.',
            'error' => 'Cập nhập quyền thất bại.',
        ]
    ],
    'user' => [
        'index' => [
            'title' => 'Danh sách thành viên',
            'table' => 'Thông tin thành viên',
            'create' => 'Tạo mới thành viên'
        ],
        'create' => [
            'title' => 'Tạo mới thành viên',
            'success' => 'Tạo mới thành viên thành công.',
            'error' => 'Tạo mới thành viên thất bại.',
        ],
        'update' => [
            'title' => 'Cập nhập thành viên',
            'success' => 'Cập nhập thành viên thành công.',
            'error' => 'Cập nhập thành viên thất bại.',
        ],
        'delete' => [
            'success' => 'Xoá thành viên thành công.',
            'error' => 'Xoá thành viên thất bại.',
        ],
        'table' => [
            'name' => 'Tên thành viên',
            'userGroup' => 'Nhóm thành viên',
            'userGroupSelect' => 'Chọn nhóm thành viên',
        ]
    ],
    'permission' => [
        'index' => [
            'title' => 'Danh sách quyền',
            'table' => 'Thông tin quyền',
            'create' => 'Tạo mới quyền',
            'success' => 'Thay đổi quyền thành công.',
            'error' => 'Thay đổi quyền thất bại.'
        ],
        'create' => [
            'title' => 'Tạo mới quyền',
            'success' => 'Tạo mới quyền thành công.',
            'error' => 'Tạo mới quyền thất bại.',
        ],
        'update' => [
            'title' => 'Cập nhập quyền',
            'success' => 'Cập nhập quyền thành công.',
            'error' => 'Cập nhập quyền thất bại.',
        ],
        'delete' => [
            'success' => 'Xoá quyền thành công.',
            'error' => 'Xoá quyền thất bại.',
        ],
        'table' => [
            'name' => 'Tên quyền',
        ]
    ],
    'language' => [
        'index' => [
            'title' => 'Danh sách ngôn ngữ',
            'table' => 'Thông tin ngôn ngữ',
            'create' => 'Tạo mới ngôn ngữ',
            'success' => 'Thay đổi ngôn ngữ thành công.',
            'error' => 'Thay đổi ngôn ngữ thất bại.'
        ],
        'create' => [
            'title' => 'Tạo mới ngôn ngữ',
            'success' => 'Tạo mới ngôn ngữ thành công.',
            'error' => 'Tạo mới ngôn ngữ thất bại.',
        ],
        'update' => [
            'title' => 'Cập nhập ngôn ngữ',
            'success' => 'Cập nhập ngôn ngữ thành công.',
            'error' => 'Cập nhập ngôn ngữ thất bại.',
        ],
        'delete' => [
            'success' => 'Xoá ngôn ngữ thành công.',
            'error' => 'Xoá ngôn ngữ thất bại.',
        ],
        'table' => [
            'name' => 'Tên ngôn ngữ',
        ],
        'switch' => [
            'success' => 'Thay đổi ngôn ngữ thành công.',
            'error' => 'Thay đổi ngôn ngữ thất bại.',
        ],
        'translate' => [
            'success' => 'Cập nhập bản dịch thành công.',
            'error' => 'Cập nhập bản dịch thất bại.',
        ]
    ],
    'comment' => [
        'index' => [
            'title' => 'Danh sách đánh giá',
            'table' => 'Thông tin đánh giá',
            'create' => 'Tạo mới đánh giá'
        ],
        'table' => [
            'fullname' => 'Người đánh giá',
            'created_at' => 'Ngày đánh giá',
            'star' => 'Số sao'
        ]
    ],
    'auth' => [
        'login' => [
            'title' => 'Đăng nhập',
        ],
        'signup' => [
            'title' => 'Đăng ký tài khoản',
        ],
        'forgotPassword' => [
            'title' => 'Quên mật khẩu',
        ],
        'resetPassword' => [
            'title' => 'Dặt lại mật khẩu',
        ],

    ],
    'code' => "Mã",
    'rating' => "Đánh giá",
    'updateBtn' => "Cập nhập",
    'customerInfo' => "Khách hàng",
    'payment' => "Thanh toán",
    'paymentMethod' => "Hình thức",
    'shipping' => "Phí ship",
    'delivery' => "Giao hàng",
    'endTotal' => "Tổng cuối",
    'discount' => "Giảm giá",
    'expired' => "Hết hạn",
    'selectModule' => 'Chọn module',
    'infomation' => 'Thông tin',
    'infoDetail' => 'Thông tin chi tiết',
    'timeApplication' => 'Thời gian áp dụng chương trình',
    'applicableCustomer' => 'Nguồn khách áp dụng',
    'applicableObject' => 'Đối tượng áp dụng',
    'noStoppingDay' => 'Không ngày kết thúc',
    'startDate' => 'Thời gian bắt đầu',
    'endDate' => 'Thời gian kết thúc',
    'contentConfiguration' => 'Cấu hình nội dung',
    'errorChildDelete' => 'Không thể xoá do vẫn còn danh mục con.',
    'parentId' => 'Danh mục cha',
    'catalogueSub' => 'Danh mục phụ',
    'permissionName' => 'Phân quyền',
    'parentIdNotice' => 'Chọn [Root] nếu không có danh mục cha',
    'image' => 'Chọn ảnh đại diện',
    'advance' => 'Cấu hình nâng cao',
    'basic' => 'Cấu hình cơ bản',
    'width' => 'Chiều rộng',
    'effect' => 'Hiệu ứng',
    'runAuto' => 'Tự động chạy',
    'openNewTab' => 'Mở trong tab mới',
    'notSlideYet' => 'Chưa có hình ảnh được chọn...',
    'stopOnHover' => 'Dừng khi di chuột',
    'changeScene' => 'Chuyển cảnh',
    'effectSpeed' => 'Tốc độ hiệu ứng',
    'arrow' => 'Mũi tên',
    'height' => 'Chiều cao',
    'status' => 'Trạng thái',
    'slideList' => 'Danh sách slides',
    'on' => 'Bật',
    'off' => 'Tắt',
    'publish' => 'Tình trạng',
    'follow' => 'Điều hướng',
    'noteNotice' => ['Lưu ý:', 'là các trường bắt buộc'],
    'generalInfomation' => 'Thông tin chung',
    'perpage' => 'bản ghi',
    'keywordPlaceholder' => 'Tìm kiếm',
    'name' => 'Tiêu đề',
    'description' => 'Mô tả',
    'content' => 'Nội dung',
    'uploadMultipleImage' => 'Tải lên nhiều ảnh',
    'seo' => [
        'info' => 'Cấu hình SEO',
        'title' => 'Tiêu đề SEO',
        'keyword' => 'Từ khoá SEO',
        'description' => 'Mô tả SEO',
        'canonical' => 'Đường dẫn',
    ],
    'slideName' => 'Tên Slide',
    'searchHere' => 'Tìm kiếm ở đây...',
    'addSlide' => 'Thêm slide',
    'keyword' => 'Từ khoá',
    'seoExample' => ['duong-dan-cua-ban', 'Bạn chưa nhập tiêu đề', 'Bạn
    chưa nhập mô tả'],
    'album' => 'Chọn ảnh album',
    'email' => 'Email',
    'phone' => 'Số điện thoại',
    'fullname' => 'Họ và tên',
    'birthday' => 'Ngày sinh',
    'created' => 'Ngày tạo',
    'password' => 'Mật khẩu',
    'rePassword' => 'Nhập lại mật khẩu',
    'cities' => 'Tỉnh/Thành phố',
    'districts' => 'Quận/Huyện',
    'wards' => 'Phường/Xã',
    'address' => 'Địa chỉ',
    'notes' => 'Ghi chú',
    'canonical' => 'Canonical',
    'contactInfo' => 'Thông tin liên hệ',
    'albumNotice' => 'Sử dụng nút chọn ảnh hoặc chọn vào đây để thêm hình ảnh.',
    'tableStatus' => 'Tình trạng',
    'tableAction' => 'Thực thi',
    'tableOrder' => 'Vị trí',
    'tableDescription' => 'Mô tả',
    'tablePhone' => 'Số điện thoại',
    'tableEmail' => 'Email',
    'tableAddress' => 'Địa chị',
    'tableCanonical' => 'Canonical',
    'person' => 'người',
    'creator' => 'người tạo',
    'publishAll' => 'Xuất bản toàn bộ',
    'unpublishAll' => 'Huỷ xuất bản toàn bộ',
    'tableDisplayGroup' => 'Nhóm hiển thị',
    'deleteModalTitle' => 'Bạn có chắc không! Muốn xóa bản ghi này?',
    'deleteModalDescription' => 'Bạn có thực sự muốn xóa những bản ghi này? Bạn không thể khôi phục bản ghi trong danh sách của mình nữa nếu bạn xóa!',
    'cancelButton' => 'Huỷ bỏ',
    'agreeButton' => 'Đồng ý',
    'saveButton' => 'Lưu lại',


];
