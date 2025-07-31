Realizado 30/07/2025
# ♻️ API - Bodega de Reciclaje El Paisita

Este proyecto implementa una API RESTful desarrollada en PHP y MySQL para gestionar productos reciclables en la Bodega *El Paisita*. Permite registrar, consultar y administrar información de productos a través de endpoints probados con Postman.

##  Características

- Conexión a base de datos MySQL
- Endpoints GET y POST para la tabla `productos`
- Validación básica de entrada
- Mensajes en formato JSON
- Control de errores
- Proyecto estructurado por carpetas (config, controllers, routes)
- Listo para pruebas con Postman

##  Requisitos

- PHP 7.4 o superior
- Servidor local (XAMPP, WAMP o similar)
- MySQL (puerto 3307 si aplica)
- Postman (para pruebas)

##  Instalación y uso

1. Clona el repositorio:
   ```bash
   git clone https://github.com/elispag14/api-el-paisita
   ```

2. Importa la base de datos `bodega_reciclajedb` en phpMyAdmin.

3. Verifica o edita el archivo `config/conexion.php` con tu configuración:
   ```php
   $conexion = new mysqli("localhost", "root", "root", "bodega_reciclajedb", 3307);
   ```

4. Ejecuta el servidor local y accede a los endpoints desde Postman o el navegador.

## 📂 Estructura del proyecto

```
api-el-paisita/
│
├── config/
│   └── conexion.php
│
├── controllers/
│   └── productoController.php
│
├── routes/
│   └── producto.php
│
└── index.php
```

## Endpoints disponibles

- `GET /routes/producto.php`  
  Obtiene todos los productos registrados.

- `POST /routes/producto.php`  
  Registra un nuevo producto.  
  **Cuerpo JSON de ejemplo:**
  ```json
  {
    "nombre": "Vidrio Verde",
    "tipo": "Vidrio",
    "cantidad": 10,
    "unidad": "Kg"
  }
  ```

##  Documentación

Cada servicio ha sido documentado en cuanto a:
- Método (GET, POST)
- Ruta
- Parámetros requeridos
- Estructura de respuesta
- Posibles errores

## 👩‍💻 Autor

Eliana Paola Giraldo  
SENA – Tecnólogo en Análisis y Desarrollo de Software
