<?php

namespace ZeeCoder\Bundle\CapifonyDeployInfoBundle\Service;

class DeploymentService
{
    private $app_path;
    private $environment;
    private $dev_version;
    private $real_version;
    private $local_prod_version;

    public function __construct($app_path, $environment, $dev_version, $real_version, $local_prod_version)
    {
        $this->app_path = $app_path;
        $this->environment = $environment;
        $this->dev_version = $dev_version;
        $this->real_version = $real_version;
        $this->local_prod_version = $local_prod_version;
    }

    public function getInfo()
    {
        $app_path = realpath($this->app_path.'/../');

        if ($this->environment == 'dev') {
            $version = $this->dev_version;
        } else {
            if (!$version = $this->real_version) {
                $version = basename($app_path);
                if (!is_numeric($version)) {
                    $version = $this->local_prod_version;
                } 
            }
        }

        return array(
            'date' => new \DateTime(date('Y-m-d H:i', filemtime($app_path))),
            'version' => $version,
        );
    }
}
