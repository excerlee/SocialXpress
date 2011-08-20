
APP=${1:?Please specify the FB app you want to deploy}
#WEB_ROOT=$HOME/Sites
WEB_ROOT=/var/www/html
BAK_ROOT=/var/sx/app_backups

APP_DIR=$WEB_ROOT/$APP
BAK_DIR=$BAK_ROOT/${APP}-`date +%F-%H%M`

mkdir -p $APP_DIR
mkdir -p $BAK_DIR

echo "DOING with backing up old $APP to $BAK_DIR" 
echo mv $APP_DIR $BAK_DIR
mv $APP_DIR $BAK_DIR
echo "DONE with backing up old $APP to $BAK_DIR" 

mkdir -p $APP_DIR

echo "DOING  with copying files to $APP_DIR" 
echo cp -r ../$APP/* $APP_DIR/
cp -r ../$APP/* $APP_DIR/

echo cp -r ../conf ../lib $WEB_ROOT
rm -rf $WEB_ROOT/{conf,lib}
cp -r ../conf ../lib $WEB_ROOT
echo "DONE with copying files to $APP_DIR" 
