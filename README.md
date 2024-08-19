<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
<hr>


# Desarrollo Software Web - Unidad II

## Grupo Kimera

- **Patricio Ibargaray Alarcón** (71)
- **Mario Quevedo Astudillo** (71)
- **Javier Reumay Ancalaf** (71)
- **Franco Vásquez Fuentes** (70)

## Instrucciones de Instalación y Configuración

### 1. Instalar PHP, Composer y Node.js

### 2. Clonar el Repositorio:
Clona el repositorio con Git y navega al directorio del proyecto:

~~~
git clone https://github.com/mbstnd/02-dsw
cd 02-dsw
~~~

### 3. Instalar dependencias de Composer:
~~~
composer install
~~~

### 4. Instalar dependencias de NodeJS:
~~~
npm install
~~~

### 5. Configurar SQLITE:
Asegúrate de que la variable `DB_CONNECTION` esté configurada para usar SQLite en el archivo `.env`.

~~~
   DB_CONNECTION=sqlite
   DB_DATABASE=database/database.sqlite
~~~

### 6. Migrar Base de Datos:
~~~
php artisan migrate
~~~

### 7. Compilar los Recursos del Frontend:
~~~
npm run dev
~~~

### 8. Levantar servidor de desarrollo:
~~~
php artisan serve
~~~

### 9. Abrir el proyecto en el navegador


### Notas Adicionales:
- Asegúrate de que el archivo `.env` contenga la configuración correcta para `DB_CONNECTION=sqlite`.
- Si encuentras problemas de permisos, ajusta los permisos del archivo `database.sqlite` según sea necesario.
