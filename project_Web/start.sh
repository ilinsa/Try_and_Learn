#! powershell.exe

INIFILE="$(pwd)/server/server.ini"
DOCROOT="$(pwd)/public"
ROUTER="$(pwd)/server/router.php"
HOST=localhost
PORT=8000


php -S $HOST:$PORT -c $INIFILE -t $DOCROOT