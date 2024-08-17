<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('title', 255);
            $table->string('bo_title', 255)->nullable();
            $table->string('slug', 255);
            $table->string('client', 255)->nullable();
            $table->date('date')->nullable();
            $table->string('date_title', 255)->nullable();
            $table->string('thumbnail', 500)->nullable();
            $table->string('cover', 255)->nullable();
            $table->string('excerpt', 2000)->nullable();
            $table->string('content', 4000)->nullable();
            $table->boolean('is_active')->default(0);
            $table->boolean('is_visible_event_fe')->default(0);
            $table->boolean('is_visible_event_bo')->default(0);
            $table->boolean('is_closed_registration')->default(0);
            $table->boolean('has_abstracts')->default(0);
            $table->integer('abstract_limit')->default(3);
            $table->boolean('is_closed_abstract_submission')->default(1);
            $table->string('registration_sender_email', 255)->nullable();
            $table->string('registration_sender_name', 255)->nullable();
            $table->string('registration_email_subject', 255)->nullable();
            $table->string('registration_reply_to_email', 255)->nullable();
            $table->string('registration_cc_email', 255)->nullable();
            $table->string('registration_bcc_email', 255)->nullable();
            $table->string('abstract_email_subject', 255)->nullable();
            $table->string('confirmation_email_subject', 255);
            $table->boolean('has_confirmation_mail')->default(0);
            $table->boolean('has_attachment_badge')->default(1);
            $table->string('attachment_badge_name', 255);
            $table->string('accent_color', 10)->default('#0091da');
            $table->string('mailer', 20)->default('smtp');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
