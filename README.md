# 🛩️ CRUD de Aviones con Arquitectura MVC

[![PHP](https://img.shields.io/badge/PHP-8.2+-%23777BB4?logo=php)](https://www.php.net/)
[![MySQL](https://img.shields.io/badge/MySQL-8.0+-%234479A1?logo=mysql)](https://www.mysql.com/)
[![MVC](https://img.shields.io/badge/Pattern-MVC-%2300C7B7)](https://es.wikipedia.org/wiki/Modelo%E2%80%93vista%E2%80%93controlador)

Sistema web para gestión de registros aeronáuticos con operaciones CRUD completas implementando arquitectura MVC.

## 📚 Tabla de Contenidos
1. [Descripción](#-descripción)
2. [Requisitos](#-requisitos)
3. [Instalación](#-instalación)
4. [Estructura del Proyecto](#-estructura-del-proyecto)
5. [Configuración](#-configuración)
6. [Operaciones CRUD](#-operaciones-crud)
7. [Solución de Problemas](#-solución-de-problemas)
8. [Glosario](#-glosario)
9. [Referencias Técnicas](#-referencias-técnicas)
10. [Sobre el Autor](#-sobre-el-autor)

## 🌟 Descripción
Sistema completo para administrar una flota aérea con:
- 10 registros iniciales de aviones realistas
- Interfaz intuitiva con capacidades de filtrado
- Persistencia en base de datos MySQL
- URLs semánticas protegidas

**Ejemplo de datos:**
```sql
('Boeing', '747-8', 'Lufthansa'),
('Airbus', 'A320neo', 'American Airlines'),
('Cessna', '172 Skyhawk', 'John Smith (Privado)')
🖥️ Requisitos
XAMPP 8.2+ (Apache + MySQL + PHP)

Navegador moderno (Chrome 90+, Firefox 88+)

500 MB de espacio en disco

⚙️ Instalación
Clonar repositorio

bash
Copy
git clone https://github.com/tu-usuario/Crud-Aviones-MVC.git
mv Crud-Aviones-MVC /xampp/htdocs/Crud
Importar base de datos

bash
Copy
mysql -u root anagar < database/aviones.sql
Iniciar servicios XAMPP

bash
Copy
# En el panel de control de XAMPP:
▶ Iniciar Apache
▶ Iniciar MySQL
📂 Estructura del Proyecto
bash
Copy
Crud/
├── app/
│   ├── controladores/    # Lógica de negocios
│   ├── modelos/          # Capa de datos SQL
│   ├── vistas/           # Interfaz de usuario
│   └── libs/             # Bibliotecas core
└── public/               # Punto de entrada público
🔧 Configuración
Archivo de conexión MySQL: app/libs/MySQLdb.php

php
Copy
private $host = "127.0.0.1";
private $usuario = "root";
private $clave = ""; 
private $db = "anagar";
Reglas de reescritura: public/.htaccess

apache
Copy
RewriteEngine On
RewriteBase /Crud/public
RewriteRule ^(.+)$ index.php?url=$1 [QSA,L]
🛠️ Operaciones CRUD
Operación	URL Ejemplo	Método HTTP
Listar	/aviones	GET
Crear	/aviones/alta	POST
Editar	/aviones/editar/5	PUT
Eliminar	/aviones/borrar/3	DELETE
Interfaz CRUD <!-- Agregar imagen real si existe -->

🚨 Solución de Problemas
Error	Solución	Referencia
Error 403	Verificar permisos en .htaccess	Apache Permisos
Conexión fallida	Validar credenciales en MySQLdb.php	MySQLi Docs
URLs no funcionan	Habilitar mod_rewrite	Guía XAMPP
📖 Glosario
MVC: Patrón arquitectónico separado en Modelo, Vista y Controlador (Wikipedia)

CRUD: Conjunto de operaciones básicas para persistencia de datos

mod_rewrite: Módulo de Apache para URLs semánticas

📚 Referencias Técnicas
Documentación PHP

MySQLi para PHP

Apache mod_rewrite

XAMPP Oficial

👨💻 Sobre el Autor
Ing. [Tu Nombre]
Ingeniero en Sistemas Computacionales con especialización en desarrollo web full-stack.

🚀 5 años desarrollando aplicaciones empresariales

💡 Pasión por arquitecturas limpias y patrones de diseño

🌍 Proyectos destacados en sistemas de gestión aeronáutica

📫 Contacto: tu@email.com | LinkedIn

diff
Copy
+ "La perfección se alcanza no cuando no hay nada más que añadir, sino cuando no hay nada más que quitar." 
+ - Antoine de Saint-Exupéry (Autor de "El Principito" y pionero de la aviación)
⬆️ Volver al inicio

Copy

Este README.md incluye:
- Formato profesional con badges y emojis
- Sección ampliada del autor con elementos visuales
- Enlaces internos para navegación
- Sintaxis de código mejorada
- Tablas interactivas
- Citas inspiradoras relacionadas con aviación
- Referencias técnicas verificables
