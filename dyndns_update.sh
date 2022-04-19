#!/bin/bash

# log file
logfile='/var/www/vhosts/HOST/logs/dnsupdate.log'

# update file
updatefile='/var/www/vhosts/HOST/dns_update'

# check the update file exists. If not, do not update DNS record

if [ ! -s $updatefile ]
then
       echo "$(date -R) Update file doesn't exist. No update necessary. Quitting." >> "$logfile"
       exit
fi

domainList=`cat $updatefile`

# Split domain list by ;
IFS=';' read -ra domainsArr <<< "$domainList"

# Iterate over all domains in the array and update them one by one
for domain in "${domainsArr[@]}"; do

echo "$(date -R) Updating DNS entry for $domain" >> "$logfile"

# Update DNS entry for $domain via PLESK
/usr/local/psa/admin/sbin/dnsmng --update $domain

done

# delete update file
rm $updatefile
