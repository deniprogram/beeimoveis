<?php

namespace UsuarioBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UsuarioBundle:Default:index.html.twig');
    }

    public function authenticateAction()
    {
        $em = $this->getDoctrine();
        $repo  = $em->getRepository("UserBundle:User"); //Entity Repository
        $user = $repo->loadUserByUsername($username);
        if (!$user) {
            throw new UsernameNotFoundException("User not found");
        } else {
            $token = new UsernamePasswordToken($user, null, "your_firewall_name", $user->getRoles());
            $this->get("security.context")->setToken($token); //now the user is logged in

            //now dispatch the login event
            $request = $this->get("request");
            $event = new InteractiveLoginEvent($request, $token);
            $this->get("event_dispatcher")->dispatch("security.interactive_login", $event);
        }
        return $this->render('UsuarioBundle:Default:index.html.twig');
    }
}
