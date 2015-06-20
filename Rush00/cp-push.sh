#!/bin/sh

echo "\033[1;31mCOPY\033[0m"
cp -R  ~/mamp/apps/chupa/htdocs/ .

echo "\033[1;31mAdd -A\033[0m"
git add -A

echo "\033[1;31mCommit\033[0m"
git commit -m "quick"

echo "\033[1;31mPush\033[0m"
git push origin master
