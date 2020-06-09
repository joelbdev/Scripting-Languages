#!/bin/bash

 guessNumber ()
 {
    read -p "$1: " #reads the user input 
    while (( $REPLY < $2 || $REPLY > $2 )); do #compares the user input to the specified number '42' and executes the if statement if matches one of the conditions
        if [[ $REPLY < $2 ]]; then 
            echo "Too low"
        elif [[ $REPLY > $2 ]]; then
            echo "Too high"
        fi
    read -p "$1: " #keep prompting for guesses if right answer isn't provided
    done
 }


echo "This is a number guessing game"
guessNumber "Guess a number between 1 and 100" 42
echo "Correct: you guessed the right number!"


