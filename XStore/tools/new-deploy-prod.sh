
#APP=${1:?Please specify the FB app you want to deploy}
#WEB_ROOT=$HOME/Sites
WEB_ROOT=/var/www/html
ROOT_DIR=..

BAK_ROOT=/var/prod-backup
BAK_DIR=$BAK_ROOT/${APP_DIR}-`date +%F-%H%M`
#mkdir -p $BAK_DIR
mv $APP_DIR $BAK_DIR
echo "Backed up old $APP to $BAK_DIR" 

mkdir -p $APP_DIR
cp -r ../$APP/* $APP_DIR/
cp -r ../conf ../lib $WEB_ROOT
echo "DONE with copying files to $APP_DIR" 
