#!/bin/bash

./IpInfo.sh | sed -n '/IP Address/'p

#I have taken the creative freedom to assume that it is okay to filter the output of the IpInfo.sh script to display only the IP addresses.

#If this is not meant to be the case and we are meant to create a whole new script, the following code will satisfy the requirements:

 #net_info="$(ifconfig)"
 #addresses=$(echo "$net_info" | sed -n '/inet / {
 #s/inet/IP Address:/
 #s/netmask/\n\t\tSubnet Mask:/ 
 #s/broadcast/\n\t\tBroadcast Address:/
 #p
 #}')
 #format output
 #echo -e "$addresses" | grep "IP Address"