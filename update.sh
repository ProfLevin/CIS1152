git pull
git add .
git commit -m "Update on $DATE"
git fetch upstream
git checkout master
git merge origin/master
