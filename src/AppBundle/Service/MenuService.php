<?php

namespace AppBundle\Service;

use AppBundle\Mapper\MenuMapper;
use AppBundle\Entity\Menu;

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

    /**
     * @param string $name
     * @return Menu|null
     */
    public function findByName($name)
    {
        return $this->menuMapper->findByName($name);
    }
}
