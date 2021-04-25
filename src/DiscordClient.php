<?php

namespace pa3py6aka\yii2auth;

use yii\authclient\OAuth2;
use yii\helpers\Json;

class DiscordClient extends OAuth2
{
    public $authUrl = 'https://discord.com/api/oauth2/authorize';

    public $tokenUrl = 'https://discord.com/api/oauth2/token';

    public $apiBaseUrl = 'https://discord.com/api/v8';

    public $scope = 'email identify';

    /**
     * Initializes authenticated user attributes.
     * @return array auth user attributes.
     */
    protected function initUserAttributes()
    {
        $response = $this->api('users/@me');

        if (empty($response['id'])) {
            throw new \RuntimeException('Unable to init user attributes due to unexpected response: ' . Json::encode($response));
        }

        return $response;
    }

    /**
     * {@inheritdoc}
     */
    protected function defaultName()
    {
        return 'discord';
    }

    /**
     * {@inheritdoc}
     */
    protected function defaultTitle()
    {
        return 'Discord';
    }

    /**
     * {@inheritdoc}
     */
    public function applyAccessTokenToRequest($request, $accessToken)
    {
        $request->getHeaders()->set('Authorization', 'Bearer '. $accessToken->getToken());
    }
}