#!/bin/bash

# used to initialize portions of asdf
# use bash setup.sh --dev for dev environment (no options needed for production enviornment)

dev=0
if [[ $1 == --dev ]]; then
    dev=1
fi

# setup load_repos.sh cronjob and run load_repos.sh for first time
rm -rf ~/active/tmp
mkdir -p ~/active/tmp
cd ~/active/tmp

if [[ $dev == 1 ]]; then
    git clone -b develop https://github.com/itpir/asdf
else
    git clone https://github.com/itpir/asdf
fi

cp  ~/active/tmp/asdf/src/tools/load_repos.sh ~/active/load_repos.sh

rm -rf ~/active/tmp

mkdir -p ~/crontab.backup
crontab -l > ~/crontab.backup/$(date +%Y%m%d).crontab

load_repos_cron="0 1 * * * ~/active/load_repos.sh"

cron_exists=$(crontab -l 2>/dev/null | grep -xF "$load_repos_cron" 2>/dev/null)

if [ ! "$cron_exists" ]; then
    crontab -l | { cat; echo "$load_repos_cron"; } | crontab -
fi

cd ~/active
if [[ $dev == 1 ]]; then
    bash load_repos.sh develop
else
    bash load_repos.sh master
fi


# setup other cronjobs
# 
