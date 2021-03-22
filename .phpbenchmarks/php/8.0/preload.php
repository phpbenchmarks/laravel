<?php

$sourceCodePath = __DIR__ . '/../../../';
$files = [
    "$sourceCodePath/app/Http/Controllers/HelloWorldController.php",
    "$sourceCodePath/app/Http/Kernel.php",
    "$sourceCodePath/app/Providers/RouteServiceProvider.php",
    "$sourceCodePath/bootstrap/app.php",
    "$sourceCodePath/config/app.php",
    "$sourceCodePath/config/cache.php",
    "$sourceCodePath/public/index.php",
    "$sourceCodePath/routes/web.php",
    "$sourceCodePath/vendor/autoload.php",
    "$sourceCodePath/vendor/composer/ClassLoader.php",
    "$sourceCodePath/vendor/composer/autoload_static.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Cache/CacheServiceProvider.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Config/Repository.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Container/BoundMethod.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Container/Container.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Container/Util.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Contracts/Config/Repository.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Contracts/Container/Container.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Contracts/Events/Dispatcher.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Contracts/Foundation/Application.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Contracts/Foundation/CachesConfiguration.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Contracts/Foundation/CachesRoutes.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Contracts/Http/Kernel.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Contracts/Pipeline/Pipeline.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Contracts/Queue/QueueableEntity.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Contracts/Routing/BindingRegistrar.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Contracts/Routing/Registrar.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Contracts/Routing/UrlRoutable.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Contracts/Support/Arrayable.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Contracts/Support/DeferrableProvider.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Contracts/Support/Jsonable.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Database/ConnectionResolverInterface.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Database/Connectors/ConnectionFactory.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Database/DatabaseManager.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Database/DatabaseServiceProvider.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Concerns/GuardsAttributes.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Concerns/HasAttributes.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Concerns/HasEvents.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Concerns/HasGlobalScopes.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Concerns/HasRelationships.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Concerns/HasTimestamps.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Concerns/HidesAttributes.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Database/Eloquent/Model.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Database/MigrationServiceProvider.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Events/Dispatcher.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Events/EventServiceProvider.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Filesystem/Filesystem.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Filesystem/FilesystemServiceProvider.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Foundation/AliasLoader.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Foundation/Application.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/BootProviders.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/HandleExceptions.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/LoadConfiguration.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/LoadEnvironmentVariables.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/RegisterFacades.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Foundation/Bootstrap/RegisterProviders.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Foundation/EnvironmentDetector.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Foundation/Http/Events/RequestHandled.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Foundation/Http/Kernel.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Foundation/PackageManifest.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Foundation/ProviderRepository.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Foundation/Providers/ArtisanServiceProvider.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Foundation/Providers/ComposerServiceProvider.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Foundation/Providers/ConsoleSupportServiceProvider.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Foundation/Support/Providers/RouteServiceProvider.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Foundation/helpers.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Http/Concerns/InteractsWithContentTypes.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Http/Concerns/InteractsWithFlashData.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Http/Concerns/InteractsWithInput.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Http/Request.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Http/Response.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Http/ResponseTrait.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Log/LogServiceProvider.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Pipeline/Pipeline.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Queue/QueueServiceProvider.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/AbstractRouteCollection.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/Contracts/ControllerDispatcher.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/Controller.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/ControllerDispatcher.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/Events/RouteMatched.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/Matching/HostValidator.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/Matching/MethodValidator.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/Matching/SchemeValidator.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/Matching/UriValidator.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/Matching/ValidatorInterface.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/Pipeline.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/Route.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/RouteAction.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/RouteCollection.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/RouteCollectionInterface.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/RouteDependencyResolverTrait.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/RouteFileRegistrar.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/RouteGroup.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/RouteParameterBinder.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/RouteRegistrar.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/RouteUri.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/Router.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/RoutingServiceProvider.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Routing/SortedMiddleware.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Support/AggregateServiceProvider.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Support/Arr.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Support/Collection.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Support/Enumerable.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Support/Env.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Support/Facades/Facade.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Support/Facades/Route.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Support/Reflector.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Support/ServiceProvider.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Support/Str.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Support/Traits/EnumeratesValues.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Support/Traits/ForwardsCalls.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Support/Traits/Macroable.php",
    "$sourceCodePath/vendor/laravel/framework/src/Illuminate/Support/helpers.php",
    "$sourceCodePath/vendor/opis/closure/functions.php",
    "$sourceCodePath/vendor/phpoption/phpoption/src/PhpOption/None.php",
    "$sourceCodePath/vendor/phpoption/phpoption/src/PhpOption/Option.php",
    "$sourceCodePath/vendor/psr/container/src/ContainerInterface.php",
    "$sourceCodePath/vendor/ramsey/uuid/src/functions.php",
    "$sourceCodePath/vendor/swiftmailer/swiftmailer/lib/classes/Swift.php",
    "$sourceCodePath/vendor/swiftmailer/swiftmailer/lib/swift_required.php",
    "$sourceCodePath/vendor/symfony/deprecation-contracts/function.php",
    "$sourceCodePath/vendor/symfony/finder/Finder.php",
    "$sourceCodePath/vendor/symfony/finder/Glob.php",
    "$sourceCodePath/vendor/symfony/finder/Iterator/ExcludeDirectoryFilterIterator.php",
    "$sourceCodePath/vendor/symfony/finder/Iterator/FileTypeFilterIterator.php",
    "$sourceCodePath/vendor/symfony/finder/Iterator/FilenameFilterIterator.php",
    "$sourceCodePath/vendor/symfony/finder/Iterator/MultiplePcreFilterIterator.php",
    "$sourceCodePath/vendor/symfony/finder/Iterator/PathFilterIterator.php",
    "$sourceCodePath/vendor/symfony/finder/Iterator/RecursiveDirectoryIterator.php",
    "$sourceCodePath/vendor/symfony/finder/SplFileInfo.php",
    "$sourceCodePath/vendor/symfony/http-foundation/AcceptHeader.php",
    "$sourceCodePath/vendor/symfony/http-foundation/AcceptHeaderItem.php",
    "$sourceCodePath/vendor/symfony/http-foundation/FileBag.php",
    "$sourceCodePath/vendor/symfony/http-foundation/HeaderBag.php",
    "$sourceCodePath/vendor/symfony/http-foundation/HeaderUtils.php",
    "$sourceCodePath/vendor/symfony/http-foundation/InputBag.php",
    "$sourceCodePath/vendor/symfony/http-foundation/ParameterBag.php",
    "$sourceCodePath/vendor/symfony/http-foundation/Request.php",
    "$sourceCodePath/vendor/symfony/http-foundation/Response.php",
    "$sourceCodePath/vendor/symfony/http-foundation/ResponseHeaderBag.php",
    "$sourceCodePath/vendor/symfony/http-foundation/ServerBag.php",
    "$sourceCodePath/vendor/symfony/http-kernel/HttpKernelInterface.php",
    "$sourceCodePath/vendor/symfony/polyfill-ctype/bootstrap.php",
    "$sourceCodePath/vendor/symfony/polyfill-ctype/bootstrap80.php",
    "$sourceCodePath/vendor/symfony/polyfill-iconv/bootstrap.php",
    "$sourceCodePath/vendor/symfony/polyfill-intl-grapheme/bootstrap.php",
    "$sourceCodePath/vendor/symfony/polyfill-intl-idn/bootstrap.php",
    "$sourceCodePath/vendor/symfony/polyfill-intl-normalizer/bootstrap.php",
    "$sourceCodePath/vendor/symfony/polyfill-intl-normalizer/bootstrap80.php",
    "$sourceCodePath/vendor/symfony/polyfill-mbstring/bootstrap.php",
    "$sourceCodePath/vendor/symfony/polyfill-mbstring/bootstrap80.php",
    "$sourceCodePath/vendor/symfony/polyfill-php72/bootstrap.php",
    "$sourceCodePath/vendor/symfony/polyfill-php73/bootstrap.php",
    "$sourceCodePath/vendor/symfony/polyfill-php80/bootstrap.php",
    "$sourceCodePath/vendor/symfony/routing/CompiledRoute.php",
    "$sourceCodePath/vendor/symfony/routing/Route.php",
    "$sourceCodePath/vendor/symfony/routing/RouteCompiler.php",
    "$sourceCodePath/vendor/symfony/routing/RouteCompilerInterface.php",
    "$sourceCodePath/vendor/symfony/string/Resources/functions.php",
    "$sourceCodePath/vendor/symfony/translation/Resources/functions.php",
    "$sourceCodePath/vendor/symfony/var-dumper/Resources/functions/dump.php",
    "$sourceCodePath/vendor/vlucas/phpdotenv/src/Dotenv.php",
    "$sourceCodePath/vendor/vlucas/phpdotenv/src/Exception/ExceptionInterface.php",
    "$sourceCodePath/vendor/vlucas/phpdotenv/src/Exception/InvalidPathException.php",
    "$sourceCodePath/vendor/vlucas/phpdotenv/src/Loader/Loader.php",
    "$sourceCodePath/vendor/vlucas/phpdotenv/src/Loader/LoaderInterface.php",
    "$sourceCodePath/vendor/vlucas/phpdotenv/src/Repository/AbstractRepository.php",
    "$sourceCodePath/vendor/vlucas/phpdotenv/src/Repository/Adapter/ArrayAdapter.php",
    "$sourceCodePath/vendor/vlucas/phpdotenv/src/Repository/Adapter/AvailabilityInterface.php",
    "$sourceCodePath/vendor/vlucas/phpdotenv/src/Repository/Adapter/EnvConstAdapter.php",
    "$sourceCodePath/vendor/vlucas/phpdotenv/src/Repository/Adapter/PutenvAdapter.php",
    "$sourceCodePath/vendor/vlucas/phpdotenv/src/Repository/Adapter/ReaderInterface.php",
    "$sourceCodePath/vendor/vlucas/phpdotenv/src/Repository/Adapter/ServerConstAdapter.php",
    "$sourceCodePath/vendor/vlucas/phpdotenv/src/Repository/Adapter/WriterInterface.php",
    "$sourceCodePath/vendor/vlucas/phpdotenv/src/Repository/AdapterRepository.php",
    "$sourceCodePath/vendor/vlucas/phpdotenv/src/Repository/RepositoryBuilder.php",
    "$sourceCodePath/vendor/vlucas/phpdotenv/src/Repository/RepositoryInterface.php",
    "$sourceCodePath/vendor/vlucas/phpdotenv/src/Store/File/Paths.php",
    "$sourceCodePath/vendor/vlucas/phpdotenv/src/Store/File/Reader.php",
    "$sourceCodePath/vendor/vlucas/phpdotenv/src/Store/FileStore.php",
    "$sourceCodePath/vendor/vlucas/phpdotenv/src/Store/StoreBuilder.php",
    "$sourceCodePath/vendor/vlucas/phpdotenv/src/Store/StoreInterface.php",
    "$sourceCodePath/vendor/voku/portable-ascii/src/voku/helper/ASCII.php",
    "$sourceCodePath/vendor/voku/portable-ascii/src/voku/helper/data/ascii_by_languages.php",
];

foreach ($files as $file) {
    if (is_readable($file) === false) {
        throw new \Exception('File "' . $file . '" is not readable.');
    }

    opcache_compile_file($file);
}
