#!/var/www/html/
import os
import shutil
shutil.rmtree("/var/www/html/Mongo-backup")

os.system('monogodumb --out /var/www/html/Mongo-backup')