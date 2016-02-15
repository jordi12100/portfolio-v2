<?php

namespace AppBundle\Service;

use AppBundle\Mapper\MenuMapper;

class MenuService
{
    /**
     * @var MenuMapper
     */
    protected $menuMapper;

    /**
     * @param MenuMapper $menuMapper
     */
    public function __construct(MenuMapper $menuMapper)
    {
        $this->menuMapper = $menuMapper;
    }
}
