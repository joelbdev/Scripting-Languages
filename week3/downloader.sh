#!/bin/bash

echo "Website downloader - this script will keep downloading a webpage until you type 'exit'"

while true #default condition is true - therefore script will keep looping
do
    read -p "What website do you want to download? " website
    if [ $website != "exit" ];then #if the user enters exit, it will go to the else condition and exit
        read -p "Where do you want to save the webpage? " directory 
        wget -P $directory $website        
    else
        echo "exiting script" && exit 1
    fi
done
