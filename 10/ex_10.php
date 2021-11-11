<?php
class Pangolin {
    public $friends;
    public $skills;

    public function __construct(array $friends = null, Skill $skills)
    {
        $this->friends = $friends;
        $this->skills = $skills;
        if (is_null($this->friends)){
            return false;
        }
        if (! $this->skills instanceof Skill){
            return false;
        }
    }
}