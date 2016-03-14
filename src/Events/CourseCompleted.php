<?php namespace XREmitter\Events;

class CourseCompleted extends Event {
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
            'object' => $this->readCourse($opts),
            'verb' => [
                'id' => 'http://adlnet.gov/expapi/verbs/completed',
                'display' => $this->readVerbDisplay($opts),
            ],
        ]);
    }
}