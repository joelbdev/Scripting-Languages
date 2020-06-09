#!/bin/bash
x=1
#set up the CSV file to recieve the parsed content from the HTML file

#echo "Date,Title,Description,Tag,Author,Link" > extractData.csv

#While loop to iterate over the first 5 pages of the website
while [[ $x -le 5 ]]; do

#download each page of the website

curl https://packetstormsecurity.com/files/tags/exploit/page$x/ > analysisfile

#parse the HTML file to pull out the fields

dates=$(cat analysisfile | grep 'datetime' | cut -d'>' -f3 | sed -e 's!</a!''!g' -e 's!,!''!g' -e 's!  ! !g' | cat >> ./data/dates.csv) #cleans the date format by removing '</a', ',' and the double space
titles=$(cat analysisfile | grep '.text-plain' | cut -d'>' -f3 | sed 's!</a!''!g' | cat >> ./data/titles.csv) #isolate the titles of each exploit and remove the '</a'
#descriptions=$(cat analysisfile | grep  'class="detail"' | cut -d'>' -f3 | sed 's!</p!''!g' | cat >> ./data/descriptions.csv) #isolate the descriptions of each exploit and remove the '</a'
tags=$(cat analysisfile | grep 'class="tags"' | cut -d'>' -f7 | sed 's!</a!''!g' | sed 's!</p!''!g' | cat >> ./data/tags.csv)  #isolate the tags of each exploit and remove the '</a' #TODO probably need to do something with these tags as there are multiple
authors=$(cat analysisfile | grep 'person' | cut -d'>' -f3 | sed 's!</a!''!g'| sed 's!</p!''!g' | cat >> ./data/authors.csv) #isolate the authors and remove the '</a'
links=$(cat analysisfile| grep 'ico text-plain' | cut -d'>' -f2 | cut -d'"' -f4 | sed 's!^!https://packetstormsecurity.com!' | cat >> ./data/links.csv) #converts relative link to absolute url

#append scraped fields to the csv
#TODO: Do I need to use awk to get them into different columns?

#echo "${dates},${titles},${descriptions},${authors},${links}" >> extractData.csv

#increment the x variable to register what page is being scraped
let "x=x+1"
done

#run the python script to concatenate the csv files and generate a wordcloud from the tags
python3 genwordcloud.py
eog ./wordcloud.png #open the wordcloud

#cleaning up after itself
rm ./data/*.csv
#TODO put the parsing within a function
