<?php

namespace AppBundle\Mapper;

use AppBundle\Entity\Menu;
use Doctrine\ORM\EntityManager;

class MenuMapper
{
    /**
     * @var EntityManager
     */
    protected $entityManager;

    /**
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->entityManager = $entityManager;
    }

    /**
     * @param string $name
     * @return Menu|null
     */
    public function findByName($name)
    {
        return $this->getRepository()->findOneBy(['name' => $name]);
    }

    /**
     * @param Menu $menu
     */
    public function update(Menu $menu)
    {
        $this->entityManager->persist($menu);
        $this->entityManager->flush($menu);
    }

    /**
     * @param Menu $menu
     */
    public function remove(Menu $menu)
    {
        $this->entityManager->remove($menu);
        $this->entityManager->flush($menu);
    }

    /**
     * @return \Doctrine\ORM\EntityRepository
     */
    protected function getRepository()
    {
        return $this->entityManager->getRepository('AppBundle\Entity\Menu');
    }
}
