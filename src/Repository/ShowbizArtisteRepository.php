<?php

namespace App\Repository;

use App\Entity\ShowbizArtiste;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\ORM\Tools\Pagination\Paginator;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ShowbizArtiste|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShowbizArtiste|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShowbizArtiste[]    findAll()
 * @method ShowbizArtiste[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShowbizArtisteRepository extends ServiceEntityRepository
{
	public const  PAGINATOR_PER_PAGE = 16;
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShowbizArtiste::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(ShowbizArtiste $entity, bool $flush = true): void
    {
        $this->_em->persist($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function remove(ShowbizArtiste $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }
	
	/**
	 * @param $initial
	 * @return float|int|mixed|string
	 */
	public function findByPaginator($initial=null)
	{
		$query = $this->createQueryBuilder('sa')
			->orderBy('sa.flag', 'DESC')
			->addOrderBy('sa.nom', 'ASC');
			if ($initial){
				$query->where('sa.nom LIKE :search')
					->setParameter('search', '%'.$initial.'%');
			}
			;
		
		return $query->getQuery()->getResult();
	}
	
	/**
	 * Liste des artistes commençant part $initial
	 *
	 * @param $initial
	 * @return float|int|mixed|string
	 */
	public function findByInitial($initial, int $offset)
	{
		return $this->createQueryBuilder('sa')
			->where('sa.nom LIKE :search')
			->orderBy('sa.flag', 'DESC')
			->addOrderBy('sa.nom', 'ASC')
			->setParameter('search', '%'.$initial.'%')
			->getQuery()->getResult()
			;
	}

    // /**
    //  * @return ShowbizArtiste[] Returns an array of ShowbizArtiste objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('s.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?ShowbizArtiste
    {
        return $this->createQueryBuilder('s')
            ->andWhere('s.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
