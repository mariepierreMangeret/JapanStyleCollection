<?php

namespace JSC\PlatformBundle\Repository;

use Doctrine\ORM\EntityRepository;

/**
 * BrandRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class BrandRepository extends \Doctrine\ORM\EntityRepository
{
	public function myBrandsIndex() {
   		$query = $this->_em->createQuery('
			SELECT n FROM JSCPlatformBundle:Brand n
			ORDER BY n.id DESC');

   		return ($query->getResult());
	}
}
