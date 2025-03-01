# MetFlix

MetFlix is a movie database application built with Laravel. It allows users to browse, search, and view details about various movies.

## Features

- Browse movies by year
- Search for movies by title
- View detailed information about each movie, including title, year, genre, description, directors, actors, and rating
- Integration with The Movie Database (TMDb) and OMDB API for fetching movie data

## Requirements

- PHP ^8.2
- Composer
- Laravel ^11.31
- Node.js and npm

## Installation

1. Clone the repository:
    ```sh
    git clone https://github.com/yourusername/metflix.git
    cd metflix
    ```

2. Install PHP dependencies:
    ```sh
    composer install
    ```

3. Install JavaScript dependencies:
    ```sh
    npm install
    ```

4. Copy the example environment file and configure the environment variables:
    ```sh
    cp .env.example .env
    ```

5. Generate the application key:
    ```sh
    php artisan key:generate
    ```

6. Run the database migrations and seeders:
    ```sh
    php artisan migrate --seed
    ```

7. Start the development server:
    ```sh
    php artisan serve
    ```

## Configuration

### Session Configuration

The session configuration can be found in [`config/session.php`](config/session.php). You can set the `same_site` and `partitioned` options as needed.

### Filesystem Configuration

The filesystem configuration can be found in [`config/filesystems.php`](config/filesystems.php). You can configure the default filesystem disk and other disks such as `local` and `s3`.

## Usage

### Seeding Movies

The `MovieSeeder` class in [`database/seeders/MovieSeeder.php`](database/seeders/MovieSeeder.php) seeds the database with a list of movies from various years.

### Fetching Movie Data

The `UpdateMovies` command in [`app/Console/Commands/UpdateMovies.php`](app/Console/Commands/UpdateMovies.php) fetches movie data from the OMDB API. You can run this command using:
```sh
php artisan movie:update
```

### Viewing Movies

The movie details are displayed using the `movie.blade.php` view in [`resources/views/livewire/movie.blade.php`](resources/views/livewire/movie.blade.php).

### Frequently Asked Questions

The FAQ section is available in the `faqs.blade.php` view in [`resources/views/components/faqs.blade.php`](resources/views/components/faqs.blade.php).

## Contributing

Contributions are welcome! Please open an issue or submit a pull request.

## License

This project is licensed under the MIT License. See the [`LICENSE`](LICENSE) file for details.
