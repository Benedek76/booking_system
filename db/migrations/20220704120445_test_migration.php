<?php
declare(strict_types=1);

use Phinx\Migration\AbstractMigration;

final class TestMigration extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change(): void
    {
        $table = $this->table('user_data');
        $table  ->addColumn('user_id', 'integer', 'PRIMARY_KEY')
                ->addColumn('username', 'string', ['limit' => 20])
                ->addColumn('password', 'string', ['limit' => 40])
                ->addColumn('f_name', 'string', ['limit' => 30])
                ->addColumn('l_name', 'string', ['limit' => 30])
                ->addColumn('email', 'string', ['limit' => 50])
                ->addColumn('created', 'datetime')
                ->create();
    }
}
