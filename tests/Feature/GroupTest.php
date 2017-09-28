<?php

namespace Tests\Feature;

use App\Group;
use App\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GroupTest extends TestCase
{
    /** @var  Group */
    protected $group1;
    /** @var  Group */
    protected $group2;
    /** @var  Group */
    protected $group3;

    public function setup()
    {
        $user = new User(array('name' => 'John'));
        $this->be($user);

        $this->group1 = new Group();
        $this->group2 = new Group();
        $this->group3 = new Group();

        $this->group1->name = "Group1";
        $this->group2->name = "Group2";
        $this->group3->name = "Group3";

        $this->group1->save();
        $this->group2->save();
        $this->group3->save();

        assertTrue($this->group1->isOwner($user->id));
    }

    public function testAddUser() {
        $user = new User(array('name' => 'John'));

    }
}
