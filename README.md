<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.


## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).


## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).


# Modernización del Sistema de Gestión de Proyectos para Tech Solutions

Tech Solutions ha decidido modernizar su sistema de gestión de proyectos. A continuación se describen los requerimientos y tareas para esta modernización:

## Requerimientos

### Rutas API

1. **Registro de Usuario**
2. **Inicio de Sesión de Usuario**

### Controladores

Generar los siguientes controladores para conectar las rutas con los modelos:

1. **Controlador de Autenticación**
   - **Función de Registro de Usuario:** Implementar cifrado de la clave.
   - **Función de Inicio de Sesión:** Devolver un JWT si las credenciales son correctas.

### Modelos

Generar los siguientes modelos con datos estáticos:

1. **Usuario**
   - `Id`
   - `Nombre`
   - `Correo` (Identificador Único)
   - `Clave`

2. **Proyecto (Actualizar)**
   - `Id`
   - `Nombre`
   - `Fecha de Inicio`
   - `Estado`
   - `Responsable`
   - `Monto`
   - `created_by` (Debería ser el Id del usuario)

### Vistas

Construir las siguientes vistas con estilos básicos para mostrar la información retornada por el controlador:

1. **Inicio de Sesión**
2. **Registro**

### Middleware

Generar un middleware que valide si el usuario está autenticado o no mediante un JWT.

