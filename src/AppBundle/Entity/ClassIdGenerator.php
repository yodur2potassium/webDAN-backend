<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;

use Doctrine\ORM\Id\AbstractIdGenerator;

/**
 * Description of ClassIdGenerator
 *
 * @author xnef424
 */
class ClassIdGenerator extends AbstractIdGenerator {
    
    public function generate(\Doctrine\ORM\EntityManager $em, $entity) {
        // Get complete class name (ex: AppBundle\Entity\Test...)
        $className = $em->getClassMetadata(get_class($entity))->getName();
        // Create a prefix from class name
        $prefix = substr(strtolower(explode("\\",$className)[2]), 0,3);
        // Set the query string to fech last id from DB
        $queryStr = "SELECT class.id FROM ".$className." class" ;
        // Create the query
        $query = $em->createQuery($queryStr);
        // Execute the query, get an array
        $results = $query->getResult(null);
        //
        
        if (!empty($results)){
                $lastElement = array_pop($results);
                $lastId = substr($lastElement,2);
                $lastId++;

        }else{
            $lastId = 1;
        }
        
        $updatedId = $prefix.$lastId;
        
        return $updatedId;
    }

}
