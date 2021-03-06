<?php

return [
    'attributes' => [
        'label' => 'Label',
        'type' => 'Type',
        'required' => 'Required',
        'use_as_filter' => 'Use as filter',
        'order' => 'Order',
        'options' => 'Options'
    ],
    'brand' => [
        'logo' => 'Logo',
        'name' => 'Name',
        'slug' => 'Slug',
        'products_count' => '# Products',
        'is_featured' => 'Featured',
        'clear' => 'Clear thumbnail image',
        'thumbnail' => 'Thumbnail'
    ],
    'category' => [
        'name' => 'Tên danh mục',
        'slug' => 'Slug',
        'parent_id' => 'Danh mục cha',
        'products_count' => '# Số lượng sản phẩm',
        'parent_cat' => 'Danh mục',
        'is_featured' => 'Đặc sắc',
        'description' => 'Mô tả',
        'clear' => 'Xóa ảnh đại diện',
        'thumbnail' => 'Ảnh đại diện',
        'external_id' => 'Mã sản phẩm',

    ],
    'coupon' => [
        'code' => 'Coupon Code',
        'value' => 'Value',
        'type' => 'Type',
        'type_option' => [
            'fixed' => 'Fixed',
            'percentage' => 'Percentage'
        ],
        'status_options' => [
            'active' => 'Active',
            'pending' => 'Pending',
            'expired' => 'Expired',
        ],
        'start' => 'Starts at',
        'expiry' => 'Ends at',
        'min_cart_total' => 'Minimum Cart Total',
        'uses' => 'Uses',
        'users' => 'Users',
        'products' => 'Products',
        'coupon_code' => 'Enter your coupon code here',
        'max_discount_value' => 'Maximum Disount Value'
    ],
    'order' => [
        'order_number' => 'Order Number',
        'amount' => 'Amount',
        'user_id' => 'User',
        'id' => 'ID',
        'status_order' => 'Order Status',
        'shipping_status' => 'Shipping Status',
        'shipping_track' => 'Shipping Tracking Number',
        'shipping_label' => 'Shipping Label URL',
        'payment_status' => 'Payment Status',
        'payment_method' => 'Payment Method',
        'payment_reference' => 'Payment Reference',
        'description' => 'Description',
        'type' => 'Type',
        'sku_code' => 'SKU Code',
        'quantity' => 'Quantity',
        'order_primary' => 'Order #',
        'page_link' => 'URL',
        'file' => 'File',
        'address_one' => 'Address 1',
        'address_two' => 'Address 2',
        'city' => 'City',
        'state' => 'State',
        'zip' => 'Zip',
        'country' => 'Country',
        'method' => 'Method',
    ],
    'wishlist' => [
        'product' => 'Product'
    ],
    'product' => [
        'image' => 'Image',
        'name' => 'Tên sản phẩm',
        'title_name' => 'Product Name',
        'type' => 'Type',
        'type_option' => [
            'simple' => 'Simple',
            'variable' => 'Variable'
        ],
        'price' => 'Giá bán',
        'starts_at' => 'Starts at',
        'shippable' => 'Shippable',
        'brand' => 'Nhãn hiệu',
        'categories' => 'Danh mục',
        'tags' => 'Tags',
        'description' => 'Mô tả',
        'status_product' => 'Active Products',
        'average_rating' => 'Average Rating',
        'sku_code' => 'Mã SKU',
        'caption' => 'Chú thích',
        'properties' => 'Properties',
        'slug' => 'Slug',
        'slug_help' => 'Slug will be filled automatically if left blank',
        'global_options' => 'Product Attributes',
        'regular_price' => 'Giá bán',
        'sale_price' => 'Giá khuyến mãi',
        'allowed_quantity' => 'Số lượng được phép cho mỗi đơn đặt hàng',
        'inventory' => 'Inventory',
        'type_options' => [
            'finite' => 'Finite',
            'bucket' => 'Bucket',
            'infinite' => 'Infinite'
        ],
        'help' => '0 means quantity is not restricted',
        'variation_options' => 'Variation Options',
        'bucket_options' => [
            'in_stock' => 'In Stock',
            'out_of_stock' => 'Hết hàng',
            'limited' => 'Limited',
        ],
        'tax_classes' => 'Tax Classes',
        'is_featured' => 'Đặc sắc',
        'width' => 'Width',
        'height' => 'Height',
        'length' => 'Length',
        'weight' => 'Weight',
        'external' => 'External',
        'help_external' => 'Users will be redirected to this link when the click "Add To Cart"',
        'external_url' => 'External URL',
        'downloads_enabled' => 'Cho phép tải về',
        'private_content_page' => 'Private Content Pages Access',
        'posts' => 'Posts & Pages',
        'gateway_status' => 'Gateway Status',
        'global_option' => 'Global Options',
    ],
    'shipping' => [
        'priority' => 'Priority',
        'name' => 'Name',
        'shipping_method' => 'Shipping Provider',
        'help_shipping_name' => 'Use same name if you want to override the same rule',
        'country' => 'Country',
        'status_options' => [
            'active' => 'Active',
            'pending' => 'Pending',
            'expired' => 'Expired',
        ],
        'rate' => 'Rate',
        'description' => 'Description',
        'help' => 'required for flat shipping method only',
        'help_num_higher' => 'Lower number takes higher priority',
        'min_order_total' => 'Minimum order total',
        'help_exclusive' => 'Don\'t show Other Shipping Providers when this shipping is enabled',
        'exclusive' => 'Exclusive'
    ],
    'sku' => [
        'image' => 'Image',
        'code' => 'Code',
        'price' => 'Price',
        'inventory' => 'Inventory',
        'dt_options' => 'Options',
        'regular_price' => 'Regular Price',
        'sale_price' => 'Sale Price',
        'allowed_quantity' => 'Allowed Quantity Per Order',
        'code_sku' => 'SKU code',
        'clear' => 'Clear thumbnail image',
        'width' => 'Width',
        'height' => 'Height',
        'length' => 'Length',
        'weight' => 'Weight',
        'downloads_enabled' => 'Downloadable',
        'inventory_value' => 'Inventory Value',
        'help' => '0 means quantity is not restricted'
    ],
    'tag' => [
        'name' => 'Name',
        'slug' => 'Slug',
        'products_count' => '# Products',
    ],
    'shop' => [
        'quantity' => 'Quantity'
    ]


];