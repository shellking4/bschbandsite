A Gospel Band Web Site for managing their work over time

# GUIDES TO DEPLOY ON VERCEL

https://github.com/juicyfx/vercel-examples/tree/master/php-laravel

https://darkghosthunter.medium.com/hosting-laravel-for-free-78dbab674854
https://calebporzio.com/easy-free-serverless-laravel-with-vercel
https://github.com/juicyfx/vercel-examples/blob/master/php-laravel/config/view.php
https://github.com/vercel-community/php/issues/207
https://www.npmjs.com/package/vercel-php/v/0.3.1

FINALLY I'VE USED vercel-php@0.7.3 and it works


Github feed that helps me solve database connection issue

https://github.com/vercel-community/php/issues/572
https://github.com/vercel-community/php/issues/555#issuecomment-2423948239

basically, I had to add the following to the package.json file

"engines": {
    "node": "18.x"
}

THE PROJECT USES NEON POSTGRESQL

https://neon.tech/docs/databases/postgresql