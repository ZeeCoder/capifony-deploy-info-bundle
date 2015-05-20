Capifony Deplyoment Info Bundle
===============================
[![Project Status](http://stillmaintained.com/ZeeCoder/capifony-deploy-info-bundle.png)](http://stillmaintained.com/ZeeCoder/capifony-deploy-info-bundle)

As the name suggests, this bundle assumes a Capifony deployment process.

The bundle adds a simple footer for the dev environment, showing when was the last deployment, and what is the current "version". (Which is the name of the project's current folder on the server.)

Usage
-----
 - Install with composer,
 - Register in the AppKernel: `new ZeeCoder\Bundle\CapifonyDeployInfoBundle\ZeeCapifonyDeployInfoBundle(),`,
 - Add the css after `assets:install`: `bundles/zeecapifonydeployinfo/css/DeploymentInfo.css`
 - Render the Deployment controller's getInfo action wherever you want in your twig template:
  
   `{{ render(controller('ZeeCapifonyDeployInfoBundle:Deployment:getInfo')) }}`
