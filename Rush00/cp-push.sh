#!/bin/sh
echo \\\\\\ cp -R  ~/mamp/apps/chupa/htdocs/ . //////
cp -R  ~/mamp/apps/chupa/htdocs/ .

echo \\\\\\\git add -A/////////
git add -A

echo \\\\\git commit -m "quick"//////
git commit -m "quick"

echo \\\\\\git push origin master/////
git push origin master
