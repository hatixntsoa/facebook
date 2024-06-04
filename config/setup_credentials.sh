#!/bin/bash

sudo echo

if [[ ! -f "credentials.txt" ]]; then
	echo "Creating credentials.txt..."
	touch credentials.txt
fi

echo "Changing the owner of credentials to server www-data..."
sudo chown www-data:www-data credentials.txt

echo "Changing the permission of credentials to full..."
sudo chmod 777 credentials.txt

echo "Full Access to credentials.txt"
