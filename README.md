# yii2-discord-authclient

This extension adds Discord OAuth2 supporting for [yii2-authclient](https://github.com/yiisoft/yii2-authclient).

[![Latest Stable Version](https://poser.pugx.org/pa3py6aka/yii2-discord-authclient/v/stable)](https://packagist.org/packages/pa3py6aka/yii2-discord-authclient)
[![Total Downloads](https://poser.pugx.org/pa3py6aka/yii2-discord-authclient/downloads)](https://packagist.org/packages/pa3py6aka/yii2-discord-authclient)
[![Monthly Downloads](https://poser.pugx.org/pa3py6aka/yii2-discord-authclient/d/monthly)](https://packagist.org/packages/pa3py6aka/yii2-discord-authclient)
[![Latest Unstable Version](https://poser.pugx.org/pa3py6aka/yii2-discord-authclient/v/unstable)](https://packagist.org/packages/pa3py6aka/yii2-discord-authclient)
[![License](https://poser.pugx.org/pa3py6aka/yii2-discord-authclient/license)](https://packagist.org/packages/pa3py6aka/yii2-discord-authclient)

## Installation

The preferred way to install this extension is through [composer](http://getcomposer.org/download/).

Either run

```
php composer.phar require pa3py6aka/yii2-discord-authclient "^1.0"
```

or add

```json
"pa3py6aka/yii2-discord-authclient": "^1.0"
```

to the `require` section of your composer.json.

## Usage

You must read the yii2-authclient [docs](https://github.com/yiisoft/yii2-authclient/blob/master/docs/guide/README.md)

Register your application [on Discord developer site](https://discord.com/developers/applications#top)

and add the Discord client to your auth clients.

```php
'components' => [
    'authClientCollection' => [
        'class' => 'yii\authclient\Collection',
        'clients' => [
            'discord' => [
                'class' => 'pa3py6aka\yii2auth\DiscordClient',
                'clientId' => 'discord_client_id',
                'clientSecret' => 'discord_client_secret',
            ],
            // other clients
        ],
    ],
    // ...
 ]
 ```