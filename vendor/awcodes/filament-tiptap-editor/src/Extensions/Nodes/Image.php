<?php

namespace FilamentTiptapEditor\Extensions\Nodes;

use Tiptap\Nodes\Image as BaseImage;

class Image extends BaseImage
{
    public function addAttributes(): array
    {
        return [
            'src' => [
                'default' => null,
            ],
            'alt' => [
                'default' => null,
            ],
            'title' => [
                'default' => null,
            ],
            'width' => [
                'default' => null,
            ],
            'height' => [
                'default' => null,
            ],
            'lazy' => [
                'default' => false,
                'parseHTML' => function ($DOMNode) {
                    return $DOMNode->hasAttribute('loading') && $DOMNode->getAttribute('loading') === 'lazy';
                },
                'renderHTML' => function ($attributes) {
                    return $attributes->lazy
                        ? ['loading' => 'lazy']
                        : null;
                },
            ],
            'srcset' => [
                'default' => null,
            ],
            'sizes' => [
                'default' => null,
            ],
            'media' => [
                'default' => null,
                'parseHTML' => fn ($DOMNode) => $DOMNode->getAttribute('data-media-id') ?: null,
                'renderHTML' => function ($attributes) {
                    if (! property_exists($attributes, 'media')) {
                        return null;
                    }

                    return ['data-media-id' => $attributes->media];
                },
            ],
        ];
    }
}
