<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 22/01/15
 * Time: 18:13
 */

namespace UsuarioBundle\Security;

use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\Security\Core\User\UserProviderInterface;
use Symfony\Component\Security\Core\Exception\UsernameNotFoundException;

class UsuarioProvider implements UserProviderInterface
{

    protected $user;

    public function __contsruct(UserInterface $user)
    {
        echo '<pre>'; var_dump(123); die;
        $this->user = $user;
    }

    /**
     * Loads the user for the given username.
     *
     * This method must throw UsernameNotFoundException if the user is not
     * found.
     *
     * @throws UsernameNotFoundException if the user is not found
     * @param string $username The username
     *
     * @return UserInterface
     */
    function loadUserByUsername($username)
    {
//        $user = Usuario->findOneBy(array('username' => $username));

        if (empty($user)) {
            throw new UsernameNotFoundException('Could not find user. Sorry!');
        }

        $this->user = $user;

        return $user;
    }

    /**
     * Refreshes the user for the account interface.
     *
     * It is up to the implementation if it decides to reload the user data
     * from the database, or if it simply merges the passed User into the
     * identity map of an entity manager.
     *
     * @throws UnsupportedUserException if the account is not supported
     * @param UserInterface $user
     *
     * @return UserInterface
     */
    function refreshUser(UserInterface $user)
    {
        return $user;
    }

    /**
     * Whether this provider supports the given user class
     *
     * @param string $class
     *
     * @return Boolean
     */
    function supportsClass($class)
    {
        return $class === 'UsuarioBundle\Entity\User';
    }
}