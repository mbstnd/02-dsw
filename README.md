<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
<hr>

# Modernización del Sistema de Gestión de Proyectos para Tech Solutions

Tech Solutions ha decidido modernizar su sistema de gestión de proyectos. A continuación se detallan los requerimientos y tareas para esta modernización:

## Requerimientos

### Rutas API

1. **Registro de Usuario**
2. **Inicio de Sesión de Usuario**

### Controladores

Generar los siguientes controladores para conectar las rutas con los modelos:

1. **Controlador de Autenticación**
   - **Función de Registro de Usuario:** Implementar cifrado de la contraseña.
   - **Función de Inicio de Sesión:** Devolver un JWT si las credenciales son correctas.

### Modelos

Generar los siguientes modelos con datos estáticos:

1. **Usuario**
   - `Id`
   - `Nombre`
   - `Correo` (Identificador Único)
   - `Contraseña`

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
