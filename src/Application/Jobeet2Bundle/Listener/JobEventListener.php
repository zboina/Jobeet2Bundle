<?php


namespace Application\Jobeet2Bundle\Listener;

use Doctrine\ORM\Event\LifecycleEventArgs;


class JobEventListener {
    public function prePersist (LifecycleEventArgs $eventArgs)
    {
        /**
         *  TODO: testing WORKS used lifecyclecallbacks instead
         *  registered with DIC dbal_events.xml
         */
                  
       /* $em = $eventArgs->getEntityManager();
        $uow = $em->getUnitOfWork();*/


    }

}