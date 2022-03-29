<?php

namespace App\Repository;

use App\Entity\ShowbizPresentation;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ShowbizPresentation|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShowbizPresentation|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShowbizPresentation[]    findAll()
 * @method ShowbizPresentation[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShowbizPresentationRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShowbizPresentation::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(ShowbizPresentation $entity, bool $flush = true): void
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
    public function remove(ShowbizPresentation $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }

    // /**
    //  * @return ShowbizPresentation[] Returns an array of ShowbizPresentation objects
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
    public function findOneBySomeField($value): ?ShowbizPresentation
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
