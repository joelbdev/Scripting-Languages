#!/bin/bash

echo "Bash Caculator"
read -p "Enter first number: " num1
read -p "Enter second number: " num2

read -p "Enter operator choice: " operator

case $operator in
    +) result=$(expr $num1 + $num2) && echo -e "\033[34m $result"
    ;;
    -) result=$(expr $num1 - $num2) && echo -e "\033[32m $result"
    ;;
    /) result=$(expr $num1 / $num2) && echo -e "\033[35m $result"
    ;;
    \*) result=$(expr $num1 \* $num2) && echo -e "\033[31m $result"
    ;;
    *) result="Enter a valid operator"
    ;;
esac

exit 0
