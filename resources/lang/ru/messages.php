<?php

return [

    'lang' => 'Русский',

    'date' => [
        'default' => 'F j, Y',
        'full' => 'F j, Y \a\t g:i A',
        'compact' => 'm/d/Y \a\t g:i A',
    ],

    'nav' => [
        'toggle' => 'Переключить навигацию',
        'profile' => 'Профиль',
        'admin' => 'Панель администратора',
    ],

    'actions' => [
        'add' => 'Добавить',
        'show' => 'Показать',
        'create' => 'Создать',
        'close' => 'Закрыть',
        'edit' => 'Редактировать',
        'update' => 'Обновить',
        'delete' => 'Удалить',
        'save' => 'Сохранить',
        'continue' => 'Продолжить',
        'browse' => 'Просмотреть',
        'choose_file' => 'Выбрать файл',
        'download' => 'Скачать',
        'install' => 'Установить',
        'upload' => 'Загрузить',
        'cancel' => 'Отменить',
        'enable' => 'Включить',
        'disable' => 'Отключить',
        'copy' => 'Копировать',
        'comment' => 'Комментировать',
        'search' => 'Искать',
        'send' => 'Отправить',
        'reload' => 'Перезагрузить',
        'refresh' => 'Обновить',
        'duplicate' => 'Дублировать',
        'remove' => 'Удалить',
        'back' => 'Назад',
    ],

    'fields' => [
        'name' => 'Название',
        'title' => 'Заголовок',
        'action' => 'Действие',
        'date' => 'Дата',
        'slug' => 'Ссылка',
        'link' => 'Ссылка',
        'enabled' => 'Включено',
        'author' => 'Автор',
        'user' => 'Пользователь',
        'image' => 'Изображение',
        'type' => 'Тип',
        'file' => 'Файл',
        'description' => 'Описание',
        'short_description' => 'Краткое описание',
        'content' => 'Содержание',
        'role' => 'Роль',
        'quantity' => 'Количество',
        'money' => 'Деньги',
        'color' => 'Цвет',
        'url' => 'URL',
        'status' => 'Статус',
        'category' => 'Категория',
        'version' => 'Версия',
        'game' => 'Игра',
        'price' => 'Цена',
        'icon' => 'Иконка',
        'server' => 'Сервер',
        'value' => 'Значение',
        'published_at' => 'Опубликовано',
        'permissions' => 'Права',
        'address' => 'Адрес',
        'port' => 'Порт',
    ],

    'status' => [
        'success' => 'Действие успешно завершено!',
        'error' => 'Произошла ошибка: :error',
    ],

    'range' => [
        'days' => 'По дням',
        'months' => 'По месяцам',
    ],

    'loading' => 'Загрузка...',

    'yes' => 'Да',
    'no' => 'Нет',
    'unknown' => 'Неизвестный(е)',
    'other' => 'Другое',
    'none' => 'Ни одного',
    'copied' => 'Скопировано',
    'icons' => 'Вы можете найти список доступных иконок на <a href="https://icons.getbootstrap.com/" target="_blank" rel="noopener noreferrer">Bootstrap Icons</a>.',

    'home' => 'Главная',
    'servers' => 'Серверы',
    'news' => 'Новости',
    'welcome' => 'Добро пожаловать на :name',
    'copyright' => 'Работает на <a href="https://azuriom.com" target="_blank" rel="noopener noreferrer">Azuriom</a>.',

    'maintenance' => [
        'title' => 'Техническое обслуживание',
        'message' => 'В настоящее время сайт находится на техобслуживании.',
    ],

    'theme' => [
        'light' => 'Светлая тема',
        'dark' => 'Темная тема',
    ],

    'captcha' => 'Проверка капчи не удалась, пожалуйста, попробуйте ещё раз.',

    'notifications' => [
        'notifications' => 'Уведомления',
        'read' => 'Отметить как прочитанное',
        'empty' => 'У вас нет непрочитанных уведомлений.',
    ],

    'clipboard' => [
        'copied' => 'Скопировано!',
        'error' => 'CTRL + C для копирования',
    ],

    'server' => [
        'join' => 'Подключиться',
        'total' => ':count/:max игрок|:count/:max игроков онлайн',
        'online' => ':count игрок в сети|:count игроков в сети',
        'offline' => 'Сервер в настоящее время отключен.',
    ],

    'profile' => [
        'title' => 'Мой профиль',
        'change_email' => 'Изменить email-адрес',
        'change_password' => 'Изменить пароль',

        'email_verification' => 'Ваш email не подтверждён, проверьте вашу почту и подтвердите её по ссылке в письме.',
        'updated' => 'Ваш профиль был обновлён.',

        'info' => [
            'role' => 'Роль: :role',
            'register' => 'Зарегистрирован: :date',
            'money' => 'Деньги: :money',
            '2fa' => 'Двухфакторная аутентификация (2FA): :2fa',
        ],

        '2fa' => [
            'enable' => 'Включить 2FA',
            'disable' => 'Отключить 2FA',
            'manage' => 'Управление 2FA',
            'info' => 'Отсканируйте QR-код выше с помощью приложения для двухфакторной аутентификации на вашем телефоне, такого как Authy или Google Authenticator.',
            'secret' => 'Секретный ключ: :secret',
            'title' => 'Двухфакторная аутентификация',
            'codes' => 'Показать коды восстановления',
            'code' => 'Код',
            'enabled' => 'Двухфакторная аутентификация включена. Не забудьте сохранить ваши коды восстановления!',
            'disabled' => 'Двухфакторная аутентификация отключена.',
        ],

        'money_transfer' => [
            'title' => 'Перевод',
            'self' => 'Вы не можете отправить перевод самому себе.',
            'balance' => 'У вас недостаточно денег для перевода.',
            'success' => 'Перевод отправлен.',
            'notification' => ':user отправил вам :money.',
        ],
    ],

    'posts' => [
        'posts' => 'Посты',
        'posted' => 'Опубликован :date :user',
        'unpublished' => 'Этот пост ещё не опубликован.',
        'read' => 'Подробнее',
    ],

    'comments' => [
        'create' => 'Прокомментировать',
        'guest' => 'Вы должны войти, чтобы оставить комментарий.',
        'author' => '<strong>:user</strong> прокомментировал(а) :date',
        'content' => 'Ваш комментарий',
        'delete' => 'Удалить?',
        'delete_confirm' => 'Вы уверены, что хотите удалить этот комментарий?',
    ],

    'likes' => 'Лайки: :count',
];
