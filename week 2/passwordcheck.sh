#! /bin/bash
read -sp "Type a password: " password
passwordHash=$(echo "$password" | sha256sum)
storedpassword=$(< password.txt)

echo "$passwordHash" && echo "$storedpassword"

if [ "$passwordHash" == "$storedpassword" ];then
   echo "access granted"
else
    echo "access denied"
fi
exit 0