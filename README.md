- This repository needs to download the vendor file, by Twig, to work. Also the .htaccess archive.
HTACCESS CODE:
   RewriteEngine On
   RewriteCond %{REQUEST_FILENAME} !-f
   RewriteCond %{REQUEST_FILENAME} !-d
   RewriteRule ^(.*)$ index.php?url=$1 [QSA,L]

just copy and paste it in a file and save as .htaccess
