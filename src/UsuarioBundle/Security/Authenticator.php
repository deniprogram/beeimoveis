<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 22/01/15
 * Time: 18:38
 */

namespace UsuarioBundle\Security;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Security\Core\Authentication\SimpleFormAuthenticatorInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\Authentication\Token\UsernamePasswordToken;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoder;
use Symfony\Component\Security\Core\User\UserProviderInterface;

class Authenticator implements SimpleFormAuthenticatorInterface
{
    private $encoder;

    public function __construct(UserPasswordEncoder $encoder)
    {
        $this->encoder = $encoder;
    }

    public function authenticateToken(TokenInterface $token, UserProviderInterface $userProvider, $providerKey)
    {
        try {
            $user = $userProvider->loadUserByUsername($token->getUsername());
        } catch (UsernameNotFoundException $e) {
            throw new AuthenticationException('Invalid username or password');
        }

        $passwordValid = $this->encoder->isPasswordValid($user, $token->getCredentials());

        if ($passwordValid) {
            $currentHour = date('G');
            if ($currentHour < 14 || $currentHour > 16) {
                throw new AuthenticationException(
                    'You can only log in between 2 and 4!',
                    100
                );
            }

            return new UsernamePasswordToken(
                $user,
                $user->getPassword(),
                $providerKey,
                $user->getRoles()
            );
        }

        throw new AuthenticationException('Invalid username or password');
    }

    public function supportsToken(TokenInterface $token, $providerKey)
    {
        return $token instanceof UsernamePasswordToken
        && $token->getProviderKey() === $providerKey;
    }

    public function createToken(Request $request, $username, $password, $providerKey)
    {
        return new UsernamePasswordToken($username, $password, $providerKey);
    }

} 