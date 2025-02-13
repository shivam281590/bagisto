<?php

return [
    'seeders' => [
        'attribute' => [
            'attribute-families' => [
                'default' => 'ডিফল্ট',
            ],

            'attribute-groups' => [
                'description'       => 'বর্ণনা',
                'general'           => 'সাধারণ',
                'inventories'       => 'মালামালের মৌলিক বিশেষত্ব',
                'meta-description'  => 'মেটা বর্ণনা',
                'price'             => 'মূল্য',
                'shipping'          => 'শিপিং',
                'settings'          => 'সেটিংস',
            ],

            'attributes' => [
                'brand'                => 'ব্র্যান্ড',
                'color'                => 'রঙ',
                'cost'                 => 'মূল্য',
                'description'          => 'বর্ণনা',
                'featured'             => 'নির্বাচিত',
                'guest-checkout'       => 'অতিথি চেকআউট',
                'height'               => 'উচ্চতা',
                'length'               => 'দৈর্ঘ্য',
                'meta-title'           => 'মেটা শিরোনাম',
                'meta-keywords'        => 'মেটা কীওয়ার্ড',
                'meta-description'     => 'মেটা বর্ণনা',
                'manage-stock'         => 'স্টক পরিচালনা করুন',
                'new'                  => 'নতুন',
                'name'                 => 'নাম',
                'product-number'       => 'পণ্য নম্বর',
                'price'                => 'মূল্য',
                'sku'                  => 'SKU',
                'status'               => 'অবস্থা',
                'short-description'    => 'সংক্ষিপ্ত বর্ণনা',
                'special-price'        => 'বিশেষ মূল্য',
                'special-price-from'   => 'বিশেষ মূল্য থেকে',
                'special-price-to'     => 'বিশেষ মূল্য প্রায়',
                'size'                 => 'আকার',
                'tax-category'         => 'কর বিভাগ',
                'url-key'              => 'URL কী',
                'visible-individually' => 'একে একে দেখা যাবে',
                'width'                => 'প্রস্থ',
                'weight'               => 'ওজন',
            ],

            'attribute-options' => [
                'black'  => 'কালো',
                'green'  => 'সবুজ',
                'l'      => 'L',
                'm'      => 'M',
                'red'    => 'লাল',
                's'      => 'S',
                'white'  => 'সাদা',
                'xl'     => 'XL',
                'yellow' => 'হলুদ',
            ],
        ],

        'category' => [
            'categories' => [
                'description' => 'মূল বর্গের বর্ণনা',
                'name'        => 'মূল',
            ],
        ],

        'cms' => [
            'pages' => [
                'about-us' => [
                    'content' => 'আমাদের সম্পর্কে পাতা সামগ্রী',
                    'title'   => 'আমাদের সম্পর্কে',
                ],

                'refund-policy' => [
                    'content' => 'ফেরত নেওয়া নীতি পাতা সামগ্রী',
                    'title'   => 'ফেরত নেওয়া নীতি',
                ],

                'return-policy' => [
                    'content' => 'ফেরত নেওয়া নীতি পাতা সামগ্রী',
                    'title'   => 'ফেরত নেওয়া নীতি',
                ],

                'terms-conditions' => [
                    'content' => 'শর্তাবলী পাতা সামগ্রী',
                    'title'   => 'শর্তাবলী',
                ],

                'terms-of-use' => [
                    'content' => 'ব্যবহারের শর্ত পাতা সামগ্রী',
                    'title'   => 'ব্যবহারের শর্ত',
                ],

                'contact-us' => [
                    'content' => 'যোগাযোগ করুন পাতা সামগ্রী',
                    'title'   => 'যোগাযোগ করুন',
                ],

                'customer-service' => [
                    'content' => 'গ্রাহক সেবা পাতা সামগ্রী',
                    'title'   => 'গ্রাহক সেবা',
                ],

                'whats-new' => [
                    'content' => 'আমাদের নতুন জিনিস পাতা সামগ্রী',
                    'title'   => 'কি নতুন',
                ],

                'payment-policy' => [
                    'content' => 'পেমেন্ট নীতি পাতা সামগ্রী',
                    'title'   => 'পেমেন্ট নীতি',
                ],

                'shipping-policy' => [
                    'content' => 'পরিবহন নীতি পাতা সামগ্রী',
                    'title'   => 'পরিবহন নীতি',
                ],

                'privacy-policy' => [
                    'content' => 'গোপনীয়তা নীতি পাতা সামগ্রী',
                    'title'   => 'গোপনীয়তা নীতি',
                ],
            ],
        ],

        'core' => [
            'channels' => [
                'meta-title'       => 'ডেমো স্টোর',
                'meta-keywords'    => 'ডেমো স্টোর মেটা কীওয়ার্ড',
                'meta-description' => 'ডেমো স্টোর মেটা বর্ণনা',
                'name'             => 'ডিফল্ট',
            ],

            'currencies' => [
                'CNY' => 'চীনা ইউয়ান',
                'AED' => 'দিরহাম',
                'EUR' => 'ইউরো',
                'INR' => 'ভারতীয় টাকা',
                'IRR' => 'ইরানী রিয়াল',
                'ILS' => 'ইস্রায়েলি শেকেল',
                'JPY' => 'জাপানি ইয়েন',
                'GBP' => 'ব্রিটিশ পাউন্ড',
                'RUB' => 'রাশিয়ান রুবল',
                'SAR' => 'সৌদি রিয়াল',
                'TRY' => 'তুর্কি লিরা',
                'USD' => 'মার্কিন ডলার',
                'UAH' => 'ইউক্রেনিয়ান হৃব্র',
            ],

            'locales' => [
                'ar'    => 'আরবি',
                'bn'    => 'বাংলা',
                'de'    => 'জার্মান',
                'es'    => 'স্পেনী',
                'en'    => 'ইংরেজি',
                'fr'    => 'ফরাসি',
                'fa'    => 'ফারসি',
                'he'    => 'হিব্রু',
                'hi_IN' => 'হিন্দি',
                'it'    => 'ইতালীয়',
                'ja'    => 'জাপানি',
                'nl'    => 'ডাচ',
                'pl'    => 'পোলিশ',
                'pt_BR' => 'ব্রাজিলিয়ান পর্তুগিজ',
                'ru'    => 'রাশিয়ান',
                'sin'   => 'সিংহলা',
                'tr'    => 'তুর্কি',
                'uk'    => 'ইউক্রেনীয়',
                'zh_CN' => 'চীনা',
            ],
        ],

        'customer' => [
            'customer-groups' => [
                'guest'     => 'অতিথি',
                'general'   => 'সাধারণ',
                'wholesale' => 'থোক',
            ],
        ],

        'inventory' => [
            'inventory-sources' => [
                'name' => 'ডিফল্ট',
            ],
        ],

        'shop' => [
            'theme-customizations' => [
                'image-carousel' => [
                    'name'  => 'চিত্র ক্যারোসেল',

                    'sliders' => [
                        'title' => 'নতুন সংগ্রহের জন্য প্রস্তুত হোন',
                    ],
                ],

                'offer-information' => [
                    'name' => 'অফার তথ্য',

                    'content' => [
                        'title' => 'আপনার 1টি মান অর্ডারে 40% ছাড় পেতে SHOP NOW',
                    ],
                ],

                'categories-collections' => [
                    'name' => 'বিভাগ সংগ্রহ',
                ],

                'new-products' => [
                    'name' => 'নতুন পণ্য',

                    'options' => [
                        'title' => 'নতুন পণ্য',
                    ],
                ],

                'top-collections' => [
                    'name' => 'শীর্ষ সংগ্রহ',

                    'content' => [
                        'sub-title-1' => 'আমাদের সংগ্রহ',
                        'sub-title-2' => 'আমাদের সংগ্রহ',
                        'sub-title-3' => 'আমাদের সংগ্রহ',
                        'sub-title-4' => 'আমাদের সংগ্রহ',
                        'sub-title-5' => 'আমাদের সংগ্রহ',
                        'sub-title-6' => 'আমাদের সংগ্রহ',
                        'title'       => 'আমাদের নতুন যোগাযোগে খেলা!',
                    ],
                ],

                'bold-collections' => [
                    'name' => 'বোল্ড সংগ্রহ',

                    'content' => [
                        'btn-title'   => 'সব দেখুন',
                        'description' => 'আমাদের নতুন বোল্ড সংগ্রহ পরিচিত করার জন্য আপনার শৈলীকে ধৈর্যশীল ডিজাইন এবং জীবন্ত বক্তব্যগুলি দিয়ে আপনার গার্ডরোব পরিভ্রান্ত করুন। আকর্ষণীয় মোটীর্দে প্যাটার্ন এবং বোল্ড রঙের অনুসন্ধান করুন, যা আপনার সাড়াদে পরিভ্রান্ত করে। অসাধারণ দেখার জন্য প্রস্তুত হোন!',
                        'title'       => 'আমাদের নতুন বোল্ড সংগ্রহের জন্য প্রস্তুত হোন!',
                    ],
                ],

                'featured-collections' => [
                    'name' => 'নির্দেশিত সংগ্রহ',

                    'options' => [
                        'title' => 'নির্দেশিত পণ্য',
                    ],
                ],

                'game-container' => [
                    'name' => 'খেলা সংগ্রহ',

                    'content' => [
                        'sub-title-1' => 'আমাদের সংগ্রহ',
                        'sub-title-2' => 'আমাদের সংগ্রহ',
                        'title'       => 'আমাদের নতুন যোগাযোগে খেলা!',
                    ],
                ],

                'all-products' => [
                    'name' => 'সব পণ্য',

                    'options' => [
                        'title' => 'সমস্ত পণ্য',
                    ],
                ],

                'footer-links' => [
                    'name' => 'পাদচরণ লিঙ্কস',

                    'options' => [
                        'about-us'         => 'আমাদের সম্পর্কে',
                        'contact-us'       => 'যোগাযোগ করুন',
                        'customer-service' => 'গ্রাহক সেবা',
                        'privacy-policy'   => 'গোপনীয়তা নীতি',
                        'payment-policy'   => 'মূল্য নীতি',
                        'return-policy'    => 'প্রত্যাশ্য নীতি',
                        'refund-policy'    => 'প্রতিপূর্তি নীতি',
                        'shipping-policy'  => 'প্রেরণা নীতি',
                        'terms-of-use'     => 'ব্যবহারের শর্তাবলি',
                        'terms-conditions' => 'শর্ত এবং শর্তাদি',
                        'whats-new'        => 'নতুন কি আছে',
                    ],
                ],
            ],
        ],

        'user' => [
            'users' => [
                'name' => 'উদাহরণ',
            ],

            'roles' => [
                'description' => 'এই ভূমিকা ব্যবহারকারীদের সমস্ত অ্যাক্সেস থাকবে',
                'name'        => 'প্রশাসক',
            ],
        ],
    ],

    'installer' => [
        'index' => [
            'server-requirements' => [
                'calendar'    => 'পত্রিকা',
                'ctype'       => 'cType',
                'curl'        => 'cURL',
                'dom'         => 'ডম',
                'fileinfo'    => 'ফাইল তথ্য',
                'filter'      => 'ফিল্টার',
                'gd'          => 'GD',
                'hash'        => 'হ্যাশ',
                'intl'        => 'intl',
                'json'        => 'JSON',
                'mbstring'    => 'এমবি স্ট্রিং',
                'openssl'     => 'ওপেনএসএসএল',
                'php'         => 'PHP',
                'php-version' => '8.1 বা তার উর্ধ্বে',
                'pcre'        => 'pcre',
                'pdo'         => 'pdo',
                'session'     => 'সেশন',
                'title'       => 'সার্ভার প্রয়োগণ',
                'tokenizer'   => 'টোকেনাইজার',
                'xml'         => 'XML',
            ],

            'environment-configuration' => [
                'application-name'    => 'অ্যাপ্লিকেশন নাম',
                'arabic'              => 'আরবি',
                'bagisto'             => 'বাগিস্টো',
                'bengali'             => 'বাঙালি',
                'chinese-yuan'        => 'চীনা ইউয়ান (CNY)',
                'chinese'             => 'চীনা',
                'dirham'              => 'ডিরহাম (AED)',
                'default-url'         => 'ডিফল্ট URL',
                'default-url-link'    => 'https://localhost',
                'default-currency'    => 'ডিফল্ট মুদ্রা',
                'default-timezone'    => 'ডিফল্ট সময় মঞ্চ',
                'default-locale'      => 'ডিফল্ট লোকেল',
                'dutch'               => 'ডাচ',
                'database-connection' => 'ডাটাবেস সংযোগ',
                'database-hostname'   => 'ডাটাবেস হোস্টনেম',
                'database-port'       => 'ডাটাবেস পোর্ট',
                'database-name'       => 'ডাটাবেস নাম',
                'database-username'   => 'ডাটাবেস ব্যবহারকারী নাম',
                'database-prefix'     => 'ডাটাবেস প্রিফিক্স',
                'database-password'   => 'ডাটাবেস পাসওয়ার্ড',
                'euro'                => 'ইউরো (EUR)',
                'english'             => 'ইংরেজি',
                'french'              => 'ফরাসি',
                'hebrew'              => 'হিব্রু',
                'hindi'               => 'হিন্দি',
                'iranian'             => 'ইরানী রিয়াল (IRR)',
                'israeli'             => 'ইস্রায়েলি শেকেল (ILS)',
                'italian'             => 'ইটালিয়ান',
                'japanese-yen'        => 'জাপানি ইয়েন (JPY)',
                'japanese'            => 'জাপানি',
                'mysql'               => 'Mysql',
                'pgsql'               => 'pgSQL',
                'pound'               => 'পাউন্ড স্টার্লিং (GBP)',
                'persian'             => 'পার্সিয়ান',
                'polish'              => 'পোলিশ',
                'portuguese'          => 'ব্রাজিলিয়ান পর্তুগিজ',
                'rupee'               => 'ভারতীয় রুপি (INR)',
                'russian-ruble'       => 'রাশিয়ান রুবল (RUB)',
                'russian'             => 'রাশিয়ান',
                'sqlsrv'              => 'SQLSRV',
                'saudi'               => 'সৌদি রিয়াল (SAR)',
                'spanish'             => 'স্প্যানিশ',
                'sinhala'             => 'সিংহলা',
                'title'               => 'পরিবেশ কনফিগারেশন',
                'turkish-lira'        => 'তুর্কি লিরা (TRY)',
                'turkish'             => 'তুর্কি',
                'usd'                 => 'মার্কিন ডলার (USD)',
                'ukrainian-hryvnia'   => 'ইউক্রেনিয়ান হ্রাইভনিয়া (UAH)',
                'ukrainian'           => 'ইউক্রেনিয়ান',
            ],

            'ready-for-installation' => [
                'create-databsae-table'   => 'ডাটাবেস টেবিল তৈরি করুন',
                'install'                 => 'ইনস্টলেশন',
                'install-info'            => 'ইনস্টলেশন এর জন্য Bagisto',
                'install-info-button'     => 'নীচের বাটনে ক্লিক করুন',
                'populate-database-table' => 'ডাটাবেস টেবিল পূর্ণ করুন',
                'start-installation'      => 'ইনস্টলেশন শুরু করুন',
                'title'                   => 'ইনস্টলেশনের জন্য প্রস্তুত',
            ],

            'installation-processing' => [
                'bagisto'          => 'ইনস্টলেশন Bagisto',
                'bagisto-info'     => 'ডাটাবেস টেবিল তৈরি করা হচ্ছে, এটি কিছুটা সময় নিতে পারে',
                'title'            => 'ইনস্টলেশন',
            ],

            'create-administrator' => [
                'admin'            => 'অ্যাডমিন',
                'bagisto'          => 'বাগিস্টো',
                'confirm-password' => 'পাসওয়ার্ড নিশ্চিত করুন',
                'email'            => 'ইমেল',
                'email-address'    => 'admin@example.com',
                'password'         => 'পাসওয়ার্ড',
                'title'            => 'প্রশাসক তৈরি করুন',
            ],

            'email-configuration' => [
                'encryption'           => 'এনক্রিপশন',
                'enter-username'       => 'ব্যবহাককারী নাম লিখুন',
                'enter-password'       => 'পাসওয়ার্ড লিখুন',
                'outgoing-mail-server' => 'আউটগোয়িঙ মেইল সার্ভার',
                'outgoing-email'       => 'smpt.mailtrap.io',
                'password'             => 'পাসওয়ার্ড',
                'store-email'          => 'দোকানের ইমেল ঠিকানা',
                'enter-store-email'    => 'দোকানের ইমেল ঠিকানা লিখুন',
                'server-port'          => 'সার্ভার পোর্ট',
                'server-port-code'     => '3306',
                'title'                => 'ইমেল কনফিগারেশন',
                'username'             => 'ব্যবহাককারী নাম',
            ],

            'installation-completed' => [
                'admin-panel'                => 'অ্যাডমিন প্যানেল',
                'bagisto-forums'             => 'বাগিস্টো ফোরাম',
                'customer-panel'             => 'কাস্টমার প্যানেল',
                'explore-bagisto-extensions' => 'বাগিস্টো এক্সটেনশন অন্বেষণ করুন',
                'title'                      => 'ইনস্টলেশন সম্পন্ন',
                'title-info'                 => 'বাগিস্টো সফলভাবে আপনার সিস্টেমে ইনস্টল করা হয়েছে।',
            ],

            'bagisto-logo'             => 'বাগিস্টো লোগো',
            'back'                     => 'পেছনে যান',
            'bagisto-info'             => 'একটি সম্প্রদায় প্রকল্প দ্বারা',
            'bagisto'                  => 'বাগিস্টো',
            'continue'                 => 'চালিয়ে যান',
            'installation-title'       => 'ইনস্টলেশনে স্বাগতম',
            'installation-info'        => 'আমরা আপনাকে এখানে দেখে খুশি!',
            'installation-description' => 'সাধারণভাবে, বাগিস্টো ইনস্টলেশনে আমলের একাধিক পদক্ষেপ রয়েছে। বাগিস্টোর ইনস্টলেশন প্রক্রিয়াটির জন্য সাধারণভাবে এটির সারাংশ দেওয়া আছে:',
            'skip'                     => 'পার করুন',
            'save-configuration'       => 'কনফিগারেশন সংরক্ষণ করুন',
            'title'                    => 'Bagisto ইনস্টলার',
            'webkul'                   => 'Webkul',
        ],
    ],
];
