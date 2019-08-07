<?php

declare(strict_types=1);

namespace PackageVersions;

/**
 * This class is generated by ocramius/package-versions, specifically by
 * @see \PackageVersions\Installer
 *
 * This file is overwritten at every run of `composer install` or `composer update`.
 */
final class Versions
{
    public const ROOT_PACKAGE_NAME = '__root__';
    /**
     * Array of all available composer packages.
     * Dont read this array from your calling code, but use the \PackageVersions\Versions::getVersion() method instead.
     *
     * @var array<string, string>
     * @internal
     */
    public const VERSIONS          = array (
  'api-platform/api-pack' => 'v1.2.0@9e3e7421415c747e676778f211434674324dcfa9',
  'api-platform/core' => 'v2.4.5@e056f5d9248588f228c88fb34f8ae2312fbb6387',
  'doctrine/annotations' => 'v1.6.1@53120e0eb10355388d6ccbe462f1fea34ddadb24',
  'doctrine/cache' => 'v1.8.0@d768d58baee9a4862ca783840eca1b9add7a7f57',
  'doctrine/collections' => 'v1.6.2@c5e0bc17b1620e97c968ac409acbff28b8b850be',
  'doctrine/common' => 'v2.10.0@30e33f60f64deec87df728c02b107f82cdafad9d',
  'doctrine/dbal' => 'v2.9.2@22800bd651c1d8d2a9719e2a3dc46d5108ebfcc9',
  'doctrine/doctrine-bundle' => '1.11.2@28101e20776d8fa20a00b54947fbae2db0d09103',
  'doctrine/doctrine-cache-bundle' => '1.3.5@5514c90d9fb595e1095e6d66ebb98ce9ef049927',
  'doctrine/doctrine-migrations-bundle' => 'v2.0.0@4c9579e0e43df1fb3f0ca29b9c20871c824fac71',
  'doctrine/event-manager' => 'v1.0.0@a520bc093a0170feeb6b14e9d83f3a14452e64b3',
  'doctrine/inflector' => 'v1.3.0@5527a48b7313d15261292c149e55e26eae771b0a',
  'doctrine/instantiator' => '1.2.0@a2c590166b2133a4633738648b6b064edae0814a',
  'doctrine/lexer' => '1.1.0@e17f069ede36f7534b95adec71910ed1b49c74ea',
  'doctrine/migrations' => '2.1.1@a89fa87a192e90179163c1e863a145c13337f442',
  'doctrine/orm' => 'v2.6.3@434820973cadf2da2d66e7184be370084cc32ca8',
  'doctrine/persistence' => '1.1.1@3da7c9d125591ca83944f477e65ed3d7b4617c48',
  'doctrine/reflection' => 'v1.0.0@02538d3f95e88eb397a5f86274deb2c6175c2ab6',
  'fig/link-util' => '1.0.0@1a07821801a148be4add11ab0603e4af55a72fac',
  'friendsofsymfony/rest-bundle' => '2.5.0@a5fc73b84bdb2f0fdf58a717b322ceb6997f7bf3',
  'jdorn/sql-formatter' => 'v1.2.17@64990d96e0959dff8e059dfcdc1af130728d92bc',
  'nelmio/cors-bundle' => '1.5.6@10a24c10f242440211ed31075e74f81661c690d9',
  'nikic/php-parser' => 'v4.2.2@1bd73cc04c3843ad8d6b0bfc0956026a151fc420',
  'ocramius/package-versions' => '1.5.1@1d32342b8c1eb27353c8887c366147b4c2da673c',
  'ocramius/proxy-manager' => '2.2.2@14b137b06b0f911944132df9d51e445a35920ab1',
  'phpdocumentor/reflection-common' => '1.0.1@21bdeb5f65d7ebf9f43b1b25d404f87deab5bfb6',
  'phpdocumentor/reflection-docblock' => '4.3.1@bdd9f737ebc2a01c06ea7ff4308ec6697db9b53c',
  'phpdocumentor/type-resolver' => '0.4.0@9c977708995954784726e25d0cd1dddf4e65b0f7',
  'psr/cache' => '1.0.1@d11b50ad223250cf17b86e38383413f5a6764bf8',
  'psr/container' => '1.0.0@b7ce3b176482dbbc1245ebf52b181af44c2cf55f',
  'psr/link' => '1.0.0@eea8e8662d5cd3ae4517c9b864493f59fca95562',
  'psr/log' => '1.1.0@6c001f1daafa3a3ac1d8ff69ee4db8e799a654dd',
  'symfony/asset' => 'v4.3.3@eecf6d6c952c2c80c9b4fa3ec089d222420f1569',
  'symfony/cache' => 'v4.3.3@d263af3cec33afa862310e58545fdc10d779806f',
  'symfony/cache-contracts' => 'v1.1.5@ec5524b669744b5f1dc9c66d3c2b091eb7e7f0db',
  'symfony/config' => 'v4.3.3@a17a2aea43950ce83a0603ed301bac362eb86870',
  'symfony/console' => 'v4.3.3@8b0ae5742ce9aaa8b0075665862c1ca397d1c1d9',
  'symfony/debug' => 'v4.3.3@527887c3858a2462b0137662c74837288b998ee3',
  'symfony/dependency-injection' => 'v4.3.3@9ad1b83d474ae17156f6914cb81ffe77aeac3a9b',
  'symfony/doctrine-bridge' => 'v4.3.3@fe3f4728ff026bb6df08bcd22a6eb839b90255da',
  'symfony/dotenv' => 'v4.3.3@c9ea2a1c60e7db08c1d1379cd4448fd14bda11eb',
  'symfony/event-dispatcher' => 'v4.3.3@212b020949331b6531250584531363844b34a94e',
  'symfony/event-dispatcher-contracts' => 'v1.1.5@c61766f4440ca687de1084a5c00b08e167a2575c',
  'symfony/expression-language' => 'v4.3.3@0243ebde208e0cb401b37e8b8a70a7c6a0aa1d6d',
  'symfony/filesystem' => 'v4.3.3@b9896d034463ad6fd2bf17e2bf9418caecd6313d',
  'symfony/finder' => 'v4.3.3@9638d41e3729459860bb96f6247ccb61faaa45f2',
  'symfony/flex' => 'v1.4.5@4467ab35c82edebac58fe58c22cea166a805eb1f',
  'symfony/framework-bundle' => 'v4.3.3@f4c4d2922c209349fa78bce2ba2faa57ccea1093',
  'symfony/http-foundation' => 'v4.3.3@8b778ee0c27731105fbf1535f51793ad1ae0ba2b',
  'symfony/http-kernel' => 'v4.3.3@a414548d236ddd8fa3df52367d583e82339c5e95',
  'symfony/inflector' => 'v4.3.3@782e3959ea1fc95923624d6173eaf941ce3029b0',
  'symfony/maker-bundle' => 'v1.12.0@201d0e050dca336c44f93657ce1f34f3b3868432',
  'symfony/mime' => 'v4.3.3@6b7148029b1dd5eda1502064f06d01357b7b2d8b',
  'symfony/orm-pack' => 'v1.0.6@36c2a928482dc5f05c5c1c1b947242ae03ff1335',
  'symfony/polyfill-intl-idn' => 'v1.12.0@6af626ae6fa37d396dc90a399c0ff08e5cfc45b2',
  'symfony/polyfill-mbstring' => 'v1.12.0@b42a2f66e8f1b15ccf25652c3424265923eb4f17',
  'symfony/polyfill-php72' => 'v1.12.0@04ce3335667451138df4307d6a9b61565560199e',
  'symfony/polyfill-php73' => 'v1.12.0@2ceb49eaccb9352bff54d22570276bb75ba4a188',
  'symfony/process' => 'v4.3.3@856d35814cf287480465bb7a6c413bb7f5f5e69c',
  'symfony/profiler-pack' => 'v1.0.4@99c4370632c2a59bb0444852f92140074ef02209',
  'symfony/property-access' => 'v4.3.3@42f3a6ddcb794c303d8fdbc33faf3f09cfefee62',
  'symfony/property-info' => 'v4.3.3@0fb251c0e06ddc5f25b63470461bb333aab46de5',
  'symfony/routing' => 'v4.3.3@a88c47a5861549f5dc1197660818084c3b67d773',
  'symfony/security-bundle' => 'v4.3.3@5cd2e315fd432345afca5ddc45a229aa89502a9f',
  'symfony/security-core' => 'v4.3.3@6b06369e0d624b18e3b206b9218461eb6c3b45d8',
  'symfony/security-csrf' => 'v4.3.3@e7e3509ef7de66ea4970c75f9a0a72bf132d452e',
  'symfony/security-guard' => 'v4.3.3@c64285b5c19c2fa0e2235909fd1cca5463132aa5',
  'symfony/security-http' => 'v4.3.3@18301380a2bbe91ee6acdf2bf307ac085444ca24',
  'symfony/serializer' => 'v4.3.3@ff127edf8c015d3a3922b0dd56ffa2c2508a7fda',
  'symfony/service-contracts' => 'v1.1.5@f391a00de78ec7ec8cf5cdcdae59ec7b883edb8d',
  'symfony/stopwatch' => 'v4.3.3@6b100e9309e8979cf1978ac1778eb155c1f7d93b',
  'symfony/templating' => 'v4.3.3@b0c5295d09dfbeae3bd3f52990468587ed82785c',
  'symfony/translation-contracts' => 'v1.1.5@cb4b18ad7b92a26e83b65dde940fab78339e6f3c',
  'symfony/twig-bridge' => 'v4.3.3@d0827d80581436a7d0f2a86df19e7d2106d1b167',
  'symfony/twig-bundle' => 'v4.3.3@7811b73fbfbb33418a73563558d5c262b1bbfa5d',
  'symfony/validator' => 'v4.3.3@dbca6327b315d29653f826057ee5034ff234c587',
  'symfony/var-dumper' => 'v4.3.3@e4110b992d2cbe198d7d3b244d079c1c58761d07',
  'symfony/var-exporter' => 'v4.3.3@9dee83031dcf6dcb53bb7ec1c51de085329bf5cb',
  'symfony/web-link' => 'v4.3.3@af0e386322f192ed50bd9c812daedce05368733c',
  'symfony/web-profiler-bundle' => 'v4.3.3@a7886865c523a7751ee39480a25b663b82d00846',
  'symfony/web-server-bundle' => 'v4.3.3@a5391b6a4ac78d518dd3f0ee5f40bcc9a7ee6fe7',
  'symfony/yaml' => 'v4.3.3@34d29c2acd1ad65688f58452fd48a46bd996d5a6',
  'twig/twig' => 'v2.11.3@699ed2342557c88789a15402de5eb834dedd6792',
  'webmozart/assert' => '1.4.0@83e253c8e0be5b0257b881e1827274667c5c17a9',
  'willdurand/jsonp-callback-validator' => 'v1.1.0@1a7d388bb521959e612ef50c5c7b1691b097e909',
  'willdurand/negotiation' => 'v2.3.1@03436ededa67c6e83b9b12defac15384cb399dc9',
  'zendframework/zend-code' => '3.3.1@c21db169075c6ec4b342149f446e7b7b724f95eb',
  'zendframework/zend-eventmanager' => '3.2.1@a5e2583a211f73604691586b8406ff7296a946dd',
  'paragonie/random_compat' => '2.*@',
  'symfony/polyfill-ctype' => '*@',
  'symfony/polyfill-iconv' => '*@',
  'symfony/polyfill-php71' => '*@',
  'symfony/polyfill-php70' => '*@',
  'symfony/polyfill-php56' => '*@',
  '__root__' => 'No version set (parsed as 1.0.0)@',
);

    private function __construct()
    {
    }

    /**
     * @throws \OutOfBoundsException If a version cannot be located.
     *
     * @psalm-param key-of<self::VERSIONS> $packageName
     */
    public static function getVersion(string $packageName) : string
    {
        if (isset(self::VERSIONS[$packageName])) {
            return self::VERSIONS[$packageName];
        }

        throw new \OutOfBoundsException(
            'Required package "' . $packageName . '" is not installed: check your ./vendor/composer/installed.json and/or ./composer.lock files'
        );
    }
}
