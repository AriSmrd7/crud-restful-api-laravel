
# Laravel CRUD Restful API - Ari Sumardi
## Surplus Indonesia Challenge

Sistem ini merupakan sebuah Restful API menggunakan bahasa pemrograman PHP dengan Framework Laravel versi 9.

## Database
You can download MySQL database file [from here](https://drive.google.com/file/d/1OpInOvcx216u7gUnTyTz6j7M6cF2kjiS/view?usp=share_link)

## Postman Collection
You can download Postman Collection [from here](https://drive.google.com/file/d/1CF1M94Hjvp33s0zWxQjmeuJ75x3qVMsG/view?usp=share_link)

## Installation

Clone this repository

```bash
  git clone https://github.com/AriSmrd7/crud-restful-api-laravel.git
```
Create copy .env file 

```bash
  cp .env.example .env
```
Generate app encryption key 

```bash
  php artisan key:generate
```
Create database migration 

```bash
  php artisan migrate
```
Add database seeder 

```bash
  php artisan db:seed
```
Run Server and test on Postman

```bash
  php artisan server
```