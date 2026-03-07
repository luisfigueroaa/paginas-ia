# Paginas Web con IA

Este es un generador de sitios web con IA para Aetheron. Se usa de Gemini AI y
para el back esta en Render.

Este sitio web es accesible desde este
[https://paginas-ia.onrender.com]("https://paginas-ia.onrender.com").

De manera local se esta ejecutando en [paginas-ia.local](paginas-ia.local).

## Nginx

    nginx version: nginx/1.28.2

nginx.conf (local):

```
server {
    listen 80;
    server_name paginas-ia.local;

    root "E:\Documentos\Aetheron\Paginas IA";
    index index.php index.html;

    location / {
        try_files $uri $uri/ =404;
    }

    location ~ \.php$ {
        fastcgi_pass 127.0.0.1:9000;
        include fastcgi_params;
        fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }
}
```

Iniciar nginx:

    start nginx

Detener nginx:

    nginx -s stop

Recargar nginx:

    nginx -s reload

## PHP

Version:

```
php -v

PHP 8.5.3 (cli) (built: Feb 10 2026 18:43:53) (NTS Visual C++ 2022 x64)
Copyright (c) The PHP Group
Built by The PHP Group
Zend Engine v4.5.3, Copyright (c) Zend Technologies
    with Zend OPcache v8.5.3, Copyright (c), by Zend Technologies
```

Modulos:

```
php -m

[PHP Modules]
bcmath
calendar
Core
ctype
curl
date
dom
filter
hash
iconv
json
lexbor
libxml
mysqlnd
openssl
pcre
PDO
Phar
random
readline
Reflection
session
SimpleXML
SPL
standard
tokenizer
uri
xml
xmlreader
xmlwriter
Zend OPcache
zlib

[Zend Modules]
Zend OPcache
```