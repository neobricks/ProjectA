<?php

use Migrations\AbstractMigration;

class AddForignKeyPageTag extends AbstractMigration
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

        # primary key is a composite of tag_id and page_id
        $pages_tags = $this->table("pages_tags", [
            'id' => false, 'primary_key' => ['tag_id', 'page_id']
        ]);
        $pages_tags
            ->addColumn('tag_id', 'integer', ['limit'=>11])
            ->addColumn('page_id', 'integer', ['limit'=>11])
            ->create();

        $pages_tags
             ->addForeignKey('page_id', 'pages', 'id', [
                 'constraint' => 'page_key'
             ])
             ->save();

        $pages_tags
             ->addForeignKey('tag_id', 'tags', 'id', [
                 'constraint' => 'tag_key'
             ])
             ->save();
    }
}
