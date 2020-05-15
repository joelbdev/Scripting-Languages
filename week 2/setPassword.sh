#! /bin/bash
read -p "Where do you want to save your password? " "folder"
read -sp "Type a password: " "password"
cd "$folder" #change to the user specified directory
echo "$password" | sha256sum | cat > password.txt #takes the password variable, hashes it and then concatenates the output into a password.txt file. Use -n to not take trailing newline char
echo "Your password hash has been saved in a file called passwords" #let the user know that the password has been saved