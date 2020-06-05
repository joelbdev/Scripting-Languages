#!/bin/bash

 guessNumber ()
 {
    read -p "$1: "
    while (( $REPLY < $2 || $REPLY > $2 )); do
        if [[ $REPLY < $2 ]]; then 
            echo "Too low"
        elif [[ $REPLY > $2 ]]; then
            echo "Too high"
        fi
    read -p "$1: "
    done
 }


echo "This is a number guessing game"
guessNumber "Guess a number between 1 and 100" 42
echo "Correct: you guessed the right number!"


