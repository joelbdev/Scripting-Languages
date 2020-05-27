#!/bin/bash

echo "Website downloader - this script will keep downloading a webpage until you type 'exit'"

while true #default condition is true - therefore script will keep looping
do
    read -p "What website do you want to download? " website
    if [ $website != "exit" ];then
        read -p "Where do you want to save the webpage? " directory 
        wget -P $directory $website        
    else
        echo "exiting script" && exit 1
    fi
done
