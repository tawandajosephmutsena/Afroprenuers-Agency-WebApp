<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('settings', function (Blueprint $table): void {
            $table->id();
            $table->string('group');
            $table->string('name');
            $table->boolean('locked')->default(false);
            $table->json('payload');
            $table->string('logo_path')->nullable();
            $table->string('favicon_path')->nullable();
            $table->string('site_name')->nullable();
            $table->text('site_description')->nullable();
            $table->string('theme_color')->nullable();
            $table->string('support_email')->nullable();
            $table->string('support_phone')->nullable();
            $table->string('google_analytics_id')->nullable();
            $table->string('posthog_html_snippet')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_keywords')->nullable();
            $table->json('seo_metadata')->nullable();
            $table->json('email_settings')->nullable();
            $table->string('email_from_address')->nullable();
            $table->string('email_from_name')->nullable();
            $table->json('social_network')->nullable();
            $table->json('site_settings')->nullable();
            $table->json('footer_settings')->nullable();
            $table->text('footer_description')->nullable();
            $table->json('footer_links')->nullable();
            $table->json('footer_social_links')->nullable();
            $table->json('more_configs')->nullable();
            $table->timestamps();
            $table->unique(['group', 'name']);
        });
    }

    public function down()
    {
        Schema::dropIfExists('settings');
    }
};
