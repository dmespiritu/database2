#! bin/bash
selectvar="SELECT COUNT(*) AS 'Inventory' FROM Customer;"

mysql --user=root --password="T4k3 0ff, eh?" BlazeCoin << eof
$selectvar
eof