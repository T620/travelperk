#!/bin/bash

echo "  __________  ___ _    __________    ____  __________  __ __"
echo " /_  __/ __ \/   | |  / / ____/ /   / __ \/ ____/ __ \/ //_/"
echo "  / / / /_/ / /| | | / / __/ / /   / /_/ / __/ / /_/ / ,<   "
echo " / / / _, _/ ___ | |/ / /___/ /___/ ____/ /___/ _, _/ /| |  "
echo "/_/ /_/ |_/_/  |_|___/_____/_____/_/   /_____/_/ |_/_/ |_|  "

printf "\nInstalling composer dependencies\n"
composer install

printf "\n Installing SSL Certifications for TLS\n"
mkdir -p certs
cd certs || exit
mkcert -install localhost

printf "\nBuilding containers...\n"
docker-compose build

printf "\nStarting containers...\n"
docker-compose up -d
docker-compose ps

printf "\nInstall complete. Have a nice day! :)\n"
