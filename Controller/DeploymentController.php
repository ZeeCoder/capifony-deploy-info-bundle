<?php

namespace ZeeCoder\Bundle\CapifonyDeployInfoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class DeploymentController extends Controller
{
    /**
     * @Template("ZeeCapifonyDeployInfoBundle:Partial:deploymentInfo.html.twig")
     */
    public function getInfoAction()
    {
        $deploymentService = $this->get('zee_capifony_deploy_info.deployment');

        return array(
            'deploymentInfo' => $deploymentService->getInfo(),
        );
    }
}
