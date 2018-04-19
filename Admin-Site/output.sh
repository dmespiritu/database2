#! bin/bash
selectvar="SELECT COUNT(*) AS 'Customer Count: ' FROM Customer";

mysql --user=root --password="T4k3 0ff, eh?" BlazeCoin << eof
$selectvar
eof