<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 20/01/15
 * Time: 16:04
 */

namespace Base\CrudBundle\Controller;

use Base\BaseBundle\Controller\AbstractController;
use Base\CrudBundle\Controller\Exception\CrudException;

class AbstractCrud extends AbstractController
{
    protected $service = null;

    public function __construct()
    {
        if (null === $this->service) {
            throw new CrudException('Necessário informar o serviço principal a ser utilizado');
        }
    }

    /**
     * Retorna o nome do arquivo twig para renderizar
     *
     * @return mixed
     */
    protected function resolveRouteName()
    {
        $pattern = "#Controller\\\([a-zA-Z]*)Controller#";
        $matches = array();
        preg_match($pattern, $this->getRequest()->attributes->get('_controller'), $matches);

        $search  = array('Controller', '\\', $matches[1], 'Action', '::');
        $repalce = array('', '', ':' . $matches[1], '.html.twig', ':');
        $bundle  = str_replace($search, $repalce, $this->getRequest()->attributes->get('_controller'));

        return $bundle;
    }
}