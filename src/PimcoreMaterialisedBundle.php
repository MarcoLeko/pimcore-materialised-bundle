<?php
declare(strict_types=1);

namespace Pimcore\Bundle\MaterialisedBundle;

use Pimcore\Extension\Bundle\AbstractPimcoreBundle;
use Pimcore\Extension\Bundle\PimcoreBundleAdminClassicInterface;
use Pimcore\Extension\Bundle\Traits\BundleAdminClassicTrait;
use Pimcore\Extension\Bundle\Traits\PackageVersionTrait;

class PimcoreMaterialisedBundle extends AbstractPimcoreBundle implements PimcoreBundleAdminClassicInterface
{
    use BundleAdminClassicTrait;
    use PackageVersionTrait;

    public function getPath(): string
    {
        return dirname(__DIR__);
    }

    public function getJsPaths(): array
    {
        return [
            '/bundles/pimcorematerial/js/quill-overrides.css',
        ];
    }

    public function getCssPaths(): array
    {
        return [
            '/bundles/pimcorematerial/css/material.css',
        ];
    }

    public function getEditmodeCssPaths(): array
    {
        return $this->getCssPaths();
    }

    public function getEditmodeJsPaths(): array
    {
        return $this->getJsPaths();
    }
}