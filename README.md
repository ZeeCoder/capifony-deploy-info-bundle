Capifony Deplyoment Info Bundle
===============================

As the name suggests, this bundle assumes a Capifony deployment process.

The bundle adds a simple footer for the dev environment, showing when was the last deployment, and what is the current "version". (Which is the name of the project's current folder on the server.)

Usage
-----
 - Install with composer,
 - Register in the AppKernel: `new ZeeCoder\Bundle\CapifonyDeployInfoBundle\ZeeCapifonyDeployInfoBundle(),`,
 - Add the css after `assets:install`: `bundles/zeecapifonydeployinfo/css/DeploymentInfo.css`
 - Render the Deployment controller's getInfo action wherever you want in your twig template:
  
   `{{ render(controller('ZeeCapifonyDeployInfoBundle:Deployment:getInfo')) }}`

Additional Configuration
------------------------
With the default setup, the template's version will be 'prod' or 'dev', and if uploaded to a staging server, the info won't render at all.

This is probably not what you want, so through parameters, the allowed hosts can be configured:

Default: `zee_capifony_deploy_info.allowed_hosts: localhost|127.0.0.1|emese.zalehy.com`

The version is detected in the following way:
 - Check if the environment is dev, and if it is, use the `dev_version` parameter,
 - Check if the `real_version` parameter is set, and if it is, use it,
 - Check the root directory's name, and if it's a release (numeric) name, use it as version,
 - If all else fails, the project most likely runs on localhost, in prod env, so use the `local_prod_version` parameter.

All of the above can be ovveriden with the `zee_capifony_deploy_info` prefix in the parameters.yml file.