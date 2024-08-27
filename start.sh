echo -ne "\033]0;VirusSR PHP - Honkai Star Rail\007"

cd "$(dirname "$0")"

PHP_BINARY="php"

if [ -x bin/php ]; then
    PHP_BINARY="bin/php"
fi

if [ -z "$PHP_BINARY" ]; then
    echo "Couldn't find a PHP binary in system PATH or in the 'bin' directory."
    read -p "Press enter to exit..."
    exit 1
fi

"$PHP_BINARY" src/Start.php "$@" || read -p "Press enter to exit..."
