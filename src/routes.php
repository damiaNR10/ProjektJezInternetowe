<?php

//$app->mount( '/acme', new Controller\AcmeController());
$app->get('/', function () use ($app) {
    return $app['twig']->render('layout.html.twig', array());
})
    ->bind('homepage')
;
//
//$app->error(function (\Exception $e, Request $request, $code) use ($app) {
//    if ($app['debug']) {
//        return;
//    }
//
//    // 404.html, or 40x.html, or 4xx.html, or error.html
//    $templates = array(
//        'errors/'.$code.'.html.twig',
//        'errors/'.substr($code, 0, 2).'x.html.twig',
//        'errors/'.substr($code, 0, 1).'xx.html.twig',
//        'errors/default.html.twig',
//    );
//
//    return new Response($app['twig']->resolveTemplate($templates)->render(array('code' => $code)), $code);
//});
