#!/bin/bash

cat $1 | while read LINE
do
    if test -f $LINE;then #if items is a file
        echo "$LINE - That file exists"
    elif test -d $LINE;then #if item is a directory
        echo "$LINE - That directory exists"
    else #if item is something else
        echo "$LINE -I don't know what that is"
    fi
done


