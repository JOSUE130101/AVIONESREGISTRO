LeeMe.txt - CRUD de Aviones con Arquitectura MVC

Crud: Implementación de operaciones CRUD (Create, Read, Update, Delete) para gestión de aviones usando arquitectura MVC.

1. [Antecedentes](#-Antecedentes)
2. [Descripción](#-Descripción)
3. [<cuales>](#-<cuales>)
4. [Ejemplo de registros en BD:
](#-configuración-de-base-de-datos)
5. [Tipos de URLs:
](#Tipos-de-URLs:
)
6. [<donde>](#<donde>)
7. [Tecnologías Implementadas](#-tecnologías-implementadas)
8. [Sobre el Desarrollador](#-sobre-el-desarrollador)
9. [Referencias Técnicas](#-referencias-técnicas)

## Antecedente  
Aplicación web que gestiona registros de aviones con:
- Arquitectura en 3 capas (Modelo-Vista-Controlador)
- Sistema de enrutamiento con URLs amigables
- Base de datos MySQL con 10 registros de ejemplo

# Descripción
<que>
Sistema web para administrar una base de datos de aviones que incluye:
- 10 registros iniciales de aviones comerciales y privados
- Interfaz tabular con marca, modelo y propietario
- Capacidad para modificar/eliminar/añadir aviones
- Persistencia de datos en MySQL

<cuales>
Interacción cliente-servidor:
1. Cliente solicita recurso mediante URL
2. Servidor procesa mediante capas MVC
3. Se renderiza vista correspondiente

Ejemplo de registros en BD:
1. Boeing 747-8 - Lufthansa
2. Airbus A320neo - American Airlines
3. Cessna 172 Skyhawk - John Smith (Privado)
... [10 registros]

Tipos de URLs:
- Genérica: http://localhost/Crud/aviones (Listado completo)
- Especializada: http://localhost/Crud/aviones/borrar/3 (Eliminar avión ID=3)

<donde>
Estructura del proyecto:
```bash
Crud/
├─ .htaccess          # Configuración principal
├─ app/               # Lógica interna
│   ├─ controladores/Aviones.php       # Gestión CRUD
│   ├─ modelos/AvionesModelo.php       # Consultas SQL
│   ├─ vistas/aviones/*.php            # Vistas
│   ├─ libs/          # Bibliotecas de soporte
└─ public/            # Archivos públicos
    └─ index.php      # Punto de entrada

<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /Crud/public
    RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]
</IfModule>
LeeMe.txt - Sistema CRUD de Aviones con MVC

# Contenido
─ Descripción
─ Instalación de XAMPP
─ Configuración de Base de Datos
─ Estructura del Proyecto
─ URLs Amigables (.htaccess)
─ Ejecución
─ Solución de Problemas
─ Glosario
─ Referencias

## Descripción  
Sistema web para gestión de registros aeronáuticos que implementa:  
✅ Arquitectura MVC (Modelo-Vista-Controlador)  
✅ Operaciones CRUD completas (Create, Read, Update, Delete)  
✅ Base de datos MySQL con 10 registros de ejemplo  
✅ URLs semánticas y protegidas  

# Instalación de XAMPP

## Requisitos
- Windows 7+ (64-bit)
- 500 MB espacio libre
- Permisos de administrador

## Pasos de Instalación
1. **Descargar XAMPP**  
   Visitar: [https://www.apachefriends.org/es/index.html](https://www.apachefriends.org/es/index.html)  
   Versión recomendada: **XAMPP 8.2.12 (PHP 8.2.12)**

2. **Ejecutar Instalador**  
   ```bash
   xampp-windows-x64-8.2.12-0-VS16-installer.exe
Componentes obligatorios:
☑ Apache | ☑ MySQL | ☑ PHP | ☑ phpMyAdmin

Directorio de Instalación
Usar ruta predeterminada:
C:\xampp

Iniciar Servicios

Abrir XAMPP Control Panel

Iniciar módulos:
▶ Apache
▶ MySQL

Verificar Instalación
Ingresar en navegador:
http://localhost/dashboard/

Configuración de Base de Datos
1. Crear Base de Datos
Método 1 - phpMyAdmin:

Acceder a: http://localhost/phpmyadmin

Crear nueva BD:

Nombre: anagar

Collation: utf8mb4_general_ci

Método 2 - Consola:

bash
Copy
mysql -u root -e "CREATE DATABASE anagar CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;"
2. Importar Datos Iniciales
Ubicar archivo SQL:
C:\xampp\htdocs\Crud\database\aviones.sql

Ejecutar en consola:

bash
Copy
mysql -u root anagar < C:\xampp\htdocs\Crud\database\aviones.sql
Contenido de aviones.sql:

sql
Copy
CREATE TABLE aviones (
    id INT AUTO_INCREMENT PRIMARY KEY,
    marca VARCHAR(50) NOT NULL,
    modelo VARCHAR(30) NOT NULL,
    propietario VARCHAR(100) NOT NULL
);

INSERT INTO aviones (marca, modelo, propietario) VALUES
('Boeing', '747-8', 'Lufthansa'),
('Airbus', 'A320neo', 'American Airlines'),
('Cessna', '172 Skyhawk', 'John Smith (Privado)'),
('Embraer', 'Phenom 300', 'Microsoft'),
('Bombardier', 'Global 6000', 'Elon Musk (Privado)'),
('Gulfstream', 'G650', 'Gobierno de Emiratos Árabes'),
('Piper', 'PA-28 Cherokee', 'Sarah Johnson (Privado)'),
('Dassault', 'Falcon 7X', 'Amazon'),
('Beechcraft', 'King Air 350', 'Gobierno de Francia'),
('Cirrus', 'SR22', 'Laura Martínez (Privado)');
3. Configurar Conexión
Editar archivo: app\libs\MySQLdb.php

php
Copy
<?php
class MySQLdb {
    private $host = "127.0.0.1";  // Servidor local
    private $usuario = "root";     // Usuario MySQL
    private $clave = "";          // Contraseña (vacía por defecto)
    private $db = "anagar";       // Nombre de la BD
    // ... resto del código
}
Estructura del Proyecto
bash
Copy
Crud/
├─ .htaccess                # Configuración global
├─ app/                     
│   ├─ controladores/       # ▶ Lógica de operaciones
│   │   └─ Aviones.php      #   - Métodos CRUD
│   ├─ modelos/             # ▶ Consultas SQL
│   │   └─ AvionesModelo.php
│   ├─ vistas/              # ▶ Interfaz usuario
│   │   ├─ aviones/         
│   │   │   ├─ alta.php     # Formulario creación
│   │   │   ├─ editar.php   # Formulario edición
│   │   │   └─ lista.php    # Tabla principal
│   ├─ libs/                # ▶ Bibliotecas
│   │   ├─ MySQLdb.php      # Conexión BD
│   │   ├─ Control.php      # Enrutador
│   └─ inicio.php           # Inicialización
└─ public/                  # Recursos públicos
    └─ index.php            # Punto de entrada
URLs Amigables (.htaccess)
Archivo: public/.htaccess
apache
Copy
<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteBase /Crud/public
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]
</IfModule>
Funcionamiento
URL solicitada:
http://localhost/Crud/aviones/editar/5

Se transforma en:
http://localhost/Crud/public/index.php?url=aviones/editar/5

Buenas Prácticas CRUD

XAMPP Troubleshooting Guide

⬆️ Volver al inicio

