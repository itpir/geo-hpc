#!/bin/bash

# makes sure the latest versions of repos are downloaded
# should be called periodically from cronjob (cronjob may be added automatically during setup)

mkdir -p ~/active/{asdf,extract-scripts,mean-surface-rasters}

cd ~/active/asdf
if [ ! -d .git ]; then
   git clone https://github.com/itpir/asdf
else
   git pull origin master
fi


old_hash=$(md5sum ~/active/load_repos.sh | awk '{ print $1 }')
new_hash=$(md5sum ~/active/asdf/src/tools/load_repos.sh | awk '{ print $1 }')


if [[ "$old_hash" != "$new_hash" ]]; then

    echo "Found new load_repos.sh ..."
    cp  ~/active/asdf/src/tools/load_repos.sh ~/active/load_repos.sh
    bash ~/active/load_repos.sh

else

    cd ~/active/extract-scripts
    if [ ! -d .git ]; then
        git clone -b develop https://github.com/itpir/extract-scripts
    else
       git pull origin master
    fi


    cd ~/active/mean-surface-rasters
    if [ ! -d .git ]; then
        git clone -b develop https://github.com/itpir/mean-surface-rasters
    else
       git pull origin master 
    fi

fi
