#!/bin/bash

./passwordcheck.sh

if test $? -eq 0; then
    echo -e "\033[35m Select an option:"
    echo -e "\033[34m 1) Create a folder"
    echo -e "\033[34m 2) Copy a folder"
    echo -e "\033[34m 3) Set a password"
    echo -e "\033[34m 4) Caculator"
    echo -e "\033[34m 5) Create Week Folders"
    echo -e "\033[34m 6) Check Filenames"
    echo -e "\033[34m 7) Download a File"
    echo -e "\033[34m 8) Exit"
fi
read useroption;
while true 
do
    case $useroption in
        1) ./foldermaker.sh;;
        2) ./foldercopier.sh;;
        3) ./setPassword.sh;;
        4) ../week3/calc.sh;;
        5) ../week3/megafoldermaker.sh;;
        6) ../week3/filenames.sh;;
        7) ../week3/downloader.sh;;
        8) exit 0;;
        *) echo -e "\033[35m Please select a valid option and try again" && break;;
    esac
done