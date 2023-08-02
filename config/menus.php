<?php
$ROLE_SUPER_ADMIN = 'super admin';
$ROLE_HAS_ADMINS = 'staff|super admin';
return [
    [
        "icon" => '<i class="las fs-2x text-primary la-archive"></i>',
        "name" => "Danh mục",
        "role" => $ROLE_HAS_ADMINS,
        "link" => "admin.category.show",
        "param" => ""
    ],
    [
        "icon" => '<i class="las fs-2x text-primary la-tshirt"></i>',
        "name" => "Sản phẩm",
        "role" => $ROLE_HAS_ADMINS,
        "link" => "admin.product.show",
        "param" => ""
    ],
    [
        "icon" => '<i class="las fs-2x text-primary la-ticket-alt"></i>',
        "name" => "Mã giảm giá",
        "role" => $ROLE_HAS_ADMINS,
        "link" => "admin.coupon.show",
        "param" => ""
    ],
    [
        "icon" => '<i class="las fs-2x text-primary la-barcode"></i>
        ',
        "name" => "Attribute",
        "role" => $ROLE_HAS_ADMINS,
        "subs-menu" => [
            [
                "name" => "Size",
                "param" => '?type=size&view=list',
                "link" => "admin.attribute.show",
                "role" => $ROLE_HAS_ADMINS
            ],
            [
                "name" => "Color",
                "param" => '?type=color&view=list',
                "link" => "admin.attribute.show",
                "role" => $ROLE_HAS_ADMINS
            ],
            [
                "name" => "Banner",
                "param" => '?type=banner&view=list',
                "link" => "admin.attribute.show",
                "role" => $ROLE_HAS_ADMINS
            ],
        ]
    ],
    [
        "icon" => '<i class="las fs-2x text-primary la-shopping-cart"></i>',
        "name" => "Đơn hàng",
        "role" => $ROLE_HAS_ADMINS,
        "subs-menu" => [
            [
                "name" => "Chờ giao hàng",
                "param" => '?type=1',
                "link" => "admin.order.show",
                "role" => $ROLE_HAS_ADMINS
            ],
            [
                "name" => "Đang giao hàng",
                "param" => '?type=2',
                "link" => "admin.order.show",
                "role" => $ROLE_HAS_ADMINS
            ],
            [
                "name" => "Đã giao hàng",
                "param" => '?type=3',
                "link" => "admin.order.show",
                "role" => $ROLE_HAS_ADMINS
            ],
        ]
    ],
    [
        "icon" => '<i class="las fs-2x text-primary la-users"></i>',
        "name" => "Người dùng",
        "role" => $ROLE_HAS_ADMINS,
        "subs-menu" => [
            [
                "name" => "Thông tin tài khoản",
                "param" => '',
                "link" => "admin.user.edit",
                "role" => $ROLE_HAS_ADMINS
            ],
            [
                "name" => "Danh sách người dùng",
                "param" => '',
                "link" => "admin.user.show",
                "role" => $ROLE_SUPER_ADMIN
            ],
        ]
    ],
];
