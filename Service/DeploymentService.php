<?php

namespace ZeeCoder\Bundle\CapifonyDeployInfoBundle\Service;

class DeploymentService
{
    private $app_path;

    public function __construct($app_path)
    {
        $this->app_path = $app_path;
    }

    public function getInfo()
    {
        $app_path = realpath($this->app_path.'/../');
        $version = basename($app_path);

        return array(
            'date' => new \DateTime(date('Y-m-d H:i', filemtime($app_path))),
            'version' => (is_numeric($version) ? $version: 'dev'),
        );
    }
}
