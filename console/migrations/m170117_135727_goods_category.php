<?php

use yii\db\Migration;

class m170117_135727_goods_category extends Migration
{
    const TABLE_NAME ='{{%goods_category}}';
    const TABLE_NAME_TAB ='商品分类';

    public function up()
    {
        $tableOptions = null;
        if ($this->db->driverName === 'mysql') {
            // http://stackoverflow.com/questions/766809/whats-the-difference-between-utf8-general-ci-and-utf8-unicode-ci
            $tableOptions = 'CHARACTER SET utf8 COLLATE utf8_unicode_ci ENGINE=InnoDB COMMENT='."'" . self::TABLE_NAME_TAB ."'";
        }

        $this->createTable(self::TABLE_NAME, [
            'id' => $this->primaryKey(),
            'title' => $this->string(32)->notNull()->defaultValue('')->comment('分类名称'),
            'parent_id' => $this->bigInteger()->notNull()->unsigned()->defaultValue(0)->comment('上级分类ID'),
            'created_at' => $this->integer()->notNull()->unsigned()->defaultValue(0)->comment('创建时间'),
        ], $tableOptions);
    }

    public function down()
    {
        $this->dropTable(self::TABLE_NAME);
    }

    /*
    // Use safeUp/safeDown to run migration code within a transaction
    public function safeUp()
    {
    }

    public function safeDown()
    {
    }
    */
}
