# Ecommerce Project

<p align="center">
<a href="https://gitlab.com/ahmed-aliraqi/waggyn/-/commits/master"><img src="https://gitlab.com/ahmed-aliraqi/waggyn/badges/master/pipeline.svg" alt="Build Status"></a>
</p>

## Deploying To Local Server
- Clone the project to your local server using the following command:
    ```bash
    git clone https://gitlab.com/ahmed-aliraqi/waggyn.git
    ```
  > Then enter your own credentials.
- Go to the project path and configure your environment:
    - Copy the `.env.example` file to `.env`:
        ```bash
        cd ./waggyn
    
        cp .env.example .env
        ```
    - Configure database in your `.env` file:
        ```dotenv
        DB_DATABASE=waggyn
        DB_USERNAME=root
        DB_PASSWORD=
        ```
    - Install composer packages using the following command:
        ```bash
        composer install
        ```
    - Generate the project key using the following artisan command:
        ```bash
        php artisan key:generate
        ```
    - Migrate the database tables and dummy data:
        ```bash
        php artisan migrate --seed
        ```
        > After migrating press `Y` to seed dummy data.
    - Run the project in your browser using `artisan serve` command:
        ```bash
        php artisan serve
        ```
    - Go to your browser and visit: [http://localhost:8000](http://localhost:8000)
        - Default Admin  Credentials:
            - **Email:** admin@demo.com
            - **Password:** password
