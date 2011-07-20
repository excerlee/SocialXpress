
APP=${1:?Please specify the FB app you want to deploy}
#WEB_ROOT=$HOME/Sites
WEB_ROOT=/Library/WebServer/Documents
BAK_ROOT=$WEB_ROOT/archive

APP_DIR=$WEB_ROOT/$APP
BAK_DIR=$BAK_ROOT/${APP}-`date +%F-%H%M`

mv $APP_DIR $BAK_DIR
echo "Done with backing up old $APP to $BAK_DIR" 

mkdir -p $APP_DIR
mkdir -p $BAK_DIR

cp -r ../$APP/* $APP_DIR/
cp -r ../conf ../lib $WEB_ROOT
echo "DONE with copying files to $APP_DIR" 
