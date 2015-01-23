<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 21/01/15
 * Time: 14:14
 */

namespace UsuarioBundle\Repository;

use Doctrine\ORM\EntityRepository;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class UsuarioRepository extends EntityRepository implements UserProviderInterface
{
    public function loadUserByUsername($username)
    {
        echo '<pre>'; var_dump(12321123); die;
        return $this->findOneBy(array('noEmail' => $username));
    }

    public function refreshUser(UserInterface $user)
    {
        // TODO: Implement refreshUser() method.
    }

    public function supportsClass($class)
    {
        // TODO: Implement supportsClass() method.
    }

} 