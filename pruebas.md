<p align="center">
  <img src="https://docs.nestjs.com/assets/logo-small.svg" alt="NestJS Icon" width="100"/>
</p>

<h1 align="center"><b>Documentación para la generación y definición de la estructura de proyecto en APIs con base de datos no relacionales (MongoDB) bajo la tecnología NestJs</b></h1>

## Introducción

Este documento tiene como objetivo establecer los lineamientos para la generación y definición de la estructura de proyecto en APIs con base de datos no relacionales (MongoDB) bajo la tecnología NestJs. Se detallan las subtareas necesarias para la creación de una API robusta y escalable.

### 1. Generación del API (Uso del CLI)

#### Creación del proyecto NestJs:

- Utilizar el comando `nest new` para crear un nuevo proyecto NestJs.
- Seleccionar la opción "TypeScript" como lenguaje de programación.
- Elegir la opción "No" para la configuración de ORM (Object-Relational Mapping) ya que se utilizará MongoDB.

#### Instalación de dependencias:

- Instalar las dependencias necesarias para trabajar con MongoDB en NestJs, como `mongoose` y `@nestjs/mongoose`.
