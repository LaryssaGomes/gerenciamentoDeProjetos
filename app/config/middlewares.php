<?php

$app->middleware('before', function ($c) {
    session_start();
});

$app->middleware('before', function ($c) {
   // header('Content-Type: aplication\json');
});

$app->middleware('after', function ($c) {
   // echo 'after2';
});

$app->middleware('after', function ($c) {
   // echo 'after';
});
