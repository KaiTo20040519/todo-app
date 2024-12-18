<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


Schema::create('tasks', function (Blueprint $table) {
  $table->id();
  $table->string('name', 100);
  $table->string('category');
  $table->boolean('status')->default(false);
  $table->timestamp('updated_at')->useCurrent()->nullable();
  $table->timestamp('created_at')->useCurrent()->nullable();
});
