# ✈️ CRUD de Gestión Aeronáutica

[![PHP](https://img.shields.io/badge/PHP-8.2%2B-777BB4?logo=php)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.0%2B-4479A1?logo=mysql)](https://mysql.com)
[![MVC](https://img.shields.io/badge/Architecture-MVC-00C7B7)](https://es.wikipedia.org/wiki/Modelo–vista–controlador)

Sistema web para administrar registros de aviones con operaciones CRUD completas, desarrollado bajo arquitectura MVC.

## 📑 Tabla de Contenidos
1. [Características](#-características)
2. [Requisitos Técnicos](#-requisitos-técnicos)
3. [Instalación de XAMPP](#-instalación-de-xampp)
4. [Configuración de Base de Datos](#-configuración-de-base-de-datos)
5. [Estructura del Proyecto](#-estructura-del-proyecto)
6. [Uso del Sistema](#-uso-del-sistema)
7. [Tecnologías Implementadas](#-tecnologías-implementadas)
8. [Sobre el Desarrollador](#-sobre-el-desarrollador)
9. [Referencias Técnicas](#-referencias-técnicas)

## 🚀 Características
- Registro de aviones comerciales y privados
- Interfaz responsive con Bootstrap
- Validación de datos en frontend y backend
- Sistema de confirmación para eliminaciones
- 10 registros iniciales con datos realistas

**Datos de ejemplo:**
```sql
('Airbus', 'A380', 'Emirates'),
('Boeing', '787 Dreamliner', 'Qatar Airways'),
('Cessna', 'Citation X', 'Jeff Bezos (Privado)')
💻 Requisitos Técnicos
Windows 10/11 (64-bit) o Linux

XAMPP 8.2+ (Descargar)

1 GB RAM mínimo

Navegador moderno (Chrome, Firefox, Edge)

📥 Instalación de XAMPP
Descargar instalador desde Apache Friends

Ejecutar con permisos de administrador:

bash
Copy
xampp-windows-x64-8.2.12-0-VS16-installer.exe
Seleccionar componentes esenciales:

Copy
☑ Apache
☑ MySQL
☑ PHP
☑ phpMyAdmin
Instalar en directorio predeterminado (C:\xampp)

Iniciar servicios:

bash
Copy
# Panel de Control XAMPP
▶ Iniciar módulo Apache
▶ Iniciar módulo MySQL
🗃️ Configuración de Base de Datos
Crear base de datos:

sql
Copy
CREATE DATABASE flota_aerea 
CHARACTER SET utf8mb4 
COLLATE utf8mb4_spanish_ci;
Importar estructura y datos iniciales:

bash
Copy
mysql -u root flota_aerea < database/aviones.sql
Configurar conexión en config/database.php:

php
Copy
<?php
define('DB_HOST', '127.0.0.1');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'flota_aerea');
📂 Estructura del Proyecto
bash
Copy
aviones-crud/
├── app/
│   ├── controllers/      # Lógica de operaciones
│   ├── models/           # Consultas SQL
│   ├── views/            # Interfaces de usuario
│   └── core/             # Bibliotecas base
├── public/
│   ├── assets/           # CSS/JS/Imágenes
│   └── index.php         # Punto de entrada
└── database/
    └── aviones.sql       # Esquema inicial
🕹️ Uso del Sistema
Operación	URL	Método HTTP
Listar	/aviones	GET
Crear	/aviones/crear	POST
Editar	/aviones/editar/5	PUT
Eliminar	/aviones/eliminar/3	DELETE
Acceso inicial:

Copy
http://localhost/aviones-crud/public/
🛠️ Tecnologías Implementadas
Frontend:
Bootstrap
jQuery

Backend:
PHP
MySQLi

Herramientas:
XAMPP
Git

👨💻 Sobre el Desarrollador
Ing. [Tu Nombre]
Ingeniero en Sistemas Computacionales especializado en desarrollo web full-stack.

🎯 Habilidades Técnicas
Arquitecturas MVC y Microservicios

Desarrollo de APIs RESTful

Sistemas de autenticación JWT

Optimización de bases de datos relacionales

💡 Proyectos Destacados
Sistema de reservas para aerolínea (PHP/Laravel)

Plataforma de tracking de vuelos en tiempo real (Node.js/Socket.io)

Aplicación móvil para gestión de mantenimiento aeronáutico (React Native)

🌐 Tecnologías Favoritas
python
Copy
tecnologias = {
    "frontend": ["React", "Vue.js", "Tailwind CSS"],
    "backend": ["Laravel", "Django", "Node.js"],
    "databases": ["MySQL", "PostgreSQL", "MongoDB"],
    "devops": ["Docker", "AWS", "Jenkins"]
}
📫 Conéctate Conmigo
LinkedIn
GitHub
Portafolio

diff
Copy
+ "La innovación distingue a los líderes de los seguidores." 
+ - Steve Jobs
📚 Referencias Técnicas
Documentación Oficial PHP

MySQLi Prepared Statements

Configuración Apache para MVC

Buenas Prácticas CRUD

XAMPP Troubleshooting Guide

⬆️ Volver al inicio

