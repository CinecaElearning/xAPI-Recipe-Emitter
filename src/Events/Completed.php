<?php namespace XREmitter\Events;

abstract class Completed extends Event {
    protected static $verb_display = [
        'en' => 'completed'
    ];

    /**
     * Reads data for an event.
     * @param [String => Mixed] $opts
     * @return [String => Mixed]
     * @override Event
     */
    public function read(array $opts) {
        return array_merge(parent::read($opts), [
            'verb' => [
                //'id' => 'http://id.tincanapi.com/verb/viewed',
                'id' => 'http://adlnet.gov/expapi/verbs/completed',
                'display' => $this->readVerbDisplay($opts),
            ],
        ]);
    }
}
