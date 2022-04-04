<?php

namespace Structural\DataMapper;

class DataMapper
{
    private StorageAdapter $storageAdapter;

    public function __construct(StorageAdapter $storageAdapter)
    {
        $this->storageAdapter = $storageAdapter;
    }

    public function findById(string $id)
    {
        return $this->storageAdapter->find($id);
    }

    public function saveUser(User $user)
    {
        return $this->storageAdapter->save(
            [$user->getId() => ['userName' => $user->getUserName(), 'password' => $user
                ->getPassword()]]);
    }
}