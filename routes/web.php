<?php

$router->group(['prefix'=>'api'], function () use ($router) {
    $router->get('/quiz/{id}', ['uses'=>'QuizController@quiz']);
    $router->get('/list', ['uses'=>'QuizController@index']);
    $router->post('/new', ['uses'=>'QuizController@store']);
    $router->patch('/update/{id}', ['uses'=>'QuizController@update']);
    $router->delete('/delete/{id}', ['uses'=>'QuizController@destroy']);
});

$router->group(['prefix'=>'user-api'], function () use ($router) {
    $router->get('/user/{id}', ['uses'=>'UserController@user']);
    $router->get('/list', ['uses'=>'UserController@index']);
    $router->post('/new', ['uses'=>'UserController@store']);
    $router->patch('/update/{id}', ['uses'=>'UserController@update']);
    $router->delete('/delete/{id}', ['uses'=>'UserController@destroy']);
});

$router->group(['prefix'=>'answer-api'], function () use ($router) {
    $router->get('/list', ['uses'=>'AnswerController@index']);
    $router->get('/user/{id}', ['uses'=>'AnswerController@user']);
    $router->post('/new', ['uses'=>'AnswerController@store']);
    $router->patch('/update/{id}', ['uses'=>'AnswerController@update']);
    $router->delete('/delete/{id}', ['uses'=>'AnswerController@destroy']);
});


$router->get('/', function () use ($router) {
    return $router->app->version();
});
