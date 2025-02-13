# Priki

Priki is a project for ES dev technician formation, in the context of the module PRW2.

![GitHub tag (latest SemVer)](https://img.shields.io/github/v/tag/yannickcpnv/Priki?label=Version)

## Demo

https://github.com/user-attachments/assets/9526c2d8-dcdb-4c16-bea4-5794845818c8

https://github.com/user-attachments/assets/0c7dee8f-a269-46cb-9f7d-bf1e39d75e75

## Requirements

| Tools                                         | Version           |
|-----------------------------------------------|-------------------|
| [PHP](https://www.php.net/downloads.php)      | 8.0.10            |
| [Composer](https://getcomposer.org/download/) | 2.1.9             |
| [MariaDB](https://mariadb.org/download/)      | 10.5.9-MariaDB    |
| [Npm](https://nodejs.org/en/download/)        | 8.3.0             |

_You can use the MySQL version equivalent instead of MariaDb._

## Dependencies

This is a Laravel project, so there is a lot of them from Laravel that you can see in the `composer.json` file.

Other dependencies that was manually added can be found in files :

- `composer.json` for composer.
- `package.json` for npm.

## Installation

1. `git clone https://github.com/yannickcpnv/Priki.git && cd Priki`
2. `composer setup`
3. The new `.env` file is a copy of `.env.example`. Change it for you needs, specially the variables `DB_*`.
4. When you update the file, create the database for the project. The name need to be the same as mentioned in
   the `.env`
   file.
5. `composer m:f-s`

_This is a Laravel project, so you can still use all php artisan commands._

You will now have all the dependencies installed, the public files compiled and a database with some data.

## Usage

To run the server locally.

```shell
composer serve
```

To compile files with webpack.

```shell
npm run dev
or
npm run watch
```

## Test

There is no test for the moment.
