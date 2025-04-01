# ✈️ Sistema CRUD de Gestión de Aviones con MVC

[![PHP](https://img.shields.io/badge/PHP-8.2%2B-777BB4?logo=php)](https://php.net)
[![MySQL](https://img.shields.io/badge/MySQL-8.0%2B-4479A1?logo=mysql)](https://mysql.com)
[![MVC](https://img.shields.io/badge/Architecture-MVC-00C7B7)](https://es.wikipedia.org/wiki/Modelo–vista–controlador)

## 📑 Tabla de Contenidos
1. [Descripción del Sistema](#-descripción-del-sistema)
2. [Instalación de XAMPP](#-instalación-de-xampp)
3. [Configuración de Base de Datos](#-configuración-de-base-de-datos)
4. [Estructura del Proyecto](#-estructura-del-proyecto)
5. [Funcionamiento de URLs](#-funcionamiento-de-urls)
6. [Operaciones CRUD](#-operaciones-crud)
7. [Solución de Problemas](#-solución-de-problemas)
8. [Sobre el Desarrollador](#-sobre-el-desarrollador)
9. [Referencias Técnicas](#-referencias-técnicas)

---

## 🚩 Descripción del Sistema
Aplicación web para gestión aeronáutica con:
```bash
✅ Arquitectura MVC en 3 capas
✅ URLs semánticas protegidas
✅ Base de datos con 10 registros realistas
✅ Sistema CRUD completo (Create, Read, Update, Delete)
Características Principales
Registros Iniciales:

sql
Copy
('Boeing', '747-8', 'Lufthansa'),
('Airbus', 'A320neo', 'American Airlines'),
('Cessna', '172 Skyhawk', 'John Smith (Privado)')
Interfaz Tabular:

Visualización de marca, modelo y propietario

Botones de acción para editar/eliminar

Formulario de alta con validación

Flujo MVC:

Cliente solicita recurso vía URL

Controlador procesa la petición

Modelo interactúa con MySQL

Vista renderiza el resultado


```
## 💻 Instalación de XAMPP

Aplicación web para gestión aeronáutica con:
```

Requisitos Mínimos
bash
Copy
🖥️ Windows 7+ (64-bit) o Linux
💾 500 MB espacio libre
🔧 Permisos de administrador
Pasos de Instalación
Descargar instalador desde Apache Friends

Ejecutar con configuración recomendada:

bash
Copy
xampp-windows-x64-8.2.12-0-VS16-installer.exe
Seleccionar componentes esenciales:

Copy
☑ Apache   ☑ MySQL
☑ PHP      ☑ phpMyAdmin
Iniciar servicios desde el Panel de Control:

bash
Copy
▶ Iniciar módulo Apache
▶ Iniciar módulo MySQL


```
## 🗃️ Configuración de Base de Datos
```

1. Crear Base de Datos
Método 1 - phpMyAdmin:

Acceder a http://localhost/phpmyadmin

Crear nueva BD:

sql
Copy
Nombre: anagar
Collation: utf8mb4_general_ci
Método 2 - Consola:

bash
Copy
mysql -u root -e "CREATE DATABASE anagar CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;"
2. Importar Datos Iniciales
bash
Copy
mysql -u root anagar < C:\xampp\htdocs\Crud\database\aviones.sql
Estructura de la Tabla:

sql
Copy
CREATE TABLE aviones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR(50) NOT NULL,
    modelo VARCHAR(30) NOT NULL,
    propietario VARCHAR(100) NOT NULL
);
3. Configurar Conexión
Editar app/libs/MySQLdb.php:

php
Copy
private $host = "127.0.0.1";
private $usuario = "root";
private $clave = ""; 
private $db = "anagar";


```
## 📂 Estructura del Proyecto

```

Crud/
├── .htaccess           # Configuración global
├── app/
│   ├── controladores/  # Lógica de operaciones
│   │   └─ Aviones.php
│   ├── modelos/        # Consultas SQL
│   │   └─ AvionesModelo.php
│   ├── vistas/         # Interfaz usuario
│   │   ├─ aviones/
│   │   │   ├─ alta.php
│   │   │   ├─ editar.php
│   │   │   └─ lista.php
│   └── libs/           # Bibliotecas core
└── public/
    └── index.php       # Punto de entrada

```
##🔗 Funcionamiento de URLs
```
Transformación de Rutas
bash

Original: http://localhost/Crud/aviones/editar/5
Transformada: http://localhost/Crud/public/index.php?url=aviones/editar/5
Configuración .htaccess
apache

<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /Crud/public
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]
</IfModule>


```
##🛠️ Operaciones CRUD

```


Acción	URL Ejemplo	Método HTTP
Listar	/aviones	GET
Crear	/aviones/alta	POST
Editar	/aviones/editar/5	PUT
Eliminar	/aviones/borrar/3	DELETE
Interfaz de Usuario:

✏️ Editar: Icono de lápiz

🗑️ Eliminar: Icono de basura (con confirmación)

➕ Nuevo: Botón "Agregar Avión"
```
##🚨 Solución de Problemas
```


Error	Solución	Referencia
403 Forbidden	Verificar permisos en .htaccess	Apache Permisos
Conexión BD fallida	Revisar credenciales en MySQLdb.php	MySQLi Docs
URLs no funcionan	Habilitar módulo mod_rewrite	Guía XAMPP


```

##👨💻 Sobre el Desarrollador
```
## 👨💻 Sobre el Desarrollador  
**Israel Harder**  
*Programador Full-Stack especializado en diseño web*

### 💻 Habilidades Aplicadas en este Proyecto  
```javascript
const skills = {
    frontend: ["CSS3", "HTML5", "Responsive Design"],
    backend: ["PHP", "MySQL", "Arquitectura MVC"],
    herramientas: ["XAMPP", "phpMyAdmin", "Git"],
    metodologías: ["Clean Code", "POO", "Rutas RESTful"]
};
🛠️ Experiencia Demostrada
Implementación profesional de MVC:

Modelos: Consultas SQL preparadas

Vistas: Interfaz intuitiva con CSS personalizado

Controladores: Lógica de negocio eficiente

Diseño de base de datos relacional optimizada

Desarrollo de sistema CRUD completo con seguridad integrada

📬 Contáctame
Email
Colaboraciones y propuestas profesionales:
✉️ israelharder@gmail.com

diff
Copy
+ "El arte de programar consiste en transformar problemas complejos en soluciones elegantes"
+ - Mi filosofía de desarrollo
