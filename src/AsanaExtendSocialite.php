<?php
namespace SocialiteProviders\Asana;

use SocialiteProviders\Manager\SocialiteWasCalled;

class AsanaExtendSocialite
{
    /**
     * Execute the provider.
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite(
            'asana', __NAMESPACE__.'\Provider'
        );
    }
}
