#!/bin/sh
echo cp -R * ~/mamp/apps/j03/htdocs
cp -R * ~/mamp/apps/j03/htdocs

echo "\n///////////////////////////////// EX00\n"

echo "\n/////////////////////////////////////////////////httpd-app.conf :"
cat ex00/httpd-app.conf

echo "\n/////////////////////////////////////////////////httpd-vhosts.conf :"
cat ex00/httpd-vhosts.conf

echo "\n/////////////////////////////////////////////////bitnami-apps-vhosts.conf :"
cat ex00/bitnami-apps-vhosts.conf

echo "\n///////////////////////////////// EX01\n"

echo "\n$> curl 'http://j03.local.42.fr:8080/ex01/phpinfo.php' > phpinfo.txt"
curl 'http://j03.local.42.fr:8080/ex01/phpinfo.php' > phpinfo.txt

open phpinfo.txt

echo "\n///////////////////////////////// EX02\n"

echo "\n$> curl 'http://j03.local.42.fr:8080/ex02/print_get.php?login=mmontinet'"
curl 'http://j03.local.42.fr:8080/ex02/print_get.php?login=mmontinet'

echo "\n$> curl 'http://j03.local.42.fr:8080/ex02/print_get.php?gdb=pied2biche&barry=barreamine'"
curl 'http://j03.local.42.fr:8080/ex02/print_get.php?gdb=pied2biche&barry=barreamine'

echo "\n///////////////////////////////// EX03\n"

echo "\n$> curl -c cook.txt 'http://j03.local.42.fr:8080/ex03/cookie_crisp.php?action=set&name=plat&value=choucroute'"
curl -c cook.txt 'http://j03.local.42.fr:8080/ex03/cookie_crisp.php?action=set&name=plat&value=choucroute'

echo "\n$> curl -b cook.txt 'http://j03.local.42.fr:8080/ex03/cookie_crisp.php?action=get&name=plat'"
curl -b cook.txt 'http://j03.local.42.fr:8080/ex03/cookie_crisp.php?action=get&name=plat'

echo "\n$> curl -c cook.txt 'http://j03.local.42.fr:8080/ex03/cookie_crisp.php?action=del&name=plat'"
curl -c cook.txt 'http://j03.local.42.fr:8080/ex03/cookie_crisp.php?action=del&name=plat'

echo "\n$> curl -b cook.txt 'http://j03.local.42.fr:8080/ex03/cookie_crisp.php?action=get&name=plat'"
curl -b cook.txt 'http://j03.local.42.fr:8080/ex03/cookie_crisp.php?action=get&name=plat'

echo "\n///////////////////////////////// EX04\n"

echo "\n$> curl 'http://j03.local.42.fr:8080/ex04/raw_text.php'"
curl 'http://j03.local.42.fr:8080/ex04/raw_text.php'

echo "\n$> lynx -dump 'http://j03.local.42.fr:8080/ex04/raw_text.php'"
lynx -dump 'http://j03.local.42.fr:8080/ex04/raw_text.php'

echo "\n$> lynx -source 'http://j03.local.42.fr:8080/ex04/raw_text.php'"
lynx -source 'http://j03.local.42.fr:8080/ex04/raw_text.php'

open http://j03.local.42.fr:8080/ex04/raw_text.php

echo "\n///////////////////////////////// EX05\n"

echo "\n$> curl --head http://j03.local.42.fr:8080/ex05/read_img.php"
curl --head http://j03.local.42.fr:8080/ex05/read_img.php

open http://j03.local.42.fr:8080/ex05/read_img.php

echo "\n///////////////////////////////// EX06\n"

echo "\n$>curl --user zaz:jaimelespetitsponeys http://j03.local.42.fr:8080/ex06/members_only.php > zazaccess.html"
curl --user zaz:jaimelespetitsponeys http://j03.local.42.fr:8080/ex06/members_only.php > zazaccess.html

echo "\n$> curl -v --user root:root http://j03.local.42.fr:8080/ex06/members_only.php"
curl -v --user root:root http://j03.local.42.fr:8080/ex06/members_only.php

open zazaccess.html
