#! /bin/bash
read -sp "Type a password: " password #request the user to supply a password
passwordHash=$(echo "$password" | sha256sum) #takes the user supplied string and hashes it
storedpassword=$(< password.txt) #takes the stored hash from password.txt and stores as a variable

if [ "$passwordHash" == "$storedpassword" ];then #compares the hash of the password entered to the hash of the password on file
   echo -e "\n \033[32m Access granted" #-e modifier so that new line character can be used for better formatting
else
    echo -e " \n \033[031m Access denied"
fi
exit 0
