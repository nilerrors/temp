#!/bin/bash

openssl req -x509 -nodes -days 365 -newkey rsa:2048 -keyout /home/bel-bouc/inception/secrets/nginx.key -out /home/bel-bouc/inception/secrets/nginx.crt -subj "/C=BE/ST=State/L=City/O=Organization/CN=bel-bouc.42.fr"

sudo cp /home/bel-bouc/inception/secrets/nginx.crt /usr/local/share/ca-certificates/nginx.crt

sudo update-ca-certificates
