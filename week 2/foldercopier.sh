#! /bin/bash
read -p "type the name of the directory that you would like to copy: " folderName

#if the directory is a valid directory
if [ -d "$folderName" ]; then #-d is directory - this is asking if folderName is an existing directory
#copy to a new location
    read -p "type the name of the destination folder: " newFolderName
    cp -r "$folderName" "$newFolderName" #-r to copy all files recursively
else
#otherwise print an error
    echo "I couldn't find that folder"
fi 