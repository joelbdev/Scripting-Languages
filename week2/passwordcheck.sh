#! /bin/bash
read -sp "Type a password: " password
passwordHash=$(echo "$password" | sha256sum)
storedpassword=$(< password.txt)

if [ "$passwordHash" == "$storedpassword" ];then
   echo -e "\n \033[32m Access granted" #-e modifier so that string appears on new line
else
    echo -e " \n \033[031m Access denied"
fi
exit 0