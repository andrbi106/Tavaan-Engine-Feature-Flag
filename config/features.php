<?php

declare(strict_types=1);

/*|--------------------------------------------------------------------------
 | Feature-Flag Engine Configuration
 |--------------------------------------------------------------------------
 |
 | پیکربندی موتور feature-flag — همهٔ کلیدهای مستندشده در `docs/03-engines/feature-flag.md` بخش «پیکربندی».
 |
 |@see https://github.com/Derogaramin/Tavaan-Doc/blob/main/docs/03-engines/feature-flag.md
 */

return [
    /*| پیش‌فرض موتور (driver/store یا حالت فعال) */
    'default' => env('FEATURE-FLAG_DEFAULT', 'default'),

    /*| کلید کش (در صورت استفاده) */
    'prefix' => env('FEATURE-FLAG_PREFIX', 'feature-flag:'),

    /*| تنظیمات لاگ */
    'log' => [
        'channel' => env('FEATURE-FLAG_LOG_CHANNEL', 'feature-flag'),
    ],

    /*| Facade */
    'facade' => [
        'name' => 'Feature',
        'accessor' => 'feature',
    ],

    /*| سایر کلیدها (طبق مستندات) */
    'options' => [
        // TODO: کلیدهای اضافی طبق سند §۶ (پیکربندی)
    ],
];