<?php

use Migrations\AbstractMigration;

class InitialTables extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-change-method
     * @return void
     */
    public function change()
    {
        $users = $this->table('users');
        $users->addColumn('username', 'string', ['limit' => 20])
              ->addColumn('password', 'string', ['limit' => 40])
              ->addColumn('email', 'string', ['limit' => 100])
              ->addColumn('first_name', 'string', ['limit' => 30])
              ->addColumn('last_name', 'string', ['limit' => 30])
              ->addColumn('created', 'datetime')
              ->addColumn('updated', 'datetime')
              ->addIndex(['username', 'email'], ['unique' => true])
              ->create();


        $pages = $this->table('pages');
        $pages->addColumn('title', 'string', ['limit' => 255])
              ->addColumn('slug', 'string', ['limit' => 255])
              ->addColumn('body', 'text', ['null'=> true, ])
              ->addColumn('published', 'boolean')
              ->addColumn('created', 'datetime')
              ->addColumn('updated', 'datetime')
              ->addIndex(['slug'], ['unique' => true])
              ->create();

        $tags = $this->table('tags');
        $tags->addColumn('title', 'string', ['limit' => 255])
             ->addColumn('slug', 'string', ['limit' => 255])
             ->addColumn('created', 'datetime')
             ->addColumn('updated', 'datetime')
             ->addIndex(['slug'], ['unique' => true])
             ->create();





        # insert initial data
        $users->insert([
            'username' => 'admin',
            'password' => 'changeme',
            'email' => 'dan.gasperoni@gmail.com',
            'first_name' => 'Admin',
            'last_name' => 'Admin',
            'created' => date("Y-m-d H:i:s"),
            'updated' => date("Y-m-d H:i:s"),
        ])->save();

        $pages->insert([
            'title'=> 'First page',
            'slug'=> 'first-page',
            'published'=> false,
            'created' => date("Y-m-d H:i:s"),
            'updated' => date("Y-m-d H:i:s"),
        ])->save();

    }
}