#!/usr/bin/python3
import hashlib
import itertools

#hidden password hash
passwordHash = "8b7df143d91c716ecfa5fc1730022f6b421b05cedee8fd52b1fc65a96030ad52"

#Start bruteforcing!

wordlist = 'abcdefghijklmnopqrstuvwxyz' #generates a string that will be iterated over to try each combination
y = '' #save an empty string
length=1 #start the length of the password attempts at one
wordlistHash = '' #generate the wordlistHash as an empty string to facilitate the while loop

while wordlistHash != passwordHash: #while loop will keep going until the password is found
    for c in itertools.product(wordlist, repeat=length): #itertools is a library that assists in iterating over objects. It is used to iterate over the string in wordlist. 
        word = y.join(c) #creates the password guess to be tried by adding one of the letters from wordlist to the empty y string
        wordlistHash = hashlib.sha256(word.encode("utf-8")).hexdigest() #hashes the string word
        print(f"Trying password: {word}:{wordlistHash}") #keeps the user aware of where the script is currently at
        if wordlistHash == passwordHash: #lets the user know what the password was when it is found and breaks out of the while loop
            print(f"Found password: {word}")
            break
    length=length+1 #increments the length of the password guess e.g. a, aa, aaa, aaaa
