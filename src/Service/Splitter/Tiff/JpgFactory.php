<?php
namespace SplitFile\Service\Splitter\Tiff;

use SplitFile\Splitter\Tiff\Jpg;
use Laminas\ServiceManager\Factory\FactoryInterface;
use Interop\Container\ContainerInterface;

class JpgFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $services, $requestedName, array $options = null)
    {
        return new Jpg($services->get('Omeka\Cli'), $services->get('Omeka\Settings'), $services->get('Omeka\Logger'));
    }
}
