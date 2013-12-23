<?php
namespace Desyncr\Wtngrm\Netgearman\Factory;
use Desyncr\Wtngrm\Factory as Wtngrm;
use Desyncr\Wtngrm\Netgearman\Service\GearmanService;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class GearmanServiceFactory extends Wtngrm\AbstractServiceFactory implements FactoryInterface {
    protected $configuration_key = 'netgearman-adapter';

    public function createService(ServiceLocatorInterface $serviceLocator) {
        parent::createService($serviceLocator);

        $gearman = new \Net\Gearman\Client();
        $options = isset($this->config[$this->configuration_key]) ? $this->config[$this->configuration_key] : array();

        return new GearmanService($gearman, $options);

    }
}
