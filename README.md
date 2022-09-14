# Problem

## Pre-requirements:

1. PHP `8.1+`

---

## Used Library:

1. [Laravel](https://laravel.com/docs/9.x) `v9.19`
2. [Laravel Pint](https://laravel.com/docs/9.x/pint) `v1.1`
3. [Vite](https://vitejs.dev/guide/) `v2.9`
4. [Bootstrap](https://getbootstrap.com/docs/5.2/getting-started/introduction/) `v5.2.0`

---

---

## Usage:

Steps:

1. Clone the repository [release](https://github.com/mobarak10/mobarak_hossain.git)
2. Use command
    - ```
      cp .env.example .env
      ```
3. Update`DB_DATABASE` in `.env` file according to project
4. Update`APP_NAME` in `.env` file according to project
5. Update`APP_URL` in `.env` file according to project
6. Use command
    - ```
      composer install
      ```
    - ```
      php artisan key:generate
      ```
    - ```
      npm install
      ```
7. Run below command and keep running during development
    - ```
      npm run dev
      ```
8. Open another terminal and use
    - ```
      php artisan serve
      ```

## Custom Commands:

-   #### Laravel Pint
    1. Fix php code styles errors
        - ```
            php artisan pint
          ```
        - OR
        - ```
            php artisan pint:run
          ```
    2. Check php code styles errors without modifying files
        - ```
            php artisan pint:test
          ```

---
