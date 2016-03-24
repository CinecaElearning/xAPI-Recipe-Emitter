<?php namespace XREmitter;
use \TinCan\RemoteLRS as TinCanRemoteLrs;
use \TinCan\Statement as TinCanStatement;
use \stdClass as PhpObj;

class Repository extends PhpObj {
    protected $store;

    /**
     * Constructs a new Repository.
     * @param TinCanRemoteLrs $store
     * @param PhpObj $cfg
     */
    public function __construct(TinCanRemoteLrs $store) {
        $this->store = $store;
    }

    /**
     * Creates an event in the store.
     * @param [string => mixed] $statements
     * @return [string => mixed]
     */
    public function createEvents(array $statements) {
        $LRSResponse = $this->store->saveStatements($statements);
		if (isset($LRSResponse->success) && $LRSResponse->success) $statements['last_action_result'] = 'success';
		else $statements['last_action_result'] = 'error';
        return $statements;
    }
}