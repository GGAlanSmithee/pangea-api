#!/bin/sh

echo "Enter database configuration: "
read -p "Host     : " host
read -p "Username : " username
read -p "Password : " password
read -p "Schema   : " name

cat <<EOF > "apps/api/config/dbconfig.php"
<?php

return new \Phalcon\Config(array(
    'database' => array(
        'adapter'  => 'Mysql',
        'host'     => '${host}',
        'username' => '${username}',
        'password' => '${password}',
        'name'     => '${name}',
    )
));

EOF

cp apps/api/config/dbconfig.php app/config/dbconfig.php

echo "Done!"
