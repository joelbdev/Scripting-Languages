#!/bin/bash

../week2/passwordcheck.sh #runs the passcheck script located in the same directory - therefore only continues to execute if user supplies corect password

if test $? -eq 0; then #it will only execute this if the exit code from passwordcheck.sh is 0 - exit code will only be 0 if password correct
    echo -e "\033[35m Select an option:"
    echo -e "\033[34m 1) Create a folder"
    echo -e "\033[34m 2) Copy a folder"
    echo -e "\033[34m 3) Set a password"
    echo -e "\033[34m 4) Caculator"
    echo -e "\033[34m 5) Create Week Folders"
    echo -e "\033[34m 6) Check Filenames"
    echo -e "\033[34m 7) Download a File"
    echo -e "\033[0m 8) Exit"

read useroption;

else exit 1 #if exit code is not 0 (i.e. password is incorect), program will exit. passwordcheck.sh will output in red text 'Access Denied'
fi

while true #default is always true, so while loop will keep looping until user selects exit
do
    case $useroption in #executes the different scripts based on the user selection (if password was correct)
        1) ../week2/foldermaker.sh;;
        2) ../week2/foldercopier.sh;;
        3) ../week2/setPassword.sh;;
        4) ./calc.sh;;
        5) ./megafoldermaker.sh;;
        6) ./filenames.sh;;
        7) ./downloader.sh;;
        8) exit 0;;
        *) echo -e "\033[35m Please select a valid option and try again" && break;; #if user enters anything else it will echo this line and while loop will again loop providing another opportunity for user to enter correct option
    esac
done

