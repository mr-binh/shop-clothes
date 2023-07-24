<?php

namespace App\Services\Traits;

use App\Services\Manager\Menu\MenuManager;

trait RepositorySetup
{
    public function callApp()
    {
        $this->configMenuAdmin();
        $this->callRepositoryApp();
    }

    private function configMenuAdmin()
    {
        $this->app->singleton('menu', function () {
            return new MenuManager();
        });
    }

    private function callRepositoryApp()
    {
//        $this->app->bind(
//            MContestInterface::class,
//            Contest::class,
//        );
    }
}
