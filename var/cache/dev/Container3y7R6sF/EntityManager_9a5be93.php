<?php

namespace Container3y7R6sF;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{

    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolderc744b = null;

    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer3461b = null;

    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties542ea = [
        
    ];

    public function getConnection()
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'getConnection', array(), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'getMetadataFactory', array(), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'getExpressionBuilder', array(), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'beginTransaction', array(), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'getCache', array(), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->getCache();
    }

    public function transactional($func)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'transactional', array('func' => $func), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->transactional($func);
    }

    public function commit()
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'commit', array(), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->commit();
    }

    public function rollback()
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'rollback', array(), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'getClassMetadata', array('className' => $className), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'createQuery', array('dql' => $dql), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'createNamedQuery', array('name' => $name), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'createQueryBuilder', array(), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'flush', array('entity' => $entity), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'clear', array('entityName' => $entityName), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->clear($entityName);
    }

    public function close()
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'close', array(), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->close();
    }

    public function persist($entity)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'persist', array('entity' => $entity), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'remove', array('entity' => $entity), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'refresh', array('entity' => $entity), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'detach', array('entity' => $entity), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'merge', array('entity' => $entity), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'getRepository', array('entityName' => $entityName), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'contains', array('entity' => $entity), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'getEventManager', array(), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'getConfiguration', array(), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'isOpen', array(), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'getUnitOfWork', array(), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'getProxyFactory', array(), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'initializeObject', array('obj' => $obj), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'getFilters', array(), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'isFiltersStateClean', array(), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'hasFilters', array(), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return $this->valueHolderc744b->hasFilters();
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer3461b = $initializer;

        return $instance;
    }

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolderc744b) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolderc744b = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolderc744b->__construct($conn, $config, $eventManager);
    }

    public function & __get($name)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, '__get', ['name' => $name], $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        if (isset(self::$publicProperties542ea[$name])) {
            return $this->valueHolderc744b->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc744b;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc744b;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc744b;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolderc744b;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, '__isset', array('name' => $name), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc744b;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolderc744b;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, '__unset', array('name' => $name), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolderc744b;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolderc744b;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, '__clone', array(), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        $this->valueHolderc744b = clone $this->valueHolderc744b;
    }

    public function __sleep()
    {
        $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, '__sleep', array(), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;

        return array('valueHolderc744b');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer3461b = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer3461b;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer3461b && ($this->initializer3461b->__invoke($valueHolderc744b, $this, 'initializeProxy', array(), $this->initializer3461b) || 1) && $this->valueHolderc744b = $valueHolderc744b;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolderc744b;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolderc744b;
    }


}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
