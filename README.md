# Join.To.IT решение тестового задания

## Задание
Реализовать проект на Laravel 5.5 интеграцию данной темплитки https://github.com/BlackrockDigital/startbootstrap-sb-admin .
требования:
1) Аутентификация (авторизация/регистрация)
2) Страницы - заглушки (контроллеры и рутинги) + добавление их в Sidebar (левое меню) + реализация перелинковки:
 - Dashboard
 - Charts
 - Tables
 - Components
 - - Navbar
 - - Cards
3) Дизайн страниц логина, регистрации и востановления пароля - login.html, register.html и forgot-password.html соотвественно. Все имэйлы через систему https://mailtrap.io/ 
4) 4 типа юзеров 
супер админ - имеет доступ на все страницы из меню
админ - имеет доступ на dasboards, charts, components
менеджер - имеет доступ на tables
пользователи - имеет доступ на components.
5)- Добавить страницу Map, где у супер админа и админа есть возможность добавлять на Google Map неограниченное количество маркеров по введеному адресу . (Интеграция google maps api)

Результаты выложить на гит-хаб и предоставить логины для всех типов ролей юзеров

## решение

данный репозиторий содержит вариант решения данного задания

### установка

* в .env файле указать данные для подключения к базе
* в .env файле в переменной MAP_API_KEY указать google map api
* в .env файле указать логин и пароль maildrop.io
* composer install 
* php artisan migrate --seed

#### пользователи

 * роль superadmin, email superadmin@example.org, пароль secret
 * роль admin, email admin@example.org, пароль secret
 * роль manager, email manager@example.org, пароль secret
 * роль user, email user@example.org, пароль secret
