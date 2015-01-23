<?php
/**
 * Created by PhpStorm.
 * User: Glauber
 * Date: 20/01/15
 * Time: 16:03
 */

namespace Base\CrudBundle\Controller;


class CrudController extends AbstractCrud
{
    protected $vars = array();

    public function indexAction()
    {
        return $this->render($this->resolveRouteName(), $this->vars);
    }

    public function createAction()
    {
    }

    public function editAction()
    {
    }

    public function listAction()
    {
    }
}