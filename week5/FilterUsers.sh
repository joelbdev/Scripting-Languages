#!/bin/bash

./UserAccounts.sh | grep -E '\/[b]\w{2}\/[b]\w{3}'
#uses regex to filter output to users with /bin/bash