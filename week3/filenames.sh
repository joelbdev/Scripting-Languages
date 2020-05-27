#!/bin/bash

cat $1 | while read LINE
do
    if test -f $LINE;then
        echo "$LINE - That file exists"
    elif test -d $LINE;then
        echo "$LINE - That directory exists"
    else
        echo "$LINE -I don't know what that is"
    fi
done


