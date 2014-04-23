<?php
/**
 * Created by PhpStorm.
 * User: Ashok_Adhikari
 * Date: 4/18/14
 * Time: 1:59 PM
 */
use Go\Core\AspectKernel;
use Go\Core\AspectContainer;
/**
 * Application Aspect Kernel
 */
class ApplicationAspectKernel extends AspectKernel
{
    /**
     * Configure an AspectContainer with advisors, aspects and pointcuts
     *
     * @param AspectContainer $container
     *
     * @return void
     */
    protected function configureAop(AspectContainer $container)
    {
        $container->registerAspect(new MonitorAspect());
    }
}