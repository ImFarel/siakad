<?php

namespace App;
/*
 * A trait to handle authorization based on users permissions for given controller
 */

trait Authorizable
{
    /**
     * Abilities
     *
     * @var array
     */
    private $abilities = [
        'index'            => 'view',
        'view'             => 'view',
        'add'              => 'add', 
        'store'            => 'add',
        'edit'             => 'edit',
        'update'           => 'edit',
        'editprocess'      => 'edit',
        'addprocess'       => 'add',
        'delete'           => 'delete',
        'permission'       => 'view',
        'editpermission'   => 'edit',
        'deletedetail'     => 'delete',
        'adddetails'       => 'add',
        'addprocessdetail' => 'add',
        'editdetails'      => 'edit',
        'editprocessdetail'=> 'edit',
        'doneprocess'      => 'edit',
        'truncate'         => 'delete'
    ];

    /**
     * Override of callAction to perform the authorization before it calls the action
     *
     * @param $method
     * @param $parameters
     * @return mixed
     */
    public function callAction($method, $parameters)
    {
        if( $ability = $this->getAbility($method) ) {
            $this->authorize($ability);
        }

        return parent::callAction($method, $parameters);
    }

    /**
     * Get ability
     *
     * @param $method
     * @return null|string
     */
    public function getAbility($method)
    {
        $routeName = explode('.', \Request::route()->getName());
        // dd($routeName);
        $action = array_get($this->getAbilities(), $method);

        return $action ? $action . '_' . $routeName[0] : null;
    }

    /**
     * @return array
     */
    private function getAbilities()
    {
        return $this->abilities;
    }

    /**
     * @param array $abilities
     */
    public function setAbilities($abilities)
    {
        $this->abilities = $abilities;
    }
}
