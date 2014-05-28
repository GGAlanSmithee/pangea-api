#!/bin/sh

echo "Enter database configuration: "
read -p "Host     : " host
read -p "Username : " username
read -p "Password : " password
read -p "Schema   : " dbname

cat <<EOF > "app/config/dbconfig.php"
<?php

return new \Phalcon\Config(array(
    "database" => array(
        "adapter"  => "Mysql",
        "host"     => "${host}",
        "username" => "${username}",
        "password" => "${password}",
        "dbname"   => "${dbname}",
    )
));

EOF

echo "Done!"
