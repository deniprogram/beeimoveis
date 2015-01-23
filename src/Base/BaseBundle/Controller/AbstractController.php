<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 20/01/15
 * Time: 16:13
 */

namespace Base\BaseBundle\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AbstractController extends Controller
{
    /**
     * Retorna a Service respectiva da Controller
     *
     * @return object
     */
    protected function getService()
    {
        return $this->get($this->service);
    }
}