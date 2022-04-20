<?php

namespace App\Repository;

use App\Entity\ShowbizAlbum;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\OptimisticLockException;
use Doctrine\ORM\ORMException;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method ShowbizAlbum|null find($id, $lockMode = null, $lockVersion = null)
 * @method ShowbizAlbum|null findOneBy(array $criteria, array $orderBy = null)
 * @method ShowbizAlbum[]    findAll()
 * @method ShowbizAlbum[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class ShowbizAlbumRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, ShowbizAlbum::class);
    }

    /**
     * @throws ORMException
     * @throws OptimisticLockException
     */
    public function add(ShowbizAlbum $entity, bool $flush = true): void
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
    public function remove(ShowbizAlbum $entity, bool $flush = true): void
    {
        $this->_em->remove($entity);
        if ($flush) {
            $this->_em->flush();
        }
    }
	
	/**
	 * Liste des albums par ordre de level artiste
	 * @return float|int|mixed|string
	 */
	public function findListOrderByFlagArtiste($initial=null)
	{
		$query = $this->createQueryBuilder('sal')
			->addSelect('sar')
			->leftJoin('sal.artiste', 'sar')
			->orderBy('sar.flag', 'DESC')
			->addOrderBy('sal.createdAt', 'DESC');
			if ($initial){
				$query->where('sar.nom LIKE :search')
					->orWhere('sal.titre LIKE :search')
					->setParameter('search', '%'.$initial.'%');
			}
			
			return $query->getQuery()->getResult();
	}
	
	/**
	 * Liste des albums par genre musical
	 *
	 * @param $genre
	 * @return float|int|mixed|string
	 */
	public function findByGenre($genre, $album=null)
	{
		$query = $this->createQueryBuilder('al')
			->addSelect('ar')
			->leftJoin('al.artiste', 'ar')
			->orderBy('ar.flag', 'DESC')
			->addOrderBy('al.createdAt', 'DESC');
			if (!$album){
				$query->where('ar.genre LIKE :genre')
					->setParameter('genre', $genre);
			}else{
				$query->where('ar.genre LIKE :genre')
					->andWhere('al.id <> :album')
					->setParameters([
						'genre' => $genre,
						'album' => $album
					]);
			}
			//$query->getQuery()->getResult();
		
		return $query->getQuery()->getResult();
	}
	
	/**
	 * Liste des autres albums de l'artistes
	 *
	 * @param $album
	 * @param $artiste
	 * @return float|int|mixed|string
	 */
	public function findAutreAlbumArtiste($album, $artiste)
	{
		return $this->createQueryBuilder('al')
			->addSelect('ar')
			->leftJoin('al.artiste', 'ar')
			->where('al.id <> :album')
			->andWhere('ar.id = :artiste')
			->setParameters([
				'album' => $album,
				'artiste' => $artiste
			])
			->getQuery()->getResult();
	}

    // /**
    //  * @return Album[] Returns an array of Album objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('a.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Album
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
