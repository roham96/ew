<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'مقدار :attribute باید پذیرفته شود.',
     'accepted_if' => 'مقدار :attribute باید زمانی پذیرفته شود که :other :value باشد.',
     'active_url' => 'مقدار :attribute باید یک URL معتبر باشد.',
     'after' => 'مقدار :attribute باید تاریخ بعد از :date باشد.',
     'after_or_equal' => 'مقدار :attribute باید تاریخ بعد یا برابر با :date باشد.',
     'alpha' => 'مقدار :attribute فقط باید دارای حروف باشد.',
     'alpha_dash' => 'مقدار :attribute فقط باید شامل حروف, اعداد, خط تیره و زیرخط باشد.',
     'alpha_num' => 'مقدار :attribute فقط باید شامل حروف و اعداد باشد.',
     'array' => 'مقدار :attribute باید یک آرایه باشد.',
     'ascii' => 'مقدار :attribute باید فقط شامل کاراکترها و نمادهای الفبای عددی تک بایتی باشد.',
     'before' => 'مقدار :attribute باید تاریخ قبل از :date باشد.',
     'before_or_equal' => 'مقدار :attribute باید تاریخ قبل یا برابر با :date باشد.',
     'between' => [
         'array' => 'مقدار :attribute باید بین موارد :min و :max باشد.',
         'file' => 'مقدار :attribute باید بین :min و :max کیلوبایت باشد.',
         'numeric' => 'مقدار :attribute باید بین :min و :max باشد.',
         'string' => 'مقدار :attribute باید بین :min و :max کاراکتر باشد.',
     ],
     'boolean' => 'مقدار :attribute باید درست یا نادرست باشد.',
     'can' => 'مقدار :attribute حاوی یک مقدار غیرمجاز است.',
     'confirmed' => 'تأیید مقدار :attribute مطابقت ندارد.',
     'current_password' => 'گذرواژه نادرست است.',
     'date' => 'مقدار :attribute باید یک تاریخ معتبر باشد.',
     'date_equals' => 'مقدار :attribute باید تاریخی برابر با :date باشد.',
     'date_format' => 'مقدار :attribute باید با قالب :format مطابقت داشته باشد.',
     'decimal' => 'مقدار :attribute باید دارای اعشار :اعشاری باشد.',
     'declined' => 'مقدار :attribute باید رد شود.',
     'declined_if' => 'مقدار :attribute زمانی که :other :value باشد باید رد شود.',
     'different' => 'مقدار :attribute و :other باید متفاوت باشند.',
     'digits' => 'مقدار :attribute باید رقم :digits باشد.',
     'digits_between' => 'مقدار :attribute باید بین :min و :max رقم باشد.',
     'dimensions' => 'مقدار :attribute دارای ابعاد تصویر نامعتبر است.',
     'distinct' => 'مقدار :attribute دارای یک مقدار تکراری است.',
     'doesnt_end_with' => 'مقدار :attribute نباید به یکی از موارد زیر ختم شود: :values.',
     'doesnt_start_with' => 'مقدار :attribute نباید با یکی از موارد زیر شروع شود: :values.',
     'email' => 'مقدار :attribute باید یک آدرس ایمیل معتبر باشد.',
     'ends_with' => 'مقدار :attribute باید به یکی از موارد زیر ختم شودfollowing: :values.',
     'enum' => 'attribute :انتخاب شده نامعتبر است.',
     'exists' => 'attribute :انتخاب شده نامعتبر است.',
     'extensions' => 'مقدار :attribute باید دارای یکی از پسوندهای زیر باشدfollowing: :values.',
     'file' => 'مقدار :attribute باید یک فایل باشد.',
     'filled' => 'مقدار :attribute باید دارای یک مقدار باشد.',
     'gt' => [
        'array' => 'مقدار :attribute باید بیش از موارد :value داشته باشد.',
        'file' => 'مقدار :attribute باید بزرگتر از :value کیلوبایت باشد.',
        'numeric' => 'مقدار :attribute باید بزرگتر از :value باشد.',
        'string' => 'مقدار :attribute باید بزرگتر از کاراکترهای :value باشد.',
    ],
    'gte' => [
        'array' => 'مقدار :attribute باید موارد :value یا بیشتر داشته باشد.',
        'file' => 'مقدار :attribute باید بزرگتر یا مساوی با :value کیلوبایت باشد.',
        'numeric' => 'مقدار :attribute باید بزرگتر یا مساوی :value باشد.',
        'string' => 'مقدار :attribute باید بزرگتر یا مساوی با کاراکترهای :value باشد.',
    ],
    'hex_color' => 'مقدار :attribute باید یک رنگ هگزادسیمال معتبر باشد.',
    'image' => 'مقدار :attribute باید یک تصویر باشد.',
    'in' => 'attribute :انتخاب شده نامعتبر است.',
    'in_array' => 'مقدار :attribute باید در :other وجود داشته باشد.',
    'integer' => 'مقدار :attribute باید یک عدد صحیح باشد.',
    'ip' => 'مقدار :attribute باید یک آدرس IP معتبر باشد.',
    'ipv4' => 'مقدار :attribute باید یک آدرس IPv4 معتبر باشد.',
    'ipv6' => 'مقدار :attribute باید یک آدرس IPv6 معتبر باشد.',
    'json' => 'مقدار :attribute باید یک رشته JSON معتبر باشد.',
    'lowcase' => 'مقدار :attribute باید با حروف کوچک باشد.',
    'lt' => [
        'array' => 'مقدار :attribute باید کمتر از موارد :value داشته باشد.',
        'file' => 'مقدار :attribute باید کمتر از :value کیلوبایت باشد.',
        'numeric' => 'مقدار :attribute باید کمتر از :value باشد.',
        'string' => 'مقدار :attribute باید کمتر از کاراکترهای :value باشد.',
    ],
    'lte' => [
        'array' => 'مقدار :attribute نباید بیش از موارد :value داشته باشد.',
        'file' => 'مقدار :attribute باید کمتر یا مساوی با :value کیلوبایت باشد.',
        'numeric' => 'مقدار :attribute باید کمتر یا مساوی با :value باشد.',
        'string' => 'مقدار :attribute باید کمتر یا مساوی با کاراکترهای :value باشد.',
    ],
    'mac_address' => 'مقدار :attribute باید یک آدرس MAC معتبر باشد.',
    'max' => [
        'array' => 'مقدار :attribute نباید بیش از :max آیتم داشته باشد.',
        'file' => 'مقدار :attribute نباید بیشتر از :max کیلوبایت باشد.',
        'numeric' => 'مقدار :attribute نباید بزرگتر از :max باشد.',
        'string' => 'مقدار :attribute نباید بزرگتر از :max کاراکتر باشد.',
    ],
    'max_digits' => 'مقدار :attribute نباید بیش از :max رقم داشته باشد.',
    'mimes' => 'مقدار :attribute باید فایلی از نوع: :values باشد.',
    'mimetypes' => 'مقدار :attribute باید فایلی از نوع: :values باشد.',
    'min' => [
        'array' => 'مقدار :attribute باید حداقل موارد :min داشته باشد.',
        'file' => 'مقدار :attribute باید حداقل :min کیلوبایت باشد.',
        'numeric' => 'مقدار :attribute باید حداقل :min باشد.',
        'string' => 'مقدار :attribute باید حداقل کاراکتر :min باشد.',
    ],
    'min_digits' => 'مقدار :attribute باید حداقل دارای :min رقم باشد.',
     'missing' => 'مقدار :attribute باید وجود نداشته باشد.',
     'missing_if' => 'مقدار :attribute باید وجود نداشته باشد وقتی :other :value باشد.',
     'missing_unless' => 'مقدار :attribute باید وجود نداشته باشد مگر اینکه :other :value باشد.',
     'missing_with' => 'مقدار :attribute باید در صورت وجود :values وجود نداشته باشد.',
     'missing_with_all' => 'مقدار :attribute باید زمانی که :values وجود دارد وجود نداشته باشد.',
     'multiple_of' => 'مقدار :attribute باید مضرب :value باشد.',
     'not_in' => 'attribute :انتخاب شده نامعتبر است.',
     'not_regex' => 'قالب مقدار :attribute نامعتبر است.',
     'numeric' => 'مقدار :attribute باید یک عدد باشد.',
     'رمز عبور' => [
         'letters' => 'مقدار :attribute باید حداقل یک حرف داشته باشد.',
         'mixed' => 'مقدار :attribute باید حداقل دارای یک حرف بزرگ و یک حرف کوچک باشد.',
         'numbers' => 'مقدار :attribute باید حداقل دارای یک عدد باشد.',
         'symbols' => 'مقدار :attribute باید حداقل دارای یک نماد باشد.',
         'uncompromised' => 'attribute :در نشت داده ظاهر شده است. لطفاً یک :attribute متفاوت را انتخاب کنید.',
     ],
     'present' => 'مقدار :attribute باید وجود داشته باشد.',
     'present_if' => 'مقدار :attribute باید زمانی وجود داشته باشد که :other :value باشد.',
     'present_unless' => 'مقدار :attribute باید وجود داشته باشد مگر اینکه :other :value باشد.',
     'present_with' => 'مقدار :attribute باید در صورت وجود :values وجود داشته باشد.',
     'present_with_all' => 'مقدار :attribute باید در صورت وجود :values وجود داشته باشد.',
     'prohibited' => 'مقدار :attribute ممنوع است.',
     'prohibited_if' => 'مقدار :attribute زمانی که :other :value باشد ممنوع است.',
     'prohibited_unless' => 'مقدار :attribute ممنوع است مگر اینکه :other در :values باشد.',
     'prohibits' => 'مقدار :attribute وجود :other را ممنوع می کند.',
     'regex' => 'قالب مقدار :attribute نامعتبر است.',
     'required' => 'مقدار :attribute الزامی است.',
     'required_array_keys' => 'مقدار :attribute باید حاوی ورودی هایی برای: :values باشد.',
     'required_if' => 'مقدار :attribute زمانی لازم است که :other :value باشد.',
     'required_if_accepted' => 'مقدار :attribute زمانی لازم است که :other پذیرفته شود.',
     'required_unless' => 'مقدار :attribute الزامی است مگر اینکه :other در :values باشد.',
     'required_with' => 'مقدار :attribute زمانی لازم است که :values وجود داشته باشد.',
     'required_with_all' => 'مقدار :attribute زمانی لازم است که :values وجود داشته باشد.',
     'required_without' => 'مقدار :attribute زمانی لازم است که :values وجود نداشته باشد.',
     'required_without_all' => 'مقدار :attribute زمانی لازم است که هیچ یک از :value ها وجود نداشته باشد.',
     'same' => 'مقدار :attribute باید با :other مطابقت داشته باشد.',
     'اندازه' => [
         'array' => 'مقدار :attribute باید شامل موارد :size باشد.',
         'file' => 'مقدار :attribute باید :size کیلوبایت باشد.',
         'numeric' => 'مقدار :attribute باید :size باشد.',
         'string' => 'مقدار :attribute باید کاراکترهای :size باشد.',
     ],
     'starts_with' => 'مقدار :attribute باید با یکی از موارد زیر شروع شود: :values.',
     'string' => 'مقدار :attribute باید یک رشته باشد.',
     'timezone' => 'مقدار :attribute باید یک منطقه زمانی معتبر باشد.',
     'unique' => 'attribute : قبلاً گرفته شده است.',
     'uploaded' => 'attribute : بارگذاری نشد.',
     'uppercase' => 'مقدار :attribute باید با حروف بزرگ باشد.',
     'url' => 'مقدار :attribute باید یک URL معتبر باشد.',
     'ulid' => 'مقدار :attribute باید یک ULID معتبر باشد.',
     'uuid' => 'مقدار :attribute باید یک UUID معتبر باشد.',
     'invalid_data' => 'مقادیر وارد شده نامعتبر می باشد.',
     'additional' => '(بعلاوه :additional خطای دیگر)',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
