import pandas as pd
import glob
from wordcloud import WordCloud 
import matplotlib.pyplot as plt

#set path to read the output files from the bash webscraper
path = r'/home/orange/Scripting-Languages/assignment/data'
all_files = glob.glob(path + "/*.csv")
li = []

#read each of the output csv files and create a pandas dataframe from each
for file in all_files:
    df = pd.read_csv(file, sep=',')
    li.append(df)
#concatenate each of the dataframes and name the columns and then convert to a csv
frame = pd.concat(li, axis=1)
frame.columns = ['Date', 'Author', 'Tag', 'Title','link']
finalframe = frame.dropna()
finalframe.to_csv('scraperesults.csv')

#read the tags column of the dataframe and create a string with all of the list elements
tags = finalframe['Tag']
tagslist = tags.values.tolist()
tagsstring = ', '.join(map(str, tagslist))

#create a wordcloud based off the string
wc = WordCloud(width=800, height=800, background_color='white', min_font_size=10)
wc.generate(tagsstring)
# plot the WordCloud image
plt.figure(figsize=(8, 8), facecolor=None)
plt.imshow(wc)
plt.axis("off")
plt.tight_layout(pad=0)
plt.savefig('wordcloud.png')

