module.exports = {
  "app/public/assets/**/*.{css,js}": ["prettier --write"],
  "app/**/*.php": [
    "php ./app/vendor/bin/php-cs-fixer fix --config .php_cs --allow-risky=yes",
  ],
};
