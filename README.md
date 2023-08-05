### Laravel template

This is an opinionated Laravel template that includes the following:

Create a new project with composer:

    composer create-project nwrman/laravel-template my-new-project dev-master

After pulling the project dont't forget to update dependencies

    composer update

Generate model ide helpers

    composer model-helpers 

Lint everything

    composer lint

Lint only modified files

    composer lint --dirty

Make sure that everything is ok

    composer test

## Toolset

The created application is configured with the following tools:

- [Duster](https://github.com/tighten/duster)
- [Pest PHP](https://pestphp.com)
- [PHP CS Fixer](https://github.com/FriendsOfPHP/PHP-CS-Fixer)
- [LaraStan](https://github.com/nunomaduro/larastan)
- [Safe PHP](https://github.com/thecodingmachine/safe)
- [Laravel IDE helper](https://github.com/barryvdh/laravel-ide-helper)
- [Blueprint](https://github.com/laravel-shift/blueprint)
