<?php

namespace App\Services;
use App\Models\SocialProviderAccount;
use App\Models\User;
use Laravel\Socialite\Contracts\User as ProviderUser;

class SocialInstagramAccountService
{
    public function createOrGetUser(ProviderUser $providerUser)
    {
        $account = SocialProviderAccount::whereProvider('instagram')
            ->whereProviderUserId($providerUser->getId())
            ->first();

        if ($account) {
            return $account->user;
        } else {

            $account = new \App\Models\SocialProviderAccount([
                'provider_user_id' => $providerUser->getId(),
                'provider' => 'instagram'
            ]);

            $user = User::whereEmail($providerUser->getEmail())->first();

            if (!$user) {

                $user = User::create([
                    'email' => $providerUser->getName(),
                    'firstname' => $providerUser->getName(),
                    'lastname' => $providerUser->getName(),
                    'password' => \Hash::make(rand(1,10000)),
                ]);
            }

            $account->user()->associate($user);
            $account->save();

            return $user;
        }
    }
}