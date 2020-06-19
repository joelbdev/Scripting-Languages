#!/usr/bin/python3
import hashlib
import string
import itertools
import os

#hidden password hash
passwordHash = "8b7df143d91c716ecfa5fc1730022f6b421b05cedee8fd52b1fc65a96030ad52"
#Start bruteforcing!

wordlist = 'abcdefghijklmnopqrstuvwxyz'
y = ''
length=1
wordlistHash = ''

while wordlistHash != passwordHash:
    for c in itertools.product(wordlist, repeat=length):
        word = y.join(c)
        wordlistHash = hashlib.sha256(word.encode("utf-8")).hexdigest()
        print(f"Trying password: {word}:{wordlistHash}")
        if wordlistHash == passwordHash:
            print(f"Found password: {word}")
            break
    length=length+1
