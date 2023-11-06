git init

git config core.fileMode false
git config core.autocrlf false

git add --a
git commit -m "'$1'"

git rm -r --cached .
git add --a
git commit -m "'$1'"

git pull origin main

chmod -R 777 ../sugar_tracking/
chown -R www-data:www-data ../sugar_tracking/

git push origin HEAD:main