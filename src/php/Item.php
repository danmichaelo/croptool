<?php

namespace CropTool;

use DI\FactoryInterface;
use Psr\Log\LoggerInterface;

class Item
{
    protected $repo;
    protected $logger;
    protected $entity;

    /**
     * Item constructor.
     *
     * @param FactoryInterface $factory
     * @param LoggerInterface $logger
     * @param string $entity (e.g. 'Q42')
     */
    public function __construct(FactoryInterface $factory, LoggerInterface $logger, $entity)
    {
        $this->logger = $logger;
        $this->repo = $factory->make(ApiService::class, [
            'site' => 'www.wikidata.org',
        ]);
        $this->entity = $entity;
    }

    public function addClaim($property, $value, $snaktype='value')
    {
        $claims = $this->repo->getClaimsByProperty($this->entity, 'P18');
        foreach ($claims as $claim) {
            if (isset($claim->mainsnak) && isset($claim->mainsnak->datavalue) && $claim->mainsnak->datavalue == $value) {
                $this->logger->info("$property claim already existed on $this->entity");
                return;
            }
        }

        $response = $this->repo->createClaim($this->entity, $property, $value, $snaktype);

        if ($response->success == 1) {
            $this->logger->info("Added $property claim to $this->entity");
        } else {
            $this->logger->error("Failed to add $property claim to $this->entity");
        }
    }

    public function get()
    {
        return $this->repo->getEntities($this->entity)->{$this->entity};
    }
}
