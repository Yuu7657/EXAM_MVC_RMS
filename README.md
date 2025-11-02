# 🧮 EXAM_MVC_RMS

Proyecto desarrollado en **PHP** utilizando la arquitectura **MVC (Modelo - Vista - Controlador)**.  
Este sistema implementa operaciones básicas de gestión de usuarios, aplicando separación de responsabilidades y diseño modular para mejorar el mantenimiento y escalabilidad del código.

---

## 🚀 Descripción general

**EXAM_MVC_RMS** es una aplicación web estructurada para demostrar el uso práctico del patrón **MVC**, donde:
- 📄 **Model** gestiona la conexión y operaciones con la base de datos.  
- ⚙️ **Controller** maneja la lógica de negocio y comunicación entre vistas y modelos.  
- 🎨 **View** se encarga de mostrar la información al usuario (formularios, tablas, etc.).

Este proyecto sirve como **ejemplo académico** y base para construir sistemas CRUD o de administración más complejos en PHP.

---

## 🧩 Características principales

- ✅ Arquitectura MVC implementada desde cero.  
- ✏️ Módulos para **crear, editar, eliminar y listar** usuarios.  
- 🔄 Comunicación entre vistas y controladores mediante métodos encapsulados.  
- 📦 Estructura limpia y reutilizable.  
- 💻 Interfaz sencilla y funcional.

---

## 🧱 Estructura del proyecto
EXAM_MVC_RMS/
│
├── Controller/
│ └── controller.php → Controlador principal del sistema
│
├── Model/
│ └── model.php → Lógica y conexión con la base de datos
│
├── View/
│ ├── editar.php → Formulario para editar usuarios
│ ├── listar.php → Muestra lista de usuarios
│ ├── registro.php → Formulario de registro
│ └── otros archivos de vista
│
├── Diseño/ → Recursos visuales o plantillas de interfaz
│
├── index.php → Punto de entrada principal del sistema
└── README.md → Documentación del proyecto

---

## ⚙️ Tecnologías utilizadas

| Componente | Descripción |
|-------------|-------------|
| **Lenguaje:** | PHP |
| **Arquitectura:** | MVC (Modelo-Vista-Controlador) |
| **Frontend:** | HTML5, CSS3 |
| **Servidor local:** | XAMPP / WAMP |
| **Base de datos (opcional):** | MySQL |

---

## 💻 Ejemplo de vista: `editar.php`

```php
<h1>Editar Usuario</h1>
<form method="post">
  <?php
    require_once "Controller/controller.php";
    $mvc = new MVCController();
    $mvc->editarDatosUsuarioController();
  ?>
</form>

<?php
  require_once "Controller/controller.php";
  $mvc = new MVCController();
  $mvc->actualizarDatosUsuarioController();
?>
📦 Instalación y ejecución

Instala XAMPP o WAMP en tu equipo.

Copia la carpeta del proyecto dentro de:

C:\xampp\htdocs\


Inicia Apache desde el panel de control de XAMPP.

Abre tu navegador y accede a:

http://localhost/EXAM_MVC_RMS/

🧠 Concepto clave: Patrón MVC

El patrón Modelo-Vista-Controlador permite separar:

Modelo (Model): acceso y gestión de datos.

Vista (View): interfaz de usuario.

Controlador (Controller): lógica de negocio y flujo de la aplicación.

Esta separación facilita el mantenimiento y escalabilidad del sistema.

👨‍💻 Autor

Ricardo Mejía Santillán
Ingeniero en Desarrollo y Gestión de Software
📍 UTOM — Universidad Tecnológica del Oriente de Michoacán

💼 GitHub

🧾 Licencia
Este proyecto está bajo la licencia MIT.
Eres libre de usarlo, modificarlo y distribuirlo con atribución adecuada.

