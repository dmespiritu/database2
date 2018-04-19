import os

os.system('mysqldump -u test -password --all databases > /var/www/html/BlazeCoin.sql')