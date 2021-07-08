<?php

namespace App\Console\Commands\Generators;

use Illuminate\Support\Str;
use App\Console\Commands\CrudGenerator;
use App\Console\Commands\CrudMakeCommand;

class Resource extends CrudGenerator
{
    public static function generate(CrudMakeCommand $command)
    {
        $name = Str::of($command->argument('name'))->singular()->studly();

        $namespace = Str::of($name)->plural()->studly();

        $hasMedia = $command->option('has-media');

        $stub = __DIR__.'/../stubs/Resources/Resource.stub';

        $selectStub = $hasMedia
            ? __DIR__.'/../stubs/Resources/MediaSelectResource.stub'
            : __DIR__.'/../stubs/Resources/SelectResource.stub';

        static::put(
            app_path("Http/Resources/".$namespace),
            $name.'Resource.php',
            self::qualifyContent(
                $stub,
                $name
            )
        );

        static::put(
            app_path("Http/Resources/".$namespace),
            'SelectResource.php',
            self::qualifyContent(
                $selectStub,
                $name
            )
        );
    }
}
