<?php

    use CodeIgniter\HTTP\IncomingRequest;
    use CodeIgniter\HTTP\URI;
    use CodeIgniter\Router\Exceptions\RouterException;
    use Config\App;
    use Config\Services;

    if (! function_exists('asset_url')) {
        function asset_url($relativePath = '', ?string $scheme = null): string{
            $config = clone config('App');
            $config->indexPage = '';
            $Option = $config->AssetPaste;
            return rtrim(site_url($Option . "/" . $relativePath, $scheme, $config), '/');
        }
    }

    if (! function_exists('vendor_url')) {
        function vendor_url($relativePath = '', ?string $scheme = null): string{
            $config = clone config('App');
            $config->indexPage = '';
            $Option = $config->vendorPaste;
            return rtrim(site_url($Option . "/" . $relativePath, $scheme, $config), '/');
        }
    }

    if (! function_exists('img_url')) {
        function img_url($relativePath = '', ?string $scheme = null): string{
            $config = clone config('App');
            $config->indexPage = '';
            $Option = $config->imgPaste;
            return rtrim(site_url($Option . "/" . $relativePath, $scheme, $config), '/');
        }
    }