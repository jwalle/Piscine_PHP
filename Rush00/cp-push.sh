#!/bin/sh
cp -R  ~/mamp/apps/chupa/htdocs/ .
git add -A
git commit -m "quick"
git push origin master
