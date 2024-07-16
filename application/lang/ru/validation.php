<?php

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

return [
    'accepted' => 'Вы должны принять :attribute.',
    'active_url' => 'Поле :attribute содержит недействительный URL.',
    'after' => 'В поле :attribute должна быть дата больше :date.',
    'after_or_equal' =>
        'В поле :attribute должна быть дата больше или равняться :date.',
    'alpha' => 'Поле :attribute может содержать только буквы.',
    'alpha_dash' =>
        'Поле :attribute может содержать только буквы, цифры, дефис и нижнее подчеркивание.',
    'alpha_num' => 'Поле :attribute может содержать только буквы и цифры.',
    'array' => 'Поле :attribute должно быть массивом.',
    'attached' => 'Поле :attribute уже прикреплено.',
    'before' => 'В поле :attribute должна быть дата раньше :date.',
    'before_or_equal' =>
        'В поле :attribute должна быть дата раньше или равняться :date.',
    'between' => [
        'array' =>
            'Количество элементов в поле :attribute должно быть между :min и :max.',
        'file' =>
            'Размер файла в поле :attribute должен быть между :min и :max Килобайт(а).',
        'numeric' => 'Поле :attribute должно быть между :min и :max.',
        'string' =>
            'Количество символов в поле :attribute должно быть между :min и :max.'
    ],
    'boolean' => 'Поле :attribute должно иметь значение логического типа.',
    'confirmed' => 'Поле :attribute не совпадает с подтверждением.',
    'current_password' => 'The password is incorrect.',
    'date' => 'Поле :attribute не является датой.',
    'date_equals' => 'Поле :attribute должно быть датой равной :date.',
    'date_format' => 'Поле :attribute не соответствует формату :format.',
    'different' => 'Поля :attribute и :other должны различаться.',
    'digits' => 'Длина цифрового поля :attribute должна быть :digits.',
    'digits_between' =>
        'Длина цифрового поля :attribute должна быть между :min и :max.',
    'dimensions' => 'Поле :attribute имеет недопустимые размеры изображения.',
    'distinct' => 'Поле :attribute содержит повторяющееся значение.',
    'email' =>
        'Поле :attribute должно быть действительным электронным адресом.',
    'ends_with' =>
        'Поле :attribute должно заканчиваться одним из следующих значений: :values',
    'exists' => 'Выбранное значение для :attribute некорректно.',
    'file' => 'Поле :attribute должно быть файлом.',
    'filled' => 'Поле :attribute обязательно для заполнения.',
    'gt' => [
        'array' =>
            'Количество элементов в поле :attribute должно быть больше :value.',
        'file' =>
            'Размер файла в поле :attribute должен быть больше :value Килобайт(а).',
        'numeric' => 'Поле :attribute должно быть больше :value.',
        'string' =>
            'Количество символов в поле :attribute должно быть больше :value.'
    ],
    'gte' => [
        'array' =>
            'Количество элементов в поле :attribute должно быть :value или больше.',
        'file' =>
            'Размер файла в поле :attribute должен быть :value Килобайт(а) или больше.',
        'numeric' => 'Поле :attribute должно быть :value или больше.',
        'string' =>
            'Количество символов в поле :attribute должно быть :value или больше.'
    ],
    'image' => 'Поле :attribute должно быть изображением.',
    'in' => 'Выбранное значение для :attribute ошибочно.',
    'in_array' => 'Поле :attribute не существует в :other.',
    'integer' => 'Поле :attribute должно быть целым числом.',
    'ip' => 'Поле :attribute должно быть действительным IP-адресом.',
    'ipv4' => 'Поле :attribute должно быть действительным IPv4-адресом.',
    'ipv6' => 'Поле :attribute должно быть действительным IPv6-адресом.',
    'json' => 'Поле :attribute должно быть JSON строкой.',
    'lt' => [
        'array' =>
            'Количество элементов в поле :attribute должно быть меньше :value.',
        'file' =>
            'Размер файла в поле :attribute должен быть меньше :value Килобайт(а).',
        'numeric' => 'Поле :attribute должно быть меньше :value.',
        'string' =>
            'Количество символов в поле :attribute должно быть меньше :value.'
    ],
    'lte' => [
        'array' =>
            'Количество элементов в поле :attribute должно быть :value или меньше.',
        'file' =>
            'Размер файла в поле :attribute должен быть :value Килобайт(а) или меньше.',
        'numeric' => 'Поле :attribute должно быть :value или меньше.',
        'string' =>
            'Количество символов в поле :attribute должно быть :value или меньше.'
    ],
    'max' => [
        'array' =>
            'Количество элементов в поле :attribute не может превышать :max.',
        'file' =>
            'Размер файла в поле :attribute не может быть больше :max Килобайт(а).',
        'numeric' => 'Поле :attribute не может быть больше :max.',
        'string' =>
            'Количество символов в поле :attribute не может превышать :max.'
    ],
    'mimes' =>
        'Поле :attribute должно быть файлом одного из следующих типов: :values.',
    'mimetypes' =>
        'Поле :attribute должно быть файлом одного из следующих типов: :values.',
    'min' => [
        'array' =>
            'Количество элементов в поле :attribute должно быть не меньше :min.',
        'file' =>
            'Размер файла в поле :attribute должен быть не меньше :min Килобайт(а).',
        'numeric' => 'Поле :attribute должно быть не меньше :min.',
        'string' =>
            'Количество символов в поле :attribute должно быть не меньше :min.'
    ],
    'multiple_of' => 'Значение поля :attribute должно быть кратным :value',
    'not_in' => 'Выбранное значение для :attribute ошибочно.',
    'not_regex' => 'Выбранный формат для :attribute ошибочный.',
    'numeric' => 'Поле :attribute должно быть числом.',
    'password' => 'Неверный пароль.',
    'present' => 'Поле :attribute должно присутствовать.',
    'prohibited' => 'Поле :attribute запрещено.',
    'prohibited_if' => 'Поле :attribute запрещено, когда :other равно :value.',
    'prohibited_unless' =>
        'Поле :attribute запрещено, если :other не входит в :values.',
    'regex' => 'Поле :attribute имеет ошибочный формат.',
    'relatable' => 'Поле :attribute не может быть связано с этим ресурсом.',
    'required' => 'Поле :attribute обязательно для заполнения.',
    'required_if' => 'Поле :attribute обязательно для заполнения',
    'required_unless' =>
        'Поле :attribute обязательно для заполнения, когда :other не равно :values.',
    'required_with' =>
        'Поле :attribute обязательно для заполнения, когда :values указано.',
    'required_with_all' =>
        'Поле :attribute обязательно для заполнения, когда :values указано.',
    'required_without' =>
        'Поле :attribute обязательно для заполнения, когда :values не указано.',
    'required_without_all' =>
        'Поле :attribute обязательно для заполнения, когда ни одно из :values не указано.',
    'same' => 'Значения полей :attribute и :other должны совпадать.',
    'size' => [
        'array' =>
            'Количество элементов в поле :attribute должно быть равным :size.',
        'file' =>
            'Размер файла в поле :attribute должен быть равен :size Килобайт(а).',
        'numeric' => 'Поле :attribute должно быть равным :size.',
        'string' =>
            'Количество символов в поле :attribute должно быть равным :size.'
    ],
    'starts_with' =>
        'Поле :attribute должно начинаться из одного из следующих значений: :values',
    'string' => 'Поле :attribute должно быть строкой.',
    'timezone' => 'Поле :attribute должно быть действительным часовым поясом.',
    'unique' => 'Такое значение поля :attribute уже существует.',
    'uploaded' => 'Загрузка поля :attribute не удалась.',
    'url' => 'Поле :attribute имеет ошибочный формат URL.',
    'uuid' => 'Поле :attribute должно быть корректным UUID.',
    'custom' => [
        'attribute-name' => [
            'rule-name' => 'custom-message'
        ]
    ],
    'bestprice-error-offer' => 'Cумма скидки не может превышать 30%',
    'attributes' => [
        'address' => 'Адрес',
        'age' => 'Возраст',
        'available' => 'Доступно',
        'city' => 'Город',
        'content' => 'Контент',
        'country' => 'Страна',
        'current_password' => 'Текущий пароль',
        'date' => 'Дата',
        'day' => 'День',
        'description' => 'Описание',
        'email' => 'E-Mail адрес',
        'email_phone' => 'E-mail или Teлефон',
        'excerpt' => 'Выдержка',
        'first_name' => 'Имя',
        'gender' => 'Пол',
        'hour' => 'Час',
        'last_name' => 'Фамилия',
        'surname' => 'Фамилия',
        'minute' => 'Минута',
        'mobile' => 'Моб. номер',
        'month' => 'Месяц',
        'name' => 'Имя',
        'password' => 'Пароль',
        'password_confirmation' => 'Подтверждение пароля',
        'phone' => 'Телефон',
        'second' => 'Секунда',
        'sex' => 'Пол',
        'size' => 'Размер',
        'time' => 'Время',
        'title' => 'Наименование',
        'username' => 'Никнейм',
        'year' => 'Год',
        'delivery' => 'Доставка',
        'payment' => 'Способ оплаты',
        'payment_pickup' => 'Тип оплаты',
        'shipping_data.region' => 'Регион',
        'shipping_data.city' => 'Город',
        'shipping_data.street' => 'Улица',
        'shipping_data.selected_street' => 'Улица',
        'shipping_data.delivery_time' => 'Время доставки',
        'shipping_data.nova_type' => 'Тип доставки',
        'shipping_data.nova_poshta_region' => 'Регион',
        'shipping_data.nova_poshta_city' => 'Город',
        'shipping_data.nova_poshta_street' => 'Улица',
        'shipping_data.nova_poshta_selected_street' => 'Улица',
        'shipping_data.nova_poshta_warehouse' => 'Отделение',
        'shipping_data.house' => 'Дом',
        'shipping_data.entrance' => 'Подъезд',
        'shipping_data.floor' => 'Этаж',
        'shipping_data.apartment' => 'Квартира / Офис',
        'new_price' => 'Новая цена',
        'link' => 'Ссылка',
        'client_type' => 'Тип клиента',
        'fiscal_code' => 'Фискальный код',
        'registerData.name' => 'Имя',
        'registerData.last_name' => 'Фамилия',
        'registerData.phone' => 'Телефон',
        'registerData.password' => 'Пароль',
        'registerData.password_confirmation' => 'Подтверждение пароля',
        'registerData.terms' => 'Условия',
        'loginData.email_phone' => 'E-mail или Teлефон',
        'loginData.password' => 'Пароль',
        'loan_data.loan_period' => 'Период кредита',
        'loan_data.loan_amount' => 'Сумма кредита',
        'loan_data.first_repayment' => 'Первая выплата',
        'loan_data.idnp' => 'Фискальный код',
        'loan_data.birth_date' => 'День рождения',
        'loan_data.first_name' => 'Имя',
        'loan_data.last_name' => 'Фамилия',
        'loan_data.passport_id' => 'Номер паспорта',
        'loan_data.phone' => 'Телефон',
        'loan_data.loan_town' => 'Город',
        'loan_data.loan_street' => 'Улица',
        'loan_data.loan_house' => 'Дом',
        'loan_data.loan_apartment' => 'Квартира',
        'loan_data.dwelling_type' => 'Тип жилья',
        'loan_data.contact_name' => 'Имя контактного лица',
        'loan_data.contact_surname' => 'Фамилия контактного лица',
        'loan_data.contact_phone' => 'Номер телефона контактного лица',
        'loan_data.loan_terms' => 'Условия сайта',
        'review' => 'Комментарий',
        'pros' => 'Достоинства',
        'cons' => 'Недостатки',
        'promo_code' => 'Промо код',
        'order_total' => 'Сумма заказа',
        'credit_months' => 'Период кредита'
    ]
];
