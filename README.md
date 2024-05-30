# Ejecución del Proyecto

Este proyecto utiliza Docker para gestionar sus servicios. Asegúrate de tener Docker y Docker Compose instalados en tu máquina antes de seguir estas instrucciones.

## Construcción de las Imágenes

Ejecuta el siguiente comando para construir las imágenes Docker necesarias para este proyecto:

Ejecute `docker-compose build` Para construir las imagenes 
Despues `docker-compose up -d` Para iniciar los contenedores

Migrará algunos registros de prueba en la base de datos. 

Así que aquí están los enlaces configurados actualmente:

backend: `localhost:8000`

frontend: `localhost:4200`

phpmyadmin: `localhost:7000`

mysql: `localhost:3306` 

## Credenciales de acceso MYSQL

| Usuario | Contraseña |
|---------|------------|
| root    | root       |

> :exclamation: **Importante**: Recuerda esperar de 1 a 2 minutos después de iniciar los contenedores.


