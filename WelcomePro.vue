<template>
  @extends('adminlte::page') @section('title', 'Dashboard') @section('content_header')
  <h1>Home</h1>
  @stop @section('content')
  <h3>
    Bem vind{{ Auth::user()->gender == 'female' ? 'a' : 'o' }},
    <b>{{ strtoupper(current(explode(" ", Auth::user()->name))) }}</b>
  </h3>

  <div class="row">
    <div class="col-md-5">
      <div class="card card-primary card-outline">
        <div class="card-body box-profile">
          <div class="text-center">
            <img
              class="profile-user-img img-fluid img-circle"
              src="{{ Auth::user()->gender == 'female' ? 'https://adminlte.io/themes/v3/dist/img/user4-128x128.jpg' : 'https://adminlte.io/themes/v3/dist/img/user2-160x160.jpg' }}"
              alt="User profile picture"
            />
          </div>
          <h3 class="profile-username text-center">
            {{ strtoupper(Auth::user()->name) }}
          </h3>
          <p class="text-muted text-center">
            {{ __('content.user.enum.profile.' . Auth::user()->profile) }}
          </p>
          <ul class="list-group list-group-unbordered mb-3">
            <li class="list-group-item">
              <b>Status</b>
              <a
                class="float-right"
                >{{ __('content.user.enum.status.' . Auth::user()->status) }}</a
              >
            </li>
            <li class="list-group-item">
              <b>Gênero</b>
              <a
                class="float-right"
                >{{ __('content.user.enum.gender.' . Auth::user()->gender) }}</a
              >
            </li>
            <li class="list-group-item">
              <b>E-mail</b> <a class="float-right">{{ Auth::user()->email }}</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="col-6">
      <!-- About Me Box -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Sobre mim</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
          <strong><i class="fas fa-book mr-1"></i> Educação</strong>

          <p class="text-muted">
            B.S. em Ciencia da Computação na University do Tennessee em Knoxville
          </p>

          <hr />

          <strong><i class="fas fa-map-marker-alt mr-1"></i> Location</strong>

          <p class="text-muted">São Paulo, SP</p>

          <hr />

          <strong><i class="fas fa-pencil-alt mr-1"></i> Habilidades</strong>

          <p class="text-muted">
            <span class="tag tag-danger">UI Design</span>
            <span class="tag tag-success">Codificar</span>
            <span class="tag tag-info">Javascript</span>
            <span class="tag tag-warning">PHP</span>
            <span class="tag tag-primary">Node.js</span>
          </p>

          <hr />

          <strong><i class="far fa-file-alt mr-1"></i> Notas</strong>

          <p class="text-muted">
            Sou uma pessoa muio extrovertida e com focos e objetivos.
          </p>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>
  @stop @section('css')
  <link rel="stylesheet" href="/css/admin_custom.css" />
  @stop @section('js')
  <script>
    console.log("Hi!");
  </script>
  @stop
</template>

<script setup>
import { Head, Link } from "@inertiajs/inertia-vue3";

defineProps({
  canLogin: Boolean,
  canRegister: Boolean,
  laravelVersion: String,
  phpVersion: String,
});
</script>

<style scoped>
.bg-gray-100 {
  background-color: #f7fafc;
  background-color: rgba(247, 250, 252, var(--tw-bg-opacity));
}

.border-gray-200 {
  border-color: #edf2f7;
  border-color: rgba(237, 242, 247, var(--tw-border-opacity));
}

.text-gray-400 {
  color: #cbd5e0;
  color: rgba(203, 213, 224, var(--tw-text-opacity));
}

.text-gray-500 {
  color: #a0aec0;
  color: rgba(160, 174, 192, var(--tw-text-opacity));
}

.text-gray-600 {
  color: #718096;
  color: rgba(113, 128, 150, var(--tw-text-opacity));
}

.text-gray-700 {
  color: #4a5568;
  color: rgba(74, 85, 104, var(--tw-text-opacity));
}

.text-gray-900 {
  color: #1a202c;
  color: rgba(26, 32, 44, var(--tw-text-opacity));
}

@media (prefers-color-scheme: dark) {
  .dark\:bg-gray-800 {
    background-color: #2d3748;
    background-color: rgba(45, 55, 72, var(--tw-bg-opacity));
  }

  .dark\:bg-gray-900 {
    background-color: #1a202c;
    background-color: rgba(26, 32, 44, var(--tw-bg-opacity));
  }

  .dark\:border-gray-700 {
    border-color: #4a5568;
    border-color: rgba(74, 85, 104, var(--tw-border-opacity));
  }

  .dark\:text-white {
    color: #fff;
    color: rgba(255, 255, 255, var(--tw-text-opacity));
  }

  .dark\:text-gray-400 {
    color: #cbd5e0;
    color: rgba(203, 213, 224, var(--tw-text-opacity));
  }
}
</style>
