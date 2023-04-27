<h1>Como configurar este proyecto</h1>
<h3>Configura un servidor y Nginx para que sirva la aplicación Laravel en el puerto 80</h3>
<p>Descarga e instala Laragon desde su sitio web oficial.
<br/>
Crea un nuevo proyecto Laravel en la carpeta de proyectos de Laragon. Abre Laragon y haz clic en "Menú" y luego en "Nuevo proyecto Laravel".
<br/>
Abre el archivo nginx.conf de Nginx. Puedes hacerlo haciendo clic en el botón "Menú" en Laragon y luego en "Nginx" y "nginx.conf". Asegúrate de tener permisos de administrador para editar este archivo.
<br/>
Agrega el siguiente código dentro del bloque server</p>

<textarea>listen 80;
server_name mylaravelapp.test; # Cambia esto por el nombre de tu aplicación
root "C:/laragon/www/mylaravelapp/public"; # Cambia esto por la ruta a la carpeta public de tu aplicación
index index.php;

location / {
try_files $uri $uri/ /index.php?$query_string;
}

location ~ \.php$ {
try_files $uri =404;
fastcgi_pass 127.0.0.1:9000; # Si usas otra versión de PHP o configuraste el puerto de escucha, cambia esto
fastcgi_index index.php;
fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
include fastcgi_params;
}
</textarea>

<p>Guarda el archivo y reinicia Nginx desde el menú de Laragon.

Agrega la entrada en el archivo hosts de tu sistema operativo.<br/>
Puedes hacerlo agregando la siguiente línea al archivo C:\Windows\System32\drivers\etc\hosts:<strong>127.0.0.1 imagine_app.test</strong> 
<br/>
Con estos pasos deberías tener configurado un servidor y Nginx para que sirva la aplicación Laravel en el puerto 80 en Laragon Windows.
<br/>
Ejecuta: <strong>composer install</strong>
<br/>
Para los estilos puedes usar bootstrap:
Asegúrate de tener instalado NPM en tu máquina.
<br/>
Instala Bootstrap utilizando NPM ejecutando el siguiente comando en tu terminal: npm install bootstrap
<br/>
Configura Laravel Mix para compilar los estilos de Bootstrap. Para ello, abre el archivo webpack.mix.js en la raíz de tu proyecto y agrega la siguiente línea al final del archivo: <strong>mix.sass('resources/sass/app.scss', 'public/css');</strong>
<br/>
Crea un archivo app.scss en el directorio resources/sass/ con el siguiente contenido:
<br/>
<strong>@import '~bootstrap/scss/bootstrap';</strong>
<br/>
Compila los estilos de tu proyecto ejecutando <strong>npm run dev</strong> o <strong>npm run watch</strong> en la terminal.
</p>


