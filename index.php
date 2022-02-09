<?php

require __DIR__ . '/vendor/autoload.php';

use Automattic\WooCommerce\Client;

$woocommerce = new Client(
    'http://localhost/wordpress', 
    'ck_e8744cdd52370bd4db36f9cbf0da7a3e53c02e3f', 
    'cs_34ee3dde943fc7dfcb14cb105a7fd49e1fb105a3',
    [
        'version' => 'wc/v3',
    ]
);

/**List Of Products **/
//  $products = $woocommerce->get('products');

//  echo '<pre>';
//     print_r($products);
//  echo '</pre>';


/** Get one Product */
//  $product = $woocommerce->get('products/13');
//  echo '<pre>';
//     print_r($product);
//  echo '</pre>';

/** Update a Product */

// $data = [
//     'regular_price' => '29.99'
// ];

//  $response = $woocommerce->put('products/13', $data);

//   echo '<pre>';
//      print_r($response);
//   echo '</pre>';

/** Create a Product */
// echo '<pre>';
// print_r($woocommerce->get('products/categories'));
// echo '</pre>';
// die;

// $data = [
//     'name' => 'Woo T-Shirt',
//     'type' => 'simple',
//     'regular_price' => '149.99',
//     'description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.',
//     'short_description' => 'Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.',
//     'categories' => [
//         [
//             'id' => 9
//         ],
//         [
//             'id' => 14
//         ]
//     ],
//     'images' => [
//         [
//             'src' => 'https://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_1_front.jpg'
//         ],
//         [
//             'src' => 'https://demo.woothemes.com/woocommerce/wp-content/uploads/sites/56/2013/06/T_1_back.jpg'
//         ]
//     ]
// ];

// $res = $woocommerce->post('products', $data);

// echo '<pre>';
//     print_r($res);
// echo '</pre>';

/** Delete a Product */

$woocommerce->delete('products/13', ['force' => true])

?>