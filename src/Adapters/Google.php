<?php

/**
 * Adapter provider more information from google maps.
 */
namespace Embed\Adapters;

use Embed\Request;
use Embed\Utils;
use Embed\Providers\Api;

class Google extends Webpage implements AdapterInterface
{
    /**
     * {@inheritdoc}
     */
    public static function check(Request $request)
    {
        return $request->isValid() && $request->match([
            'https://maps.google.*',
            'https://www.google.*/maps*',
            'https://drive.google.com/file/*/view',
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function run()
    {
        if ($this->request->match('*/maps/*')) {
            $this->addProvider('google', new Api\GoogleMaps());
        }

        parent::run();
    }

    /**
     * {@inheritdoc}
     */
    public function getCode()
    {
        $this->width = null;
        $this->height = null;

        if (($google = $this->getProvider('google'))) {
            return $google->getCode();
        }

        $url = $this->request->createUrl()
            ->withDirectoryPosition(3, 'preview')
            ->withQueryParameters([]);

        return Utils::iframe($url);
    }

    /**
     * {@inheritdoc}
     */
    public function getImagesUrls()
    {
        return [];
    }
}
