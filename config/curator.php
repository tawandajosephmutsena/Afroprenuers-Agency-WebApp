<?php

return [
    'accepted_file_types' => [
        'image/jpeg',
        'image/png',
        'image/webp',
        'image/svg+xml',
        'application/pdf',
    ],
    'cloud_disks' => [
        's3',
        'cloudinary',
        'imgix',
    ],
    'curation_formats' => [
        'jpg',
        'jpeg',
        'webp',
        'png',
        'avif',
    ],
    'curation_presets' => [
        \Awcodes\Curator\Curations\ThumbnailPreset::class,
    ],
    'directory' => 'images', // Changed from 'media' to match your .env CURATOR_DIRECTORY
    'disk' => env('CURATOR_DISK', 'public'), // Changed to use CURATOR_DISK from .env
    
    'glide' => [
        'server' => \Awcodes\Curator\Glide\DefaultServerFactory::class,
        'fallbacks' => [],
        'route_path' => 'curator',
    ],
    'image_crop_aspect_ratio' => null,
    'image_resize_mode' => null,
    'image_resize_target_height' => null,
    'image_resize_target_width' => null,
    'is_limited_to_directory' => false,
    'is_tenant_aware' => true,
    'tenant_ownership_relationship_name' => 'tenant',
    'max_size' => 5000,
    'model' => \Awcodes\Curator\Models\Media::class,
    'min_size' => 0,
    'path_generator' => null,
    'resources' => [
        'label' => 'Media',
        'plural_label' => 'Media',
        'navigation_group' => 'Articles and Media',
        'cluster' => null,
        'navigation_label' => 'Media',
        'navigation_icon' => 'heroicon-o-photo',
        'navigation_sort' => null,
        'navigation_count_badge' => true,
        'resource' => \Awcodes\Curator\Resources\MediaResource::class,
    ],
    'should_preserve_filenames' => true, // Changed to true for better file management
    'should_register_navigation' => true,
    'should_check_exists' => true,
    'visibility' => 'public',
    'tabs' => [
        'display_curation' => true,
        'display_upload_new' => true,
    ],
    'multi_select_key' => 'metaKey',
    'table' => [
        'layout' => 'grid',
    ],
];