#!/bin/bash

grep -r -s -E "sed" ~/scripts/Scripting-Languages/ #search recursively for the string sed in the provided directory
grep -r -E "^m" ~/scripts/Scripting-Languages/ 
grep -r -E "\d{3}" ~/scripts/Scripting-Languages/
grep -r -E "echo\s+\w+\s+\w+\s+\w+" ~/scripts/Scripting-Languages/
grep -E "[0-9a-zA-Z]{8,}" testword.txt