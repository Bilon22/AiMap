<?php

namespace App\Repository;

use App\Entity\Tilles;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;

/**
 * @method Tilles|null find($id, $lockMode = null, $lockVersion = null)
 * @method Tilles|null findOneBy(array $criteria, array $orderBy = null)
 * @method Tilles[]    findAll()
 * @method Tilles[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class TillesRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, Tilles::class);
    }

    // /**
    //  * @return Tilles[] Returns an array of Tilles objects
    //  */
    /*
    public function findByExampleField($value)
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->orderBy('t.id', 'ASC')
            ->setMaxResults(10)
            ->getQuery()
            ->getResult()
        ;
    }
    */

    /*
    public function findOneBySomeField($value): ?Tilles
    {
        return $this->createQueryBuilder('t')
            ->andWhere('t.exampleField = :val')
            ->setParameter('val', $value)
            ->getQuery()
            ->getOneOrNullResult()
        ;
    }
    */
}
