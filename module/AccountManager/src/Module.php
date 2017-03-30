<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonModule for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace AccountManager;

class Module
{
    public function getConfig()
    {
        return include __DIR__ . '/../config/module.config.php';
    }

    // The "init" method is called on application start-up and 
    // allows to register an event listener.
    /*public function init(ModuleManager $manager)
    {
        // Get event manager.
        $eventManager = $manager->getEventManager();
        $sharedEventManager = $eventManager->getSharedManager();
        // Register the event listener method. 
        $sharedEventManager->attach(__NAMESPACE__, MvcEvent::EVENT_DISPATCH_ERROR,
                                    [$this, 'onError'], 100);
        $sharedEventManager->attach(__NAMESPACE__, MvcEvent::EVENT_RENDER_ERROR, 
                                    [$this, 'onError'], 100);
    }
    
    // Event listener method.
    public function onError(MvcEvent $event)
    {
        // Get the exception information.
        $exception = $event->getParam('exception');
        if ($exception!=null) {
            $exceptionName = $exception->getMessage();
            $file = $exception->getFile();
            $line = $exception->getLine();
            $stackTrace = $exception->getTraceAsString();
        }

        $errorMessage = $event->getError();
        $controllerName = $event->getController();
        
        // Prepare email message.
        $to = 'admin@tapseries.com';
        $subject = 'New Website Exception';
        
        $body = '';
        if(isset($_SERVER['REQUEST_URI'])) {
            $body .= "Request URI: " . $_SERVER['REQUEST_URI'] . "\n\n";
        }
        $body .= "Controller: $controllerName\n";
        $body .= "Error message: $errorMessage\n";
        if ($exception!=null) {
            $body .= "Exception: $exceptionName\n";
            $body .= "File: $file\n";
            $body .= "Line: $line\n";
            $body .= "Stack trace:\n\n" . $stackTrace;
        }
        
        $body = str_replace("\n", "<br>", $body);
        
        // Send an email about the error.
        mail($to, $subject, $body);
    }*/
}
