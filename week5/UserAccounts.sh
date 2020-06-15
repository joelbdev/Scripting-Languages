#!/bin/bash

 awk 'BEGIN { 
     FS=":"; 
     print " _____________________________________________________________________________________________";
     print "| \033[34mUsername\033[0m             | \033[34mUserID\033[0m  | \033[34mGroupID\033[0m | \033[34mHome\033[0m                      | \033[34mShell\033[0m                | ";
     print " _____________________________________________________________________________________________";
 }
 {
     printf("| \033[33m%-20s\033[0m | \033[35m%-7s\033[0m | \033[35m%-7s\033[0m | \033[35m%-25s\033[0m | \033[35m%-20s\033[0m |\n", $1, $3, $4, $6, $7);
 }
 END {
     print " ______________________________________________________________________________________________";
 }' /etc/passwd

  awk -F: '$7 == "/bin/bash" { print $1 }' /etc/passwd #only gets users where field 7 = /bin/bash (shell is bash)
  #Note: The instructions are not quite clear concerning how to answer the final question. I have also made another script 'FilterUsers.sh' that takes the output of this script and uses regex to grep users that have /bin/bash as the shell