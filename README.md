# Proyecto PHP: Fundamentos

## Materia
Programación Web

## Integrantes del equipo

- Paola Kasumy Gómez Sánchez
- Christian Eduardo Rosales González
- Brandon Eilio Hernández Aguilar

## Descripción
Sitio web dinámico desarrollado en PHP puro que demuestra los fundamentos del lenguaje:
variables, tipos de datos, estructuras de control, bucles, arreglos y manejo de sesiones.
No requiere base de datos ni formularios.

## 🌐 Links
- **Repositorio:** _(agregar URL del repositorio público)_
- **Sitio publicado:** _(agregar URL del hosting)_

## Temas PHP implementados
| Tema | Archivo | Especificación |
|------|---------|----------------|
| Variables y tipos de datos (string, int, float, boolean, array) | `variables.php` | 1, 2 |
| `if`, `elseif`, `else` | `condicionales.php` | 3 |
| `switch` | `condicionales.php` | 4 |
| `for` | `bucles.php` | 5 |
| `while` | `bucles.php` | 6 |
| `foreach` | `bucles.php` | 7 |
| Arreglos indexado y asociativo | `arreglos.php` | 8 |
| Arreglo multidimensional | `arreglos.php` | 9 |
| `session_start()`, `$_SESSION`, `time()`, `session_destroy()` | `index.php`, `header.php`, `sesiones.php` | 10 |

## Funciones PHP usadas
`echo`, `date()`, `count()`, `strlen()`, `round()`, `gettype()`, `var_dump()`,
`implode()`, `array_push()`, `sort()`, `in_array()`, `array_column()`,
`array_sum()`, `max()`, `min()`, `intdiv()`, `time()`, `session_start()`,
`session_destroy()`, `header()`, `htmlspecialchars()`.

## Estructura del proyecto
```
/
├── index.php              ← Inicio de sesión / destrucción de sesión
├── variables.php          ← Variables y tipos de datos (Esp. 1, 2)
├── condicionales.php      ← if/elseif/else y switch (Esp. 3, 4)
├── bucles.php             ← for, while, foreach (Esp. 5, 6, 7)
├── arreglos.php           ← Arreglos (Esp. 8, 9)
├── sesiones.php           ← Sesiones PHP (Esp. 10)
├── css/
│   └── styles.css
├── includes/
│   ├── header.php         ← Encabezado + info de sesión
│   ├── menu.php           ← Menú de navegación
│   └── footer.php         ← Pie de página
└── img/
    └── .gitkeep
```

## Requisitos del servidor
- PHP 7.1 o superior (se usa `intdiv()`)
- Sesiones habilitadas (configuración por defecto en la mayoría de hostings)

## Cómo ejecutarlo localmente
```bash
cd proyecto_php
php -S localhost:8000
```
Luego abre `http://localhost:8000` en el navegador.
