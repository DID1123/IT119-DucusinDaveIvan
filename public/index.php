<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

/*
|--------------------------------------------------------------------------
| Check If The Application Is Under Maintenance
|--------------------------------------------------------------------------
|
| If the application is in maintenance / demo mode via the "down" command
| we will load this file so that any pre-rendered content can be shown
| instead of starting the framework, which could cause an exception.
|
*/

if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

/*
|--------------------------------------------------------------------------
| Register The Auto Loader
|--------------------------------------------------------------------------
|
| Composer provides a convenient, automatically generated class loader for
| this application. We just need to utilize it! We'll simply require it
| into the script here so we don't need to manually load our classes.
|
*/

require __DIR__.'/../vendor/autoload.php';

/*
|--------------------------------------------------------------------------
| Run The Application
|--------------------------------------------------------------------------
|
| Once we have the application, we can handle the incoming request using
| the application's HTTP kernel. Then, we will send the response back
| to this client's browser, allowing them to enjoy our application.
|
*/

$app = require_once __DIR__.'/../bootstrap/app.php';

$kernel = $app->make(Kernel::class);

$response = $kernel->handle(
    $request = Request::capture()
)->send();

$kernel->terminate($request, $response);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dave Ivan Ducusin - Web Design Portfolio</title>
    <style>
        /* Your CSS styles */
    </style>
</head>
<body>
    <header>
        <h1>Dave Ivan Ducusin</h1>
        <p>Web System Designer & Developer</p>
    </header>
    <div class="container">
        <div class="profile">
            <img src="img/profile.jpg" alt="Dave Ivan Ducusin">
            <h1>Dave Ivan Ducusin</h1>
            <p>Welcome to my portfolio. I am a passionate web system designer and developer with a knack for creating elegant and efficient web solutions. With a strong foundation in both front-end and back-end development, I excel at crafting visually appealing, user-friendly websites and applications. My expertise spans HTML, CSS, JavaScript, and various frameworks like React and Angular, enabling me to bring innovative ideas to life. I am dedicated to staying updated with the latest industry trends and technologies to ensure my projects are not only modern but also highly functional. Whether it's a sleek corporate website, an engaging e-commerce platform, or a dynamic web application, I am committed to delivering top-notch results that exceed expectations. Explore my portfolio to see examples of my work and discover how I can help bring your digital vision to reality.</p>
        </div>
        <section class="projects">
            <div class="project">
                <img src="img/project1.jpg" alt="Project 1">
                <!-- Project 1 content -->
            </div>
            <div class="project">
                <img src="img/project2.jpg" alt="Project 2">
                <!-- Project 2 content -->
            </div>
            <div class="project">
                <img src="img/project3.jpg" alt="Project 3">
                <!-- Project 3 content -->
            </div>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Dave Ivan Ducusin</p>
    </footer>
</body>
</html>
