#!/bin/bash

./passwordcheck.sh

if test $? -eq 0; then
    echo "select an option:"
    echo "1) Create a folder"
    echo "2) Copy a folder"
    echo "3) Set a password"
fi
read useroption;

case $useroption in
   1) ./foldermaker.sh;;
   2) ./foldercopier.sh;;
   3) ./setPassword.sh;;

esac
exit 0