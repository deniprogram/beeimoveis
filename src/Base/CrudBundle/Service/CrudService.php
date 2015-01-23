<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 20/01/15
 * Time: 16:25
 */

namespace Base\CrudBundle\Service;


use Base\CrudBundle\Service\Exception\CrudServiceException;
use Doctrine\ORM\EntityManager;

class CrudService
{
    protected $entity = null;

    public function __construct(EntityManager $entityManager)
    {
        if (null === $this->entity) {
            throw new CrudServiceException('Necessário informar a entidade principal para uso.');
        }

        parent::__construct($entityManager);
    }
} 