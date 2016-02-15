<?php

namespace AppBundle\Twig\Extension;

use AppBundle\Service\MenuService;

class MenuExtension extends \Twig_Extension
{
    /**
     * @var MenuService
     */
    protected $menuService;

    /**
     * @param MenuService $menuService
     */
    public function __construct(MenuService $menuService)
    {
        $this->menuService = $menuService;
    }

    /**
     * @return array
     */
    public function getFunctions()
    {
        return [
            new \Twig_SimpleFunction('getMenuItemsByName', [$this, 'getMenuItemsByName']),
        ];
    }

    /**
     * @param string $name
     * @return array
     */
    public function getMenuItemsByName($name)
    {
        $menu = $this->menuService->findByName($name);
        if (!$menu) {
            return [];
        }

        return $menu->getItems()->toArray();
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'menu';
    }
}
